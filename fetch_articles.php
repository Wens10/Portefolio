<?php
// fetch_articles.php
// Lance via cron toutes les 6h ou manuellement pour mettre à jour les articles.
// Exemple : 0 */6 * * * php /var/www/html/fetch_articles.php

define('ARTICLES_FILE', __DIR__ . '/data/articles.json');
define('MAX_ARTICLES',  120);

// ── Flux RSS à surveiller ─────────────────────────────────────────────────────
$feeds = [
    ['url' => 'https://github.blog/feed/',                       'source' => 'GitHub Blog',         'category' => 'Assistants IA & outils'],
    ['url' => 'https://devblogs.microsoft.com/visualstudio/feed/','source' => 'Visual Studio Blog',  'category' => 'Assistants IA & outils'],
    ['url' => 'https://www.cursor.com/blog/rss.xml',              'source' => 'Cursor Blog',          'category' => 'Assistants IA & outils'],
    ['url' => 'https://openai.com/news/rss.xml',                  'source' => 'OpenAI News',          'category' => 'Modèles & recherche IA'],
    ['url' => 'https://www.anthropic.com/rss.xml',                'source' => 'Anthropic Blog',       'category' => 'Modèles & recherche IA'],
    ['url' => 'https://ai.google/static/documents/rss-feed.xml',  'source' => 'Google AI Blog',       'category' => 'Modèles & recherche IA'],
    ['url' => 'https://stackoverflow.blog/feed/',                  'source' => 'Stack Overflow Blog',  'category' => 'Impact & pratiques dev'],
    ['url' => 'https://www.smashingmagazine.com/feed/',            'source' => 'Smashing Magazine',    'category' => 'Impact & pratiques dev'],
    ['url' => 'https://css-tricks.com/feed/',                      'source' => 'CSS-Tricks',           'category' => 'Impact & pratiques dev'],
    ['url' => 'https://www.infoq.com/ai-ml-data-eng/rss/',         'source' => 'InfoQ – AI/ML',        'category' => "Sécurité & limites de l'IA"],
    ['url' => 'https://www.technologyreview.com/feed/',            'source' => 'MIT Technology Review','category' => "Sécurité & limites de l'IA"],
];

// ── Extraction d'image depuis un item RSS ─────────────────────────────────────
function extractItemImage(SimpleXMLElement $item, string $link): string
{
    // 1. Balise <enclosure> (podcasts et blogs modernes)
    if (isset($item->enclosure)) {
        $type = strtolower((string)($item->enclosure['type'] ?? ''));
        if (str_starts_with($type, 'image') && !empty($item->enclosure['url'])) {
            return (string)$item->enclosure['url'];
        }
    }

    // 2. Namespace media (Yahoo Media RSS)
    $media = $item->children('http://search.yahoo.com/mrss/');
    if (isset($media->content) && !empty($media->content['url'])) {
        return (string)$media->content['url'];
    }
    if (isset($media->thumbnail) && !empty($media->thumbnail['url'])) {
        return (string)$media->thumbnail['url'];
    }

    // 3. Balise <image> directe (peu commun mais présent sur certains feeds)
    if (isset($item->image) && !empty((string)$item->image)) {
        return (string)$item->image;
    }

    // 4. Scraping de l'og:image depuis les premiers 8 Ko de la page
    if (!$link) return '';

    $ctx = stream_context_create([
        'http' => [
            'timeout'        => 5,
            'follow_location'=> 1,
            'max_redirects'  => 3,
            'header'         => "User-Agent: Mozilla/5.0 (compatible; PortfolioFetcher/1.0)\r\n",
        ],
        'ssl'  => ['verify_peer' => false, 'verify_peer_name' => false],
    ]);

    $html = @file_get_contents($link, false, $ctx, 0, 8192);
    if (!$html) return '';

    // og:image
    if (preg_match('/<meta[^>]+property=["\']og:image["\'][^>]+content=["\'](https?:\/\/[^"\']+)["\']/', $html, $m)) {
        return $m[1];
    }
    // Ordre alternatif des attributs
    if (preg_match('/<meta[^>]+content=["\'](https?:\/\/[^"\']+)["\'][^>]+property=["\']og:image["\']/', $html, $m)) {
        return $m[1];
    }
    // twitter:image comme dernier recours
    if (preg_match('/<meta[^>]+(?:property|name)=["\']twitter:image["\'][^>]+content=["\'](https?:\/\/[^"\']+)["\']/', $html, $m)) {
        return $m[1];
    }

    return '';
}

// ── Chargement du fichier existant ────────────────────────────────────────────
if (!is_dir(__DIR__ . '/data')) {
    mkdir(__DIR__ . '/data', 0755, true);
}

$existing = [];
if (file_exists(ARTICLES_FILE)) {
    $decoded = json_decode(file_get_contents(ARTICLES_FILE), true);
    if (is_array($decoded)) {
        $existing = isset($decoded['articles']) && is_array($decoded['articles'])
            ? $decoded['articles']
            : $decoded;
    }
}

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

    $items = $xml->channel->item ?? $xml->entry ?? [];

    foreach ($items as $item) {
        $title = trim((string)($item->title ?? ''));
        if (!$title) continue;

        $link = trim((string)($item->link ?? $item->id ?? ''));
        if (empty($link) && isset($item->link['href'])) {
            $link = (string)$item->link['href'];
        }
        if (!$link) continue;

        $id = md5($link);

        if (isset($existingById[$id])) continue;

        $dateRaw   = (string)($item->pubDate ?? $item->updated ?? $item->published ?? '');
        $timestamp = $dateRaw ? strtotime($dateRaw) : time();
        if (!$timestamp) $timestamp = time();

        $desc = strip_tags((string)($item->description ?? $item->summary ?? $item->content ?? ''));
        $desc = preg_replace('/\s+/', ' ', $desc);
        $desc = mb_substr(trim($desc), 0, 300);
        if (mb_strlen($desc) === 300) $desc .= '…';

        // Extraction de l'image (RSS d'abord, scraping og:image en dernier recours)
        $image = extractItemImage($item, $link);

        $existingById[$id] = [
            'id'        => $id,
            'title'     => $title,
            'url'       => $link,
            'source'    => $feed['source'],
            'category'  => $feed['category'],
            'excerpt'   => $desc,
            'image'     => $image,
            'timestamp' => $timestamp,
            'date'      => date('Y-m-d', $timestamp),
            'isNew'     => true,
        ];
        $newCount++;
    }
}

// ── Tri + troncature ──────────────────────────────────────────────────────────
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

if (php_sapi_name() === 'cli') {
    echo "✅ {$newCount} nouveaux articles ajoutés. Total : " . count($articles) . "\n";
} else {
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'new' => $newCount, 'total' => count($articles)]);
}
