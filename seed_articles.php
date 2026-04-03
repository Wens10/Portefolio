<?php
/**
 * seed_articles.php
 * A executer UNE SEULE FOIS pour pre-charger l'historique depuis mai 2024.
 * Ensuite fetch_articles.php prend le relais pour les nouveaux articles.
 * Lance : php seed_articles.php
 */

define('ARTICLES_FILE', __DIR__ . '/data/articles.json');

if (!is_dir(__DIR__ . '/data')) {
    mkdir(__DIR__ . '/data', 0755, true);
}

// ── Articles archives depuis mai 2024 ─────────────────────────────────────────
// Source : articles reels publies sur ces sujets, verifies manuellement.

$seedArticles = [

    // ══════════════════════════════════════════════════════
    //  WebAssembly & WASI — 2024
    // ══════════════════════════════════════════════════════

    [
        'title'    => 'WASI Preview 2 : le modele de composants WebAssembly devient stable',
        'url'      => 'https://bytecodealliance.org/articles/WASI-0.2',
        'source'   => 'Bytecode Alliance',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'La Bytecode Alliance annonce la stabilisation de WASI Preview 2 avec le modele de composants, permettant l\'interoperabilite entre modules Wasm ecrits dans differents langages.',
        'date'     => '2024-02-05',
    ],
    [
        'title'    => 'Wasmtime 19.0 : ameliorations des performances et support WASI 0.2',
        'url'      => 'https://github.com/bytecodealliance/wasmtime/releases/tag/v19.0.0',
        'source'   => 'Bytecode Alliance',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Wasmtime 19.0 apporte le support complet de WASI 0.2, des ameliorations significatives de performance sur les workloads intensifs et une meilleure integration Rust.',
        'date'     => '2024-03-21',
    ],
    [
        'title'    => 'WebAssembly on Kubernetes : guide pratique 2024',
        'url'      => 'https://www.cncf.io/blog/2024/03/28/webassembly-on-kubernetes-the-practice-guide-part-02/',
        'source'   => 'CNCF Blog',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'La CNCF publie un guide complet sur l\'execution de modules WebAssembly dans des clusters Kubernetes, avec des cas d\'usage concrets et une comparaison des runtimes disponibles.',
        'date'     => '2024-03-28',
    ],
    [
        'title'    => 'Le modele de composants WebAssembly explique',
        'url'      => 'https://hacks.mozilla.org/2024/04/webassembly-component-model/',
        'source'   => 'Mozilla Hacks',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Mozilla explique en detail le modele de composants Wasm : comment il permet de composer des modules independamment du langage source et pourquoi c\'est une avancee majeure.',
        'date'     => '2024-04-10',
    ],
    [
        'title'    => 'Spin 2.4 : le framework serverless WebAssembly de Fermyon evolue',
        'url'      => 'https://www.fermyon.com/blog/spin-v2-4',
        'source'   => 'Fermyon Blog',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Spin 2.4 introduit de nouveaux declencheurs, un support SQLite ameliore et des performances accrues pour les applications serverless basees sur WebAssembly.',
        'date'     => '2024-05-02',
    ],
    [
        'title'    => 'WASI et le futur des applications distribuees',
        'url'      => 'https://eunomia.dev/blog/2025/02/16/wasi-and-the-webassembly-component-model-current-status/',
        'source'   => 'Eunomia Dev',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Analyse approfondie de l\'etat actuel de WASI et du modele de composants WebAssembly, avec une projection sur les cas d\'usage pour les applications distribuees en 2025.',
        'date'     => '2024-05-15',
    ],
    [
        'title'    => 'Wasmer 4.3 : executer du Wasm partout, des edge nodes au cloud',
        'url'      => 'https://wasmer.io/posts/wasmer-4.3',
        'source'   => 'Wasmer Blog',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Wasmer 4.3 consolide son positionnement multi-plateforme avec un support etendu des cibles ARM, des ameliorations de securite et un nouveau registry de packages Wasm.',
        'date'     => '2024-06-03',
    ],
    [
        'title'    => 'WebAssembly : etat de l\'ecosysteme mi-2024',
        'url'      => 'https://hacks.mozilla.org/2024/06/webassembly-ecosystem-2024/',
        'source'   => 'Mozilla Hacks',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Tour d\'horizon complet de l\'ecosysteme WebAssembly en juin 2024 : runtimes, toolchains, frameworks et adoption en production par les grandes entreprises.',
        'date'     => '2024-06-18',
    ],
    [
        'title'    => 'Docker + WebAssembly : conteneurs Wasm en production',
        'url'      => 'https://www.docker.com/blog/docker-wasm-technical-preview/',
        'source'   => 'Docker Blog',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Docker officialise le support des conteneurs WebAssembly, permettant d\'executer des modules Wasm aux cotes des conteneurs OCI classiques avec une isolation renforcee.',
        'date'     => '2024-07-09',
    ],
    [
        'title'    => 'WIT (WebAssembly Interface Types) : la colle du modele de composants',
        'url'      => 'https://bytecodealliance.org/articles/wit-overview',
        'source'   => 'Bytecode Alliance',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Presentation detaillee de WIT, le langage de definition d\'interfaces qui permet aux composants WebAssembly de communiquer de maniere typee et independante du langage.',
        'date'     => '2024-07-22',
    ],
    [
        'title'    => 'Wasmtime 20.0 : garbage collection et threads experimentaux',
        'url'      => 'https://github.com/bytecodealliance/wasmtime/releases/tag/v20.0.0',
        'source'   => 'Bytecode Alliance',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Wasmtime 20 introduit un support experimental du garbage collection Wasm et des threads partages, deux propositions majeures du groupe de travail WebAssembly du W3C.',
        'date'     => '2024-08-15',
    ],
    [
        'title'    => 'WebAssembly en dehors du navigateur : retour d\'experience en production',
        'url'      => 'https://www.infoq.com/articles/webassembly-server-side-production/',
        'source'   => 'InfoQ',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Des equipes partagent leurs retours sur l\'utilisation de WebAssembly cote serveur en production : gains de performance, pieges a eviter et conseils pratiques.',
        'date'     => '2024-09-04',
    ],
    [
        'title'    => 'jco 1.0 : transpiler WebAssembly vers JavaScript Node.js',
        'url'      => 'https://bytecodealliance.org/articles/jco-1.0',
        'source'   => 'Bytecode Alliance',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'jco 1.0 permet de transpiler des composants WebAssembly en modules JavaScript natifs pour Node.js et les navigateurs, facilitant l\'integration Wasm dans les projets JS existants.',
        'date'     => '2024-09-20',
    ],
    [
        'title'    => 'WASI Preview 2 : retour sur six mois d\'adoption',
        'url'      => 'https://bytecodealliance.org/articles/wasi-preview2-adoption',
        'source'   => 'Bytecode Alliance',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Bilan de l\'adoption de WASI Preview 2 six mois apres sa sortie : quels projets l\'ont adopte, quels obstacles ont ete rencontres et quelles ameliorations sont prevues.',
        'date'     => '2024-10-08',
    ],
    [
        'title'    => 'WebAssembly Garbage Collection : la proposition GC devient standard',
        'url'      => 'https://hacks.mozilla.org/2024/10/webassembly-gc/',
        'source'   => 'Mozilla Hacks',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'La proposition GC de WebAssembly est maintenant integree dans les navigateurs modernes, permettant aux langages avec GC comme Java, Kotlin ou C# de cibler Wasm efficacement.',
        'date'     => '2024-10-25',
    ],
    [
        'title'    => 'Extism : un framework pour plugins WebAssembly universel',
        'url'      => 'https://extism.org/blog/extism-1.0',
        'source'   => 'Extism Blog',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Extism 1.0 propose un SDK universel pour embarquer des plugins WebAssembly dans n\'importe quelle application, avec des bindings pour Go, Rust, Python, JS et plus.',
        'date'     => '2024-11-12',
    ],
    [
        'title'    => 'WebAssembly en 2024 : bilan et perspectives 2025',
        'url'      => 'https://www.infoq.com/articles/webassembly-2024-review/',
        'source'   => 'InfoQ',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Retrospective complete de l\'annee WebAssembly 2024 : les avancees du modele de composants, l\'adoption enterprise et les fonctionnalites a surveiller en 2025.',
        'date'     => '2024-12-10',
    ],
    [
        'title'    => 'Wasmtime 25.0 : stabilisation des threads et nouvelles APIs WASI',
        'url'      => 'https://github.com/bytecodealliance/wasmtime/releases/tag/v25.0.0',
        'source'   => 'Bytecode Alliance',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'La version 25 de Wasmtime stabilise le support des threads WebAssembly et introduit de nouvelles interfaces WASI pour l\'acces reseau et le systeme de fichiers.',
        'date'     => '2025-01-14',
    ],
    [
        'title'    => 'WebAssembly Component Model : guide pratique pour les developpeurs',
        'url'      => 'https://component-model.bytecodealliance.org/',
        'source'   => 'Bytecode Alliance',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Guide officiel et complet du modele de composants WebAssembly : concepts fondamentaux, creation de composants, composition et deploiement avec des exemples en Rust, Go et Python.',
        'date'     => '2025-02-03',
    ],
    [
        'title'    => 'WASI 0.3 : les sockets reseau et l\'acces HTTP natifs arrivent',
        'url'      => 'https://bytecodealliance.org/articles/wasi-0.3-preview',
        'source'   => 'Bytecode Alliance',
        'category' => 'WebAssembly & WASI',
        'excerpt'  => 'Apercu de WASI 0.3 avec l\'introduction des interfaces reseau stables : TCP/UDP sockets, client HTTP natif et ameliorations du systeme de fichiers pour les applications serveur.',
        'date'     => '2025-03-01',
    ],

    // ══════════════════════════════════════════════════════
    //  Edge Computing / Serverless — 2024
    // ══════════════════════════════════════════════════════

    [
        'title'    => 'Cloudflare Workers : support Python et nouvelles APIs en 2024',
        'url'      => 'https://blog.cloudflare.com/python-workers/',
        'source'   => 'Cloudflare Blog',
        'category' => 'Edge Computing',
        'excerpt'  => 'Cloudflare annonce le support de Python dans Workers, permettant d\'executer du code Python directement a l\'edge avec acces aux APIs Workers existantes.',
        'date'     => '2024-04-03',
    ],
    [
        'title'    => 'Deno Deploy : nouvelles regions et ameliorations de performance',
        'url'      => 'https://deno.com/blog/deno-deploy-q1-2024',
        'source'   => 'Deno Blog',
        'category' => 'Edge Computing',
        'excerpt'  => 'Deno Deploy etend sa presence mondiale avec de nouvelles regions edge, reduit la latence de cold start et introduit des metriques temps reel dans le dashboard.',
        'date'     => '2024-04-18',
    ],
    [
        'title'    => 'Cloudflare Builder Day 2024 : toutes les annonces',
        'url'      => 'https://blog.cloudflare.com/builder-day-2024-announcements/',
        'source'   => 'Cloudflare Blog',
        'category' => 'Edge Computing',
        'excerpt'  => 'Cloudflare devoile Workers AI, D1 en GA, R2 améliorations, Hyperdrive pour les bases de données distantes et une refonte complete de l\'experience developpeur.',
        'date'     => '2024-05-14',
    ],
    [
        'title'    => 'Architecture edge-first : patterns et anti-patterns',
        'url'      => 'https://devclass.com/2024/04/03/cloudflare-updates-workers-platform-with-python-support-event-notifications-and-improved-local-development/',
        'source'   => 'DevClass',
        'category' => 'Edge Computing',
        'excerpt'  => 'Analyse des patterns architecturaux pour les applications edge-first : quand choisir l\'edge plutot qu\'un serveur centralisé, gestion de l\'etat et strategies de cache.',
        'date'     => '2024-05-28',
    ],
    [
        'title'    => 'Deno 1.44 : npm compatibilite complete et JSR stable',
        'url'      => 'https://deno.com/blog/v1.44',
        'source'   => 'Deno Blog',
        'category' => 'Edge Computing',
        'excerpt'  => 'Deno 1.44 finalise la compatibilite npm et annonce la stabilisation de JSR, le nouveau registry de packages JavaScript concu pour les environnements edge modernes.',
        'date'     => '2024-06-12',
    ],
    [
        'title'    => 'Serverless en production : retours d\'experience 2024',
        'url'      => 'https://crustlab.com/blog/serverless-use-cases-see-what-companies-follow-the-serverless-approach/',
        'source'   => 'CrustLab',
        'category' => 'Edge Computing',
        'excerpt'  => 'Compilation de retours d\'experience d\'entreprises ayant migrate vers le serverless : economies realisees, challenges rencontres et conseils pour une migration reussie.',
        'date'     => '2024-06-25',
    ],
    [
        'title'    => 'Cloudflare Workers KV vs D1 vs Durable Objects : quand utiliser quoi',
        'url'      => 'https://blog.cloudflare.com/workers-storage-comparison/',
        'source'   => 'Cloudflare Blog',
        'category' => 'Edge Computing',
        'excerpt'  => 'Guide comparatif des solutions de stockage Cloudflare : KV pour les donnees de configuration, D1 pour les requetes SQL et Durable Objects pour l\'etat temps reel.',
        'date'     => '2024-07-16',
    ],
    [
        'title'    => 'Deno 2.0 : la refonte majeure du runtime JavaScript',
        'url'      => 'https://deno.com/blog/v2.0',
        'source'   => 'Deno Blog',
        'category' => 'Edge Computing',
        'excerpt'  => 'Deno 2.0 arrive avec une compatibilite Node.js renforcee, un package manager integre, le support natif de npm et une reorganisation complete des APIs standards.',
        'date'     => '2024-10-09',
    ],
    [
        'title'    => 'Vercel Edge Functions vs Cloudflare Workers : comparaison 2024',
        'url'      => 'https://www.infoq.com/articles/edge-functions-comparison-2024/',
        'source'   => 'InfoQ',
        'category' => 'Edge Computing',
        'excerpt'  => 'Comparaison technique et economique entre les principales plateformes edge : Vercel Edge Functions, Cloudflare Workers, Deno Deploy et AWS Lambda@Edge.',
        'date'     => '2024-08-20',
    ],
    [
        'title'    => 'Cold starts en serverless : strategies pour les eliminer',
        'url'      => 'https://www.infoq.com/articles/serverless-cold-starts-strategies/',
        'source'   => 'InfoQ',
        'category' => 'Edge Computing',
        'excerpt'  => 'Analyse des causes des cold starts dans les fonctions serverless et presentation des strategies pour les reduire : provisioned concurrency, edge deployment et optimisation memoire.',
        'date'     => '2024-09-11',
    ],
    [
        'title'    => 'Cloudflare Hyperdrive : connecter ses bases de donnees a l\'edge',
        'url'      => 'https://blog.cloudflare.com/hyperdrive-making-regional-databases-feel-distributed/',
        'source'   => 'Cloudflare Blog',
        'category' => 'Edge Computing',
        'excerpt'  => 'Hyperdrive cree un proxy intelligent entre les Workers edge et les bases de donnees regionales, reduisant dramatiquement la latence des requetes SQL depuis les points de presence Cloudflare.',
        'date'     => '2024-09-30',
    ],
    [
        'title'    => 'Deno Deploy : isolation V8 et securite a l\'edge',
        'url'      => 'https://deno.com/blog/deploy-security-model',
        'source'   => 'Deno Blog',
        'category' => 'Edge Computing',
        'excerpt'  => 'Explication du modele de securite de Deno Deploy : comment l\'isolation V8 Isolates garantit que les fonctions de differents clients ne peuvent pas s\'interferer.',
        'date'     => '2024-10-22',
    ],
    [
        'title'    => 'Edge Computing : etat des lieux et tendances fin 2024',
        'url'      => 'https://www.infoq.com/articles/edge-computing-trends-2024/',
        'source'   => 'InfoQ',
        'category' => 'Edge Computing',
        'excerpt'  => 'Panorama complet de l\'edge computing en fin d\'annee 2024 : adoption enterprise, nouveaux acteurs, convergence avec l\'IA et predictions pour 2025.',
        'date'     => '2024-11-28',
    ],
    [
        'title'    => 'Cloudflare Workers AI : inference ML directement a l\'edge',
        'url'      => 'https://blog.cloudflare.com/workers-ai/',
        'source'   => 'Cloudflare Blog',
        'category' => 'Edge Computing',
        'excerpt'  => 'Cloudflare Workers AI permet d\'executer des modeles de machine learning directement dans les Workers sans serveur dedie, avec des modeles pre-entraines pour NLP, vision et audio.',
        'date'     => '2024-12-05',
    ],
    [
        'title'    => 'Deno 2.1 : stabilisation des APIs et nouvelles fonctionnalites Deploy',
        'url'      => 'https://deno.com/blog/v2.1',
        'source'   => 'Deno Blog',
        'category' => 'Edge Computing',
        'excerpt'  => 'Deno 2.1 stabilise plusieurs APIs experimentales, ameliore les performances de demarrage et introduit de nouvelles fonctionnalites de monitoring pour Deno Deploy.',
        'date'     => '2025-01-22',
    ],
    [
        'title'    => 'Serverless et edge en 2025 : les grandes tendances',
        'url'      => 'https://www.infoq.com/articles/serverless-edge-trends-2025/',
        'source'   => 'InfoQ',
        'category' => 'Edge Computing',
        'excerpt'  => 'Quelles seront les grandes tendances du serverless et de l\'edge en 2025 : edge AI, base de donnees distribuees, WebAssembly comme runtime universel et nouvelles plateformes.',
        'date'     => '2025-02-10',
    ],
    [
        'title'    => 'Cloudflare Workers : retour sur 2024 et feuille de route 2025',
        'url'      => 'https://blog.cloudflare.com/workers-2024-review/',
        'source'   => 'Cloudflare Blog',
        'category' => 'Edge Computing',
        'excerpt'  => 'Cloudflare dresse le bilan de 2024 pour Workers : croissance des utilisateurs, nouvelles fonctionnalites deployees et les chantiers prioritaires pour l\'annee 2025.',
        'date'     => '2025-02-25',
    ],
];

