<?php
// fetch_articles.php
// Appelle ce script via un cron ou manuellement pour mettre a jour les articles.
// Exemple cron toutes les 6h : 0 */6 * * * php /var/www/html/fetch_articles.php

define('ARTICLES_FILE', __DIR__ . '/data/articles.json');
define('MAX_ARTICLES',  120);   // articles max conservés en historique

// ── Flux RSS à surveiller ─────────────────────────────────────────────────────
$feeds = [
    // ── Assistants de code & outils IA pour devs ──────────────────────────────
    [
        'url'      => 'https://github.blog/feed/',
        'source'   => 'GitHub Blog',
        'category' => 'Assistants IA & outils',
    ],
    [
        'url'      => 'https://devblogs.microsoft.com/visualstudio/feed/',
        'source'   => 'Visual Studio Blog',
        'category' => 'Assistants IA & outils',
    ],
    [
        'url'      => 'https://www.cursor.com/blog/rss.xml',
        'source'   => 'Cursor Blog',
        'category' => 'Assistants IA & outils',
    ],

    // ── LLMs, modèles et recherche appliquée ──────────────────────────────────
    [
        'url'      => 'https://openai.com/news/rss.xml',
        'source'   => 'OpenAI News',
        'category' => 'Modèles & recherche IA',
    ],
    [
        'url'      => 'https://www.anthropic.com/rss.xml',
        'source'   => 'Anthropic Blog',
        'category' => 'Modèles & recherche IA',
    ],
    [
        'url'      => 'https://ai.google/static/documents/rss-feed.xml',
        'source'   => 'Google AI Blog',
        'category' => 'Modèles & recherche IA',
    ],

    // ── Impact sur les développeurs, pratiques & métier ───────────────────────
    [
        'url'      => 'https://stackoverflow.blog/feed/',
        'source'   => 'Stack Overflow Blog',
        'category' => 'Impact & pratiques dev',
    ],
    [
        'url'      => 'https://www.smashingmagazine.com/feed/',
        'source'   => 'Smashing Magazine',
        'category' => 'Impact & pratiques dev',
    ],
    [
        'url'      => 'https://css-tricks.com/feed/',
        'source'   => 'CSS-Tricks',
        'category' => 'Impact & pratiques dev',
    ],

    // ── Sécurité, limites et éthique de l'IA ─────────────────────────────────
    [
        'url'      => 'https://www.infoq.com/ai-ml-data-eng/rss/',
        'source'   => 'InfoQ – AI/ML',
        'category' => 'Sécurité & limites de l\'IA',
    ],
    [
        'url'      => 'https://www.technologyreview.com/feed/',
        'source'   => 'MIT Technology Review',
        'category' => 'Sécurité & limites de l\'IA',
    ],
];

// ── Chargement du fichier existant ────────────────────────────────────────────
if (!is_dir(__DIR__ . '/data')) {
    mkdir(__DIR__ . '/data', 0755, true);
}

$existing = [];
if (file_exists(ARTICLES_FILE)) {
    $decoded = json_decode(file_get_contents(ARTICLES_FILE), true);
    if (is_array($decoded)) {
        // Le JSON a une clé 'articles' (format produit par seed/fetch)
        $existing = isset($decoded['articles']) && is_array($decoded['articles'])
            ? $decoded['articles']
            : $decoded;
    }
}

// Indexer par ID pour dédupliquer facilement
$existingById = [];
foreach ($existing as $art) {
    if (is_array($art) && isset($art['id'])) {
        $existingById[$art['id']] = $art;
    }
}

// ── Fetch des flux ────────────────────────────────────────────────────────────
$newCount = 0;

foreach ($feeds as $feed) {
    $xml = @simplexml_load_file($feed['url']);
    if (!$xml) continue;

    // Compatibilité RSS 2.0 et Atom
    $items = $xml->channel->item ?? $xml->entry ?? [];

    foreach ($items as $item) {
        // Titre
        $title = trim((string)($item->title ?? ''));
        if (!$title) continue;

        // Lien
        $link = trim((string)($item->link ?? $item->id ?? ''));
        if (empty($link) && isset($item->link['href'])) {
            $link = (string)$item->link['href'];
        }
        if (!$link) continue;

        // ID unique basé sur l'URL
        $id = md5($link);

        // Si déjà présent → on garde et on passe
        if (isset($existingById[$id])) continue;

        // Date
        $dateRaw   = (string)($item->pubDate ?? $item->updated ?? $item->published ?? '');
        $timestamp = $dateRaw ? strtotime($dateRaw) : time();
        if (!$timestamp) $timestamp = time();

        // Description / extrait
        $desc = strip_tags((string)($item->description ?? $item->summary ?? $item->content ?? ''));
        $desc = preg_replace('/\s+/', ' ', $desc);
        $desc = mb_substr(trim($desc), 0, 300);
        if (mb_strlen($desc) === 300) $desc .= '…';

        $existingById[$id] = [
            'id'        => $id,
            'title'     => $title,
            'url'       => $link,
            'source'    => $feed['source'],
            'category'  => $feed['category'],
            'excerpt'   => $desc,
            'timestamp' => $timestamp,
            'date'      => date('Y-m-d', $timestamp),
            'isNew'     => true,
        ];
        $newCount++;
    }
}

// ── Tri par date décroissante + troncature ────────────────────────────────────
$articles = array_values($existingById);
usort($articles, function($a, $b) { return $b['timestamp'] - $a['timestamp']; });
$articles = array_slice($articles, 0, MAX_ARTICLES);

// ── Sauvegarde ────────────────────────────────────────────────────────────────
file_put_contents(
    ARTICLES_FILE,
    json_encode([
        'lastUpdate' => date('c'),
        'count'      => count($articles),
        'newCount'   => $newCount,
        'articles'   => $articles,
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
);

// ── Réponse (si appelé en HTTP ou CLI) ───────────────────────────────────────
if (php_sapi_name() === 'cli') {
    echo "✅ {$newCount} nouveaux articles ajoutés. Total : " . count($articles) . "\n";
} else {
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'new' => $newCount, 'total' => count($articles)]);
}
