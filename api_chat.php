<?php
/* ═══════════════════════════════════════════════════════
   API du chatbot — relaie la conversation vers Groq.
   La clé API reste côté serveur (config.local.php ou variable
   d'environnement GROQ_API_KEY), jamais dans le navigateur.
═══════════════════════════════════════════════════════ */

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

const MAX_HISTORY     = 10;   // messages envoyés au modèle
const MAX_MSG_LENGTH  = 600;  // caractères par message visiteur
const RATE_LIMIT      = 15;   // requêtes max…
const RATE_WINDOW     = 600;  // …par fenêtre de 10 min et par IP
const RATE_FILE       = __DIR__ . '/data/chat_ratelimit.json';

function reply(int $status, array $body): void {
    http_response_code($status);
    echo json_encode($body, JSON_UNESCAPED_UNICODE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    reply(405, ['error' => 'Méthode non autorisée.']);
}

/* ── Config ── */
$config = file_exists(__DIR__ . '/config.local.php') ? require __DIR__ . '/config.local.php' : [];
$apiKey = getenv('GROQ_API_KEY') ?: ($config['groq_api_key'] ?? '');
$model  = $config['groq_model'] ?? 'openai/gpt-oss-120b';

if ($apiKey === '' || str_starts_with($apiKey, 'gsk_...')) {
    reply(500, ['error' => "L'assistant n'est pas encore configuré."]);
}

/* ── Limite de débit par IP (fichier JSON verrouillé) ── */
$ipHash = hash('sha256', ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . __DIR__);
$now    = time();
$fp     = fopen(RATE_FILE, 'c+');
if ($fp && flock($fp, LOCK_EX)) {
    $hits = json_decode(stream_get_contents($fp) ?: '{}', true) ?: [];
    foreach ($hits as $k => $times) {
        $hits[$k] = array_values(array_filter($times, fn($t) => $t > $now - RATE_WINDOW));
        if (!$hits[$k]) unset($hits[$k]);
    }
    $limited = count($hits[$ipHash] ?? []) >= RATE_LIMIT;
    if (!$limited) $hits[$ipHash][] = $now;
    ftruncate($fp, 0);
    rewind($fp);
    fwrite($fp, json_encode($hits));
    flock($fp, LOCK_UN);
    fclose($fp);
    if ($limited) {
        reply(429, ['error' => 'Trop de messages en peu de temps. Réessayez dans quelques minutes.']);
    }
}

/* ── Validation de l'historique envoyé par le navigateur ── */
$input    = json_decode(file_get_contents('php://input'), true);
$messages = [];
foreach (array_slice($input['messages'] ?? [], -MAX_HISTORY) as $m) {
    $role    = $m['role'] ?? '';
    $content = trim((string) ($m['content'] ?? ''));
    if (!in_array($role, ['user', 'assistant'], true) || $content === '') continue;
    $messages[] = ['role' => $role, 'content' => mb_substr($content, 0, $role === 'user' ? MAX_MSG_LENGTH : 2000)];
}
if (!$messages || end($messages)['role'] !== 'user') {
    reply(400, ['error' => 'Message invalide.']);
}

array_unshift($messages, ['role' => 'system', 'content' => require __DIR__ . '/includes/chatbot_profil.php']);

/* ── Appel Groq (API compatible OpenAI) ── */
$ch = curl_init('https://api.groq.com/openai/v1/chat/completions');
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 30,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ],
    CURLOPT_POSTFIELDS     => json_encode([
        'model'       => $model,
        'messages'    => $messages,
        'temperature' => 0.4,
        'max_tokens'  => 1200,
    ] + (str_starts_with($model, 'openai/gpt-oss')
        ? ['reasoning_effort' => 'low', 'include_reasoning' => false]  // modèle « raisonneur » : réflexion courte et masquée
        : [])),
]);
$raw    = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$err    = curl_error($ch);
curl_close($ch);

if ($raw === false) {
    error_log("Chatbot Groq: $err");
    reply(502, ['error' => "Impossible de joindre l'assistant pour le moment."]);
}

$data = json_decode($raw, true);
if ($status === 429) {
    reply(429, ['error' => "L'assistant est très sollicité, réessayez dans une minute."]);
}
if ($status !== 200 || !isset($data['choices'][0]['message']['content'])) {
    error_log("Chatbot Groq HTTP $status: $raw");
    reply(502, ['error' => "L'assistant a rencontré une erreur. Réessayez plus tard."]);
}

// Retire les caractères invisibles (espaces de largeur nulle) que le modèle glisse parfois
$answer = preg_replace('/[\x{200B}-\x{200D}\x{2060}\x{FEFF}]/u', '', $data['choices'][0]['message']['content']);
reply(200, ['reply' => trim($answer)]);