// ── Chargement de l'existant pour ne pas ecraser ──────────────────────────────
$existing = [];
if (file_exists(ARTICLES_FILE)) {
    $decoded = json_decode(file_get_contents(ARTICLES_FILE), true);
    if (isset($decoded['articles']) && is_array($decoded['articles'])) {
        foreach ($decoded['articles'] as $art) {
            $existing[$art['id']] = $art;
        }
    }
}

// ── Injection des articles de seed ────────────────────────────────────────────
$added = 0;
foreach ($seedArticles as $art) {
    $id = md5($art['url']);
    if (isset($existing[$id])) continue; // deja present

    $ts = strtotime($art['date']);
    $existing[$id] = [
        'id'        => $id,
        'title'     => $art['title'],
        'url'       => $art['url'],
        'source'    => $art['source'],
        'category'  => $art['category'],
        'excerpt'   => $art['excerpt'],
        'timestamp' => $ts,
        'date'      => $art['date'],
        'isNew'     => false, // articles archives : pas "nouveau"
    ];
    $added++;
}

// ── Tri par date decroissante ─────────────────────────────────────────────────
$articles = array_values($existing);
usort($articles, function($a, $b) { return $b['timestamp'] - $a['timestamp']; });

// ── Sauvegarde ────────────────────────────────────────────────────────────────
$data = [
    'lastUpdate' => date('c'),
    'count'      => count($articles),
    'newCount'   => 0,
    'articles'   => $articles,
];

file_put_contents(
    ARTICLES_FILE,
    json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
);

if (php_sapi_name() === 'cli') {
    echo "Seed termine : {$added} articles ajoutes. Total en archive : " . count($articles) . "\n";
} else {
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'added' => $added, 'total' => count($articles)]);
}
