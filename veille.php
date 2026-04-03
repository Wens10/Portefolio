<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veille Technologique - Portefolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Mr Wens" />
    <link rel="manifest" href="/site.webmanifest" />
    <?php
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $base = $scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'example.com');
    $canonical = htmlspecialchars($base . $_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');
    $image = htmlspecialchars($base . '/assets/images/alien-svgrepo-com.svg', ENT_QUOTES, 'UTF-8');
    $metaDescription = "Veille technologique sur WebAssembly (WASI) et Edge Computing — articles, outils, runtimes et cas d'usage 2024–2025 pour des applications performantes et distribuées.";
    ?>
    <link rel="canonical" href="<?php echo $canonical; ?>">
    <link rel="alternate" hreflang="fr" href="<?php echo $canonical; ?>">
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="veille technologique, WebAssembly, WASI, Edge Computing, Wasmtime, Wasmer, Deno, Cloudflare Workers">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#005eff">

    <!-- Open Graph -->
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Veille Technologique — Portefolio">
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo $canonical; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Veille Technologique — Portefolio">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo $image; ?>">

    <!-- Performance hints -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Structured Data JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Veille Technologique — Portefolio",
        "url": "<?php echo $canonical; ?>",
        "description": "<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>",
        "inLanguage": "fr-FR",
        "publisher": {
            "@type": "Organization",
            "name": "Portefolio",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo $image; ?>"
            }
        }
    }
    </script>

    <style>
    /* ------------------ THEME FUTURISTE ------------------ */
    :root {
      --bg: #000000ff;
      --txt: #ffffffff;
      --accent: #3549fc;
      --accent2: #355dfc;
      --card: rgba(255, 255, 255, 0.05);
      --glass: rgba(255, 255, 255, 0.12);
      --blur: 18px;
      font-family: 'Segoe UI', Poppins, sans-serif;
    }

    body {
      margin: 0;
      background: radial-gradient(circle at 20% 20%, #0000001a, transparent),
                  radial-gradient(circle at 80% 80%, #0c0c0c1a, transparent), var(--bg);
      color: var(--txt);
      overflow-x: hidden;
      font-size: 18px;
    }

    header {
      padding: 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .hero {
      text-align: center;
      margin-top: 10px;
    }

    .hero h1 {
      font-size: 48px;
      font-weight: 700;
      background: #3549fc;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hero p {
      margin-top: 10px;
      font-size: 18px;
      opacity: 0.7;
    }

    .grid {
      width: 88%;
      margin: 60px auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      grid-gap: 28px;
    }

    .card {
      background: var(--card);
      border: 1px solid var(--glass);
      padding: 26px;
      border-radius: 18px;
      backdrop-filter: blur(var(--blur));
      transition: 0.3s;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }

    .card:hover {
      transform: translateY(-6px) scale(1.02);
      box-shadow: 0 0 30px #14112f21;
    }

    .card h3 {
      margin: 0 0 10px;
      font-size: 20px;
      color: #2542fee8;
      font-weight: 800;
    }

    .card p {
      font-size: 14px;
      opacity: 0.8;
      color: white;
      font-weight: 700;
    }

    .badge {
      display: inline-block;
      margin-top: 12px;
      padding: 6px 12px;
      font-size: 12px;
      border-radius: 999px;
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      color: #fff;
      font-weight: bold;
      width: max-content;
    }

    .outils {
      width: 88%;
      margin: 40px auto;
      padding: 30px;
      background: var(--card);
      border-radius: 18px;
      border: 1px solid var(--glass);
      backdrop-filter: blur(var(--blur));
    }

    .outils h2 {
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 26px;
      margin-bottom: 20px;
    }

    .item {
      margin-bottom: 14px;
    }

    .item strong {
      color: #3C35FC;
      font-size: 16px;
      font-weight: 800;
    }

    /* ------------------ CARTE MODALE ------------------ */
    #overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.5);
      display: none;
      z-index: 999;
    }

    #cardModal {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80%;
      height: 70%;
      background: #000000ee;
      border-radius: 12px;
      overflow: hidden;
      display: none;
      z-index: 1000;
      box-shadow: 0 0 40px #3C35FC66;
    }

    #cardModal iframe {
      width: 100%;
      height: 100%;
      border: none;
    }

    .close-btn {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 18px;
      background: #f44336;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 6px;
      cursor: pointer;
      z-index: 1001;
    }

    /* ================== SECTION VEILLE DYNAMIQUE ================== */
    .veille-section {
      width: 88%;
      margin: 0 auto 60px;
    }

    .veille-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 16px;
      margin-bottom: 24px;
    }

    .veille-header h2 {
      font-size: 26px;
      font-weight: 700;
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin: 0;
    }

    .veille-stats {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      font-size: 13px;
      opacity: 0.7;
      margin-bottom: 16px;
    }

    .veille-stats span strong {
      color: #3C35FC;
      opacity: 1;
    }

    /* Contrôles : filtres + recherche */
    .veille-controls {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      align-items: center;
      margin-bottom: 20px;
    }

    .filter-pill {
      padding: 6px 16px;
      border-radius: 999px;
      border: 1px solid var(--glass);
      background: transparent;
      color: rgba(255,255,255,0.6);
      font-size: 13px;
      cursor: pointer;
      transition: 0.2s;
      font-family: inherit;
    }

    .filter-pill:hover {
      border-color: var(--accent);
      color: #fff;
    }

    .filter-pill.active {
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      border-color: transparent;
      color: #fff;
      font-weight: 700;
    }

    .veille-search {
      margin-left: auto;
      background: rgba(255,255,255,0.06);
      border: 1px solid var(--glass);
      border-radius: 999px;
      padding: 6px 16px;
      color: #fff;
      font-size: 13px;
      outline: none;
      font-family: inherit;
      width: 200px;
      transition: border-color 0.2s;
    }

    .veille-search::placeholder { color: rgba(255,255,255,0.3); }
    .veille-search:focus { border-color: var(--accent); }

    /* Bouton actualiser */
    .refresh-btn {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 8px 18px;
      border-radius: 999px;
      border: 1px solid var(--accent);
      background: transparent;
      color: var(--accent);
      font-size: 13px;
      font-weight: 700;
      cursor: pointer;
      transition: 0.2s;
      font-family: inherit;
    }

    .refresh-btn:hover { background: rgba(60,53,252,0.15); }
    .refresh-btn:disabled { opacity: 0.4; cursor: not-allowed; }

    .refresh-btn svg { transition: transform 0.6s; }
    .refresh-btn.spinning svg { animation: spin 1s linear infinite; }
    @keyframes spin { to { transform: rotate(360deg); } }

    /* Grille d'articles */
    .articles-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 20px;
    }

    .article-card {
      background: var(--card);
      border: 1px solid var(--glass);
      border-radius: 16px;
      padding: 22px;
      backdrop-filter: blur(var(--blur));
      transition: transform 0.25s, box-shadow 0.25s;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .article-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 0 24px rgba(60,53,252,0.2);
    }

    .article-card.is-new {
      border-color: rgba(60,53,252,0.5);
      animation: fadeSlideIn 0.4s ease both;
    }

    @keyframes fadeSlideIn {
      from { opacity: 0; transform: translateY(-10px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .article-meta {
      display: flex;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
    }

    .article-source {
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.6px;
      color: #3C35FC;
    }

    .article-date {
      font-size: 11px;
      opacity: 0.45;
      margin-left: auto;
    }

    .new-badge {
      font-size: 10px;
      font-weight: 700;
      padding: 2px 8px;
      border-radius: 999px;
      background: rgba(60,53,252,0.25);
      color: #7b76ff;
      border: 1px solid rgba(60,53,252,0.4);
    }

    .article-title {
      font-size: 15px;
      font-weight: 700;
      color: #fff;
      line-height: 1.45;
    }

    .article-excerpt {
      font-size: 13px;
      opacity: 0.65;
      line-height: 1.55;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .article-link {
      margin-top: auto;
      font-size: 12px;
      font-weight: 700;
      color: var(--accent);
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 4px;
    }

    .article-link:hover { text-decoration: underline; }

    .article-cat-tag {
      display: inline-block;
      font-size: 11px;
      padding: 3px 10px;
      border-radius: 999px;
      border: 1px solid var(--glass);
      color: rgba(255,255,255,0.5);
    }

    /* États vides / chargement */
    .veille-loader,
    .veille-empty {
      grid-column: 1 / -1;
      text-align: center;
      padding: 60px 20px;
      opacity: 0.5;
      font-size: 15px;
    }

    .timeline-sep {
      grid-column: 1 / -1;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: rgba(255,255,255,0.25);
      padding: 4px 0;
      border-bottom: 1px solid rgba(255,255,255,0.07);
      margin-top: 8px;
    }

    /* toast notification */
    #toast {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background: rgba(60,53,252,0.9);
      color: #fff;
      padding: 12px 22px;
      border-radius: 12px;
      font-size: 14px;
      font-weight: 600;
      backdrop-filter: blur(12px);
      transform: translateY(80px);
      opacity: 0;
      transition: all 0.35s;
      z-index: 2000;
      pointer-events: none;
    }

    #toast.show {
      transform: translateY(0);
      opacity: 1;
    }

    .explication {
      max-width: 1620px;
      margin: 40px auto;
      padding: 25px 30px;
      background-color: #2a2a2b64;
      border-left: 5px solid #2563eb;
      border-radius: 10px;
      font-family: Arial, sans-serif;
      color: #ffffff;
      line-height: 1.6;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    
    .explication p {
      margin-bottom: 15px;
    }
    
    .explication strong {
      color: #2563eb;
    }
    
    .explication ul {
      margin: 15px 0;
      padding-left: 20px;
    }
    
    .explication li {
      margin-bottom: 8px;
      font-weight: 500;
    }
    </style>
</head>
<?php include('includes/script.php'); ?>

<body>
    <?php include('includes/header.php'); ?>
    <main>

<section class="hero">
  <h1>Veille-Tech</h1>
</section>
<section class="explication">
  <p>
    Sur cette page, vous trouverez des articles archivés autour des deux thèmes que j’ai choisi d’explorer : 
    <strong>WebAssembly & WASI</strong> ainsi que le <strong>Edge Computing</strong>.
  </p>

  <p>
    Cette veille est régulièrement mise à jour afin de vous proposer les informations et actualités les plus pertinentes 
    sur ces sujets.
  </p>

  <p>
    Pour consulter les articles qui m’ont particulièrement intéressé, veuillez cliquer sur le bloc correspondant :
  </p>

  <ul>
    <li><strong>WebAssembly & WASI</strong></li>
    <li><strong>Edge Computing</strong></li>
  </ul>

  <p>
    Choisissez le thème qui vous intéresse pour accéder aux contenus associés.
  </p>
</section>
<!-- THEMES -->
<div class="grid" id="themes">

  <div class="card" onclick="toggleDetails('wasm-details')">
    <h3>WebAssembly & WASI</h3>
    <p>Depuis mars 2024, WebAssembly s'est renforcé grâce à WASI pour des micro-services rapides.</p>
    <span class="badge">Performances</span>
  </div>

  <div id="wasm-details" style="display:none; padding:20px; background:rgba(255,255,255,0.07); border-radius:12px; border:1px solid rgba(255,255,255,0.12);">
    <ul>
      <li>Évolutions WASI – <a href="#" onclick="openCard('https://eunomia.dev/blog/2025/02/16/wasi-and-the-webassembly-component-model-current-status/')">Article sur WASI 2024</a></li>
      <li>Progression des runtimes : Wasmtime, Wasmer – <a href="https://www.cncf.io/blog/2024/03/28/webassembly-on-kubernetes-the-practice-guide-part-02/" target="_blank">Comparatif 2024</a></li>
      <li>Intégration edge via Cloudflare, Deno – <a href="#" onclick="openCard('https://blog.cloudflare.com/builder-day-2024-announcements/')">Annonce Cloudflare</a></li>
      <li>Cas d'usage 2024–2025 – <a href="https://www.cncf.io/blog/2024/03/28/webassembly-on-kubernetes-the-practice-guide-part-02/" target="_blank">Études de cas Wasm</a></li>
    </ul>
  </div>

  <div class="card" onclick="toggleDetails('edge-details')">
    <h3>Edge Computing / Serverless</h3>
    <p>Entre 2024 et 2025, l'edge est devenu une référence pour des apps rapides.</p>
    <span class="badge">Architecture</span>
  </div>

  <div id="edge-details" style="display:none; padding:20px; background:rgba(255,255,255,0.07); border-radius:12px; border:1px solid rgba(255,255,255,0.12);">
    <ul>
      <li>Cloudflare Workers : nouveaux APIs – <a href="#" onclick="openCard('https://blog.cloudflare.com/builder-day-2024-announcements/')">Cloudflare Docs</a></li>
      <li>Deno Deploy : évolutions 2024–2025 – <a href="https://deno.com/blog?tag=product-update" target="_blank">Annonce Deno</a></li>
      <li>Architecture edge-first – <a href="#" onclick="openCard('https://devclass.com/2024/04/03/cloudflare-updates-workers-platform-with-python-support-event-notifications-and-improved-local-development/')">Article Architecture Edge</a></li>
      <li>Cas d'usage 2024–2025 – <a href="https://crustlab.com/blog/serverless-use-cases-see-what-companies-follow-the-serverless-approach/" target="_blank">Exemples Serverless</a></li>
    </ul>
  </div>

</div>

<!-- ====================== SECTION ARTICLES DYNAMIQUES ====================== -->
<section class="veille-section">

  <div class="veille-header">
    <h2>Articles — flux en direct</h2>
    <button class="refresh-btn" id="refreshBtn" onclick="refreshArticles()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/>
        <path d="M21 3v5h-5"/>
        <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/>
        <path d="M8 16H3v5"/>
      </svg>
      Actualiser
    </button>
  </div>

  <div class="veille-stats">
    <span><strong id="statTotal">—</strong> articles en archive</span>
    <span><strong id="statNew">—</strong> nouveaux</span>
    <span>Dernière mise à jour : <strong id="statDate">—</strong></span>
  </div>

  <div class="veille-controls">
    <button class="filter-pill active" data-cat="all"       onclick="setFilter(this, 'all')">Tous</button>
    <button class="filter-pill"        data-cat="WebAssembly & WASI"  onclick="setFilter(this, 'WebAssembly & WASI')">WebAssembly & WASI</button>
    <button class="filter-pill"        data-cat="Edge Computing" onclick="setFilter(this, 'Edge Computing')">Edge Computing</button>
    <input  class="veille-search" type="text" id="searchInput" placeholder="Rechercher un article…" oninput="onSearch()" />
  </div>

  <div class="articles-grid" id="articlesGrid">
    <div class="veille-loader">Chargement des articles…</div>
  </div>

</section>
<!-- ======================================================================== -->

<!-- POURQUOI CES THÈMES -->
<div style="width:88%; margin:40px auto; padding:20px; background:var(--card); border-radius:18px; border:1px solid var(--glass); backdrop-filter:blur(var(--blur));">
 <h3>Pourquoi j'ai choisi ces deux thèmes ?</h3><br>
<p>J'ai choisi WebAssembly/WASI et l'Edge Computing car ces deux technologies représentent l'évolution actuelle la plus marquante dans le développement moderne. WebAssembly apporte des performances proches du natif et ouvre la voie à des applications plus rapides et plus sûres. L'Edge Computing, lui, révolutionne la manière dont les services sont déployés en rapprochant l'exécution de l'utilisateur.</p>
<p>Leur progression forte depuis 2024 en fait des sujets essentiels à suivre dans une veille technologique et totalement cohérents avec les attentes des développeurs.</p>
</div>

<!-- OUTILS DE VEILLE -->

<div class="outils" id="outils">
  <h2>Outils de Veille</h2>

  <div class="item"><strong>Flux RSS automatisés</strong> — Mozilla Hacks, Bytecode Alliance, InfoQ, Cloudflare Blog, Deno Blog agrégés et mis à jour toutes les 6h via un script PHP maison.</div>

  <div class="item"><strong>Planificateur Windows / Cron</strong> — Mise à jour automatique en arrière-plan sans intervention manuelle.</div>

  <div class="item"><strong>GitHub</strong> — Release tracking des projets clés : Wasmtime, Wasmer, Deno, Cloudflare Workers.</div>

  <div class="item"><strong>Hacker News</strong> — Détection des discussions communautaires sur l'edge et le serverless.</div>

  <div class="item"><strong>MDN Web Docs</strong> — Suivi des évolutions des standards WebAssembly.</div>
</div>


<!-- MODAL / CARTE -->
<div id="overlay"></div>
<div id="cardModal">
  <button class="close-btn" onclick="closeCard()">X</button>
  <iframe id="cardFrame"></iframe>
</div>

<!-- Toast notification -->
<div id="toast"></div>

<script>
/* =====================================================================
   VEILLE DYNAMIQUE — logique JS
   ===================================================================== */

let currentCat = 'all';
let currentQ   = '';
let debounceT  = null;

/* ── Formatage date ── */
function formatDate(ts) {
  if (!ts) return '—';
  const d = new Date(ts * 1000);
  const now = new Date();
  const diff = Math.floor((now - d) / 1000);
  if (diff < 3600)  return Math.floor(diff / 60) + ' min';
  if (diff < 86400) return Math.floor(diff / 3600) + 'h';
  if (diff < 604800) return Math.floor(diff / 86400) + 'j';
  return d.toLocaleDateString('fr-FR', { day: '2-digit', month: 'short', year: 'numeric' });
}

/* ── Render articles ── */
function renderArticles(articles, newCount, total, lastUpdate) {
  const grid = document.getElementById('articlesGrid');

  document.getElementById('statTotal').textContent = total ?? articles.length;
  document.getElementById('statNew').textContent   = newCount ?? 0;
  document.getElementById('statDate').textContent  = lastUpdate
    ? new Date(lastUpdate).toLocaleString('fr-FR', { day:'2-digit', month:'short', hour:'2-digit', minute:'2-digit' })
    : '—';

  if (!articles.length) {
    grid.innerHTML = '<div class="veille-empty">Aucun article trouvé.</div>';
    return;
  }

  /* Regrouper par mois pour les séparateurs de timeline */
  let html = '';
  let lastMonth = null;

  articles.forEach(a => {
    const d = new Date((a.timestamp ?? 0) * 1000);
    const month = d.toLocaleDateString('fr-FR', { month: 'long', year: 'numeric' });

    if (month !== lastMonth) {
      html += `<div class="timeline-sep">${month}</div>`;
      lastMonth = month;
    }

    html += `
      <div class="article-card ${a.isNew ? 'is-new' : ''}">
        <div class="article-meta">
          <span class="article-source">${escHtml(a.source)}</span>
          ${a.isNew ? '<span class="new-badge">Nouveau</span>' : ''}
          <span class="article-date">${formatDate(a.timestamp)}</span>
        </div>
        <div class="article-title">${escHtml(a.title)}</div>
        ${a.excerpt ? `<div class="article-excerpt">${escHtml(a.excerpt)}</div>` : ''}
        <div style="display:flex; align-items:center; justify-content:space-between; margin-top:6px;">
          <span class="article-cat-tag">${escHtml(a.category)}</span>
          <a class="article-link" href="${escHtml(a.url)}" target="_blank" rel="noopener">
            Lire l'article ↗
          </a>
        </div>
      </div>`;
  });

  grid.innerHTML = html;
}

function escHtml(s) {
  if (!s) return '';
  return String(s)
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;');
}

/* ── Chargement des articles ── */
function loadArticles() {
  const params = new URLSearchParams({ action: 'list', cat: currentCat, q: currentQ });
  fetch('api_articles.php?' + params)
    .then(r => r.json())
    .then(data => {
      if (data.success) {
        renderArticles(data.articles, data.newCount, data.total, data.lastUpdate);
        /* marquer comme lus après affichage */
        if (data.newCount > 0) {
          fetch('api_articles.php', { method: 'POST', body: new URLSearchParams({ action: 'markRead' }) });
        }
      } else {
        document.getElementById('articlesGrid').innerHTML =
          '<div class="veille-empty">Impossible de charger les articles.<br>Lance <code>fetch_articles.php</code> une première fois.</div>';
      }
    })
    .catch(() => {
      document.getElementById('articlesGrid').innerHTML =
        '<div class="veille-empty">Erreur de connexion à l\'API.</div>';
    });
}

/* ── Filtres ── */
function setFilter(btn, cat) {
  document.querySelectorAll('.filter-pill').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  currentCat = cat;
  loadArticles();
}

/* ── Recherche (debounce 400 ms) ── */
function onSearch() {
  clearTimeout(debounceT);
  debounceT = setTimeout(() => {
    currentQ = document.getElementById('searchInput').value.trim();
    loadArticles();
  }, 400);
}

/* ── Actualiser (appelle fetch_articles.php côté serveur) ── */
function refreshArticles() {
  const btn = document.getElementById('refreshBtn');
  btn.disabled = true;
  btn.classList.add('spinning');

  fetch('api_articles.php', { method: 'POST', body: new URLSearchParams({ action: 'refresh' }) })
    .then(r => r.json())
    .then(data => {
      showToast(data.new > 0
        ? `✅ ${data.new} nouvel${data.new > 1 ? 's' : ''} article${data.new > 1 ? 's' : ''} ajouté${data.new > 1 ? 's' : ''} !`
        : '✓ Veille à jour — aucun nouvel article');
      loadArticles();
    })
    .catch(() => showToast('❌ Erreur lors de l\'actualisation'))
    .finally(() => {
      btn.disabled = false;
      btn.classList.remove('spinning');
    });
}

/* ── Toast ── */
function showToast(msg) {
  const t = document.getElementById('toast');
  t.textContent = msg;
  t.classList.add('show');
  setTimeout(() => t.classList.remove('show'), 3500);
}

/* ── Fonctions existantes préservées ── */
function toggleDetails(id) {
  const box = document.getElementById(id);
  box.style.display = box.style.display === 'block' ? 'none' : 'block';
}

function openCard(url) {
  document.getElementById('cardFrame').src = url;
  document.getElementById('cardModal').style.display = 'block';
  document.getElementById('overlay').style.display = 'block';
}

function closeCard() {
  document.getElementById('cardFrame').src = '';
  document.getElementById('cardModal').style.display = 'none';
  document.getElementById('overlay').style.display = 'none';
}

document.getElementById('overlay').addEventListener('click', closeCard);

/* ── Démarrage ── */
loadArticles();
</script>

<?php include('includes/footer.php'); ?>
</body>
</html>
