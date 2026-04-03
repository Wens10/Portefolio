<?php
// fetch_articles.php
// Appelle ce script via un cron ou manuellement pour mettre a jour les articles.
// Exemple cron toutes les 6h : 0 [slash]6 [etoile] [etoile] [etoile] php /var/www/html/fetch_articles.php

define('ARTICLES_FILE', __DIR__ . '/data/articles.json');
define('MAX_ARTICLES',  120);   // articles max conservés en historique

// ── Flux RSS à surveiller ─────────────────────────────────────────────────────
$feeds = [
    [
        'url'      => 'https://hacks.mozilla.org/category/webassembly/feed/',
        'source'   => 'Mozilla Hacks',
        'category' => 'WebAssembly & WASI',
    ],
    [
        'url'      => 'https://blog.cloudflare.com/rss/',
        'source'   => 'Cloudflare Blog',
        'category' => 'Edge Computing',
    ],
    [
        'url'      => 'https://deno.com/feed',
        'source'   => 'Deno Blog',
        'category' => 'Edge Computing',
    ],
    [
        'url'      => 'https://www.infoq.com/webassembly/rss/',
        'source'   => 'InfoQ – WebAssembly',
        'category' => 'WebAssembly & WASI',
    ],
    [
        'url'      => 'https://www.infoq.com/serverless/rss/',
        'source'   => 'InfoQ – Serverless',
        'category' => 'Edge Computing',
    ],
    [
        'url'      => 'https://bytecodealliance.org/feed.xml',
        'source'   => 'Bytecode Alliance',
        'category' => 'WebAssembly & WASI',
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
        $existing = $decoded;
    }
}

// Indexer par ID pour dédupliquer facilement
$existingById = [];
foreach ($existing as $art) {
    $existingById[$art['id']] = $art;
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
        $dateRaw = (string)($item->pubDate ?? $item->updated ?? $item->published ?? '');
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
            'isNew'     => true,   // marqué "nouveau" jusqu'à la prochaine lecture
        ];
        $newCount++;
    }
}

// ── Tri par date décroissante + troncature ─────────────────────────────────────
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
