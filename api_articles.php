<?php
/**
 * api_articles.php
 * Endpoint AJAX appelé par le front pour :
 *   GET  ?action=list&cat=all&q=...   → liste filtrée
 *   POST ?action=markRead             → retire le flag isNew
 *   POST ?action=refresh              → relance fetch_articles.php
 */

define('ARTICLES_FILE', __DIR__ . '/data/articles.json');

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

$action = $_REQUEST['action'] ?? 'list';

// ── Chargement ────────────────────────────────────────────────────────────────
function loadData() {
    if (!file_exists(ARTICLES_FILE)) return ['lastUpdate' => null, 'count' => 0, 'newCount' => 0, 'articles' => []];
    $decoded = json_decode(file_get_contents(ARTICLES_FILE), true);
    return is_array($decoded) ? $decoded : ['lastUpdate' => null, 'count' => 0, 'newCount' => 0, 'articles' => []];
}

// ── Sauvegarde ────────────────────────────────────────────────────────────────
function saveData($data) {
    file_put_contents(ARTICLES_FILE, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
}

// ─────────────────────────────────────────────────────────────────────────────
if ($action === 'list') {
    $data     = loadData();
    $articles = $data['articles'] ?? [];

    // Filtre catégorie
    $cat = trim($_GET['cat'] ?? 'all');
    if ($cat !== 'all') {
        $articles = array_values(array_filter($articles, function($a) use ($cat) { return $a['category'] === $cat; }));
    }

    // Recherche texte
    $q = trim($_GET['q'] ?? '');
    if ($q !== '') {
        $ql = mb_strtolower($q);
        $articles = array_values(array_filter($articles, function($a) use ($ql) {
            return mb_strpos(mb_strtolower($a['title']), $ql) !== false
                || mb_strpos(mb_strtolower(isset($a['excerpt']) ? $a['excerpt'] : ''), $ql) !== false
                || mb_strpos(mb_strtolower($a['source']), $ql) !== false;
        }));
    }

    echo json_encode([
        'success'    => true,
        'lastUpdate' => $data['lastUpdate'],
        'total'      => $data['count'],
        'newCount'   => $data['newCount'],
        'articles'   => array_values($articles),
    ]);
    exit;
}

// ─────────────────────────────────────────────────────────────────────────────
if ($action === 'markRead') {
    $data = loadData();
    foreach ($data['articles'] as &$a) {
        $a['isNew'] = false;
    }
    $data['newCount'] = 0;
    saveData($data);
    echo json_encode(['success' => true]);
    exit;
}

// ─────────────────────────────────────────────────────────────────────────────
if ($action === 'refresh') {
    // Lance fetch_articles.php en tâche de fond
    $script = __DIR__ . '/fetch_articles.php';
    if (file_exists($script)) {
        $output = shell_exec("php " . escapeshellarg($script) . " 2>&1");
        // Recharge les données fraîches
        $data = loadData();
        echo json_encode([
            'success'    => true,
            'new'        => $data['newCount'],
            'total'      => $data['count'],
            'lastUpdate' => $data['lastUpdate'],
            'log'        => $output,
        ]);
    } else {
        echo json_encode(['success' => false, 'error' => 'fetch_articles.php introuvable']);
    }
    exit;
}

echo json_encode(['success' => false, 'error' => 'Action inconnue']);
