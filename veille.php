<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veille Technologique — IA & Développement Web</title>
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
    $metaDescription = "Veille technologique sur l'intelligence artificielle dans le développement web — assistants de code, LLMs, impact sur les développeurs, sécurité et limites de l'IA en 2024–2025.";
    ?>
    <link rel="canonical" href="<?php echo $canonical; ?>">
    <link rel="alternate" hreflang="fr" href="<?php echo $canonical; ?>">
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="veille technologique, intelligence artificielle, développement web, GitHub Copilot, LLM, GPT-4, Claude, Cursor, sécurité IA, assistants de code">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#005eff">

    <!-- Open Graph -->
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Veille Technologique — IA & Développement Web">
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo $canonical; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Veille Technologique — IA & Développement Web">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo $image; ?>">

    <!-- Performance hints -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Structured Data JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Veille Technologique — IA & Développement Web",
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
    /* ─── VARIABLES ─────────────────────────────────────────── */
    :root {
      --bg:       #050508;
      --txt:      #f0f0f5;
      --accent:   #3549fc;
      --accent2:  #6270ff;
      --card:     rgba(255,255,255,0.04);
      --glass:    rgba(255,255,255,0.09);
      --blur:     18px;
      --radius:   18px;
      font-family: 'Syne', sans-serif;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      background: var(--bg);
      color: var(--txt);
      overflow-x: hidden;
      font-size: 16px;
    }

    /* ─── HERO ──────────────────────────────────────────────── */
    .hero {
      text-align: center;
      padding: 64px 20px 30px;
    }

    .hero-label {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-family: 'DM Mono', monospace;
      font-size: 11px;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--accent2);
      border: 1px solid rgba(101,112,255,.35);
      padding: 5px 14px;
      border-radius: 999px;
      margin-bottom: 22px;
    }

    .hero-label span {
      width: 6px; height: 6px;
      border-radius: 50%;
      background: var(--accent2);
      animation: blink 1.6s ease-in-out infinite;
    }

    @keyframes blink { 0%,100%{opacity:1} 50%{opacity:.25} }

    .hero h1 {
      font-size: clamp(36px, 5vw, 64px);
      font-weight: 800;
      line-height: 1.1;
      background: linear-gradient(135deg, #fff 30%, var(--accent2));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 16px;
    }

    .hero p {
      max-width: 560px;
      margin: 0 auto;
      font-size: 16px;
      opacity: 0.55;
      font-family: 'DM Mono', monospace;
      line-height: 1.7;
    }

    /* ─── EXPLICATION ───────────────────────────────────────── */
    .explication {
      max-width: 900px;
      margin: 48px auto;
      padding: 32px 36px;
      background: rgba(53,73,252,.07);
      border-left: 3px solid var(--accent);
      border-radius: 0 var(--radius) var(--radius) 0;
      color: #d8d8ee;
      line-height: 1.75;
      font-family: 'DM Mono', monospace;
      font-size: 14px;
    }

    .explication p { margin-bottom: 14px; }
    .explication p:last-child { margin-bottom: 0; }
    .explication strong { color: var(--accent2); }

    .explication ul {
      list-style: none;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 14px;
    }

    .explication ul li {
      padding: 5px 14px;
      border-radius: 999px;
      border: 1px solid rgba(101,112,255,.4);
      font-size: 12px;
      color: var(--accent2);
      font-weight: 500;
    }

    /* ─── SECTION POURQUOI ──────────────────────────────────── */
    .pourquoi {
      width: 88%;
      max-width: 1400px;
      margin: 0 auto 60px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 16px;
    }

    .pourquoi-card {
      background: var(--card);
      border: 1px solid var(--glass);
      border-radius: var(--radius);
      padding: 24px 22px;
      backdrop-filter: blur(var(--blur));
      position: relative;
      overflow: hidden;
      transition: transform .25s, box-shadow .25s;
    }

    .pourquoi-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 0 28px rgba(53,73,252,.18);
    }

    .pourquoi-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--accent), var(--accent2));
    }

    .pourquoi-card .icon {
      font-size: 26px;
      margin-bottom: 12px;
      display: block;
    }

    .pourquoi-card h4 {
      font-size: 15px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 8px;
    }

    .pourquoi-card p {
      font-size: 13px;
      opacity: .55;
      font-family: 'DM Mono', monospace;
      line-height: 1.6;
    }

    /* ─── THÈMES (grandes cards cliquables) ─────────────────── */
    .grid {
      width: 88%;
      max-width: 1400px;
      margin: 0 auto 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
    }

    .card {
      background: var(--card);
      border: 1px solid var(--glass);
      padding: 28px 26px;
      border-radius: var(--radius);
      backdrop-filter: blur(var(--blur));
      transition: transform .3s, box-shadow .3s;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }

    .card::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(53,73,252,.08), transparent 60%);
      opacity: 0;
      transition: opacity .3s;
    }

    .card:hover { transform: translateY(-6px) scale(1.02); box-shadow: 0 0 32px rgba(53,73,252,.2); }
    .card:hover::after { opacity: 1; }

    .card h3 {
      font-size: 20px;
      color: var(--accent2);
      font-weight: 800;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 13px;
      opacity: .65;
      font-family: 'DM Mono', monospace;
      line-height: 1.6;
      color: #fff;
    }

    .badge {
      display: inline-block;
      margin-top: 14px;
      padding: 5px 14px;
      font-size: 11px;
      border-radius: 999px;
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      color: #fff;
      font-weight: 700;
      letter-spacing: .5px;
      text-transform: uppercase;
    }

    /* ─── DÉTAILS DÉPLIABLES ────────────────────────────────── */
    .theme-details {
      display: none;
      width: 88%;
      max-width: 1400px;
      margin: 0 auto 20px;
      padding: 26px 28px;
      background: rgba(255,255,255,.04);
      border-radius: var(--radius);
      border: 1px solid rgba(255,255,255,.1);
      backdrop-filter: blur(var(--blur));
    }

    .theme-details ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .theme-details ul li {
      font-size: 14px;
      font-family: 'DM Mono', monospace;
      color: rgba(255,255,255,.7);
      display: flex;
      align-items: baseline;
      gap: 10px;
    }

    .theme-details ul li::before {
      content: '→';
      color: var(--accent2);
      flex-shrink: 0;
    }

    .theme-details ul li a {
      color: var(--accent2);
      text-decoration: none;
      font-weight: 500;
      transition: opacity .2s;
    }

    .theme-details ul li a:hover { text-decoration: underline; opacity: .8; }

    /* ─── SECTION VEILLE DYNAMIQUE ──────────────────────────── */
    .veille-section {
      width: 88%;
      max-width: 1400px;
      margin: 0 auto 60px;
    }

    .veille-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 16px;
      margin-bottom: 20px;
    }

    .veille-header h2 {
      font-size: 22px;
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
      font-size: 12px;
      opacity: .6;
      margin-bottom: 14px;
      font-family: 'DM Mono', monospace;
    }

    .veille-stats strong { color: var(--accent2); opacity: 1; }

    /* Filtres + recherche */
    .veille-controls {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      align-items: center;
      margin-bottom: 24px;
    }

    .filter-pill {
      padding: 5px 15px;
      border-radius: 999px;
      border: 1px solid var(--glass);
      background: transparent;
      color: rgba(255,255,255,.55);
      font-size: 12px;
      cursor: pointer;
      transition: .2s;
      font-family: 'Syne', sans-serif;
      font-weight: 600;
    }

    .filter-pill:hover { border-color: var(--accent); color: #fff; }
    .filter-pill.active {
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      border-color: transparent;
      color: #fff;
    }

    .veille-search {
      margin-left: auto;
      background: rgba(255,255,255,.05);
      border: 1px solid var(--glass);
      border-radius: 999px;
      padding: 5px 16px;
      color: #fff;
      font-size: 12px;
      outline: none;
      font-family: 'DM Mono', monospace;
      width: 200px;
      transition: border-color .2s;
    }

    .veille-search::placeholder { color: rgba(255,255,255,.28); }
    .veille-search:focus { border-color: var(--accent); }

    /* Bouton actualiser */
    .refresh-btn {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 7px 18px;
      border-radius: 999px;
      border: 1px solid var(--accent);
      background: transparent;
      color: var(--accent2);
      font-size: 12px;
      font-weight: 700;
      cursor: pointer;
      transition: .2s;
      font-family: 'Syne', sans-serif;
    }

    .refresh-btn:hover { background: rgba(53,73,252,.15); }
    .refresh-btn:disabled { opacity: .4; cursor: not-allowed; }
    .refresh-btn svg { transition: transform .6s; }
    .refresh-btn.spinning svg { animation: spin 1s linear infinite; }
    @keyframes spin { to { transform: rotate(360deg); } }

    /* Grille articles */
    .articles-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 18px;
    }

    .article-card {
      background: var(--card);
      border: 1px solid var(--glass);
      border-radius: 16px;
      padding: 22px;
      backdrop-filter: blur(var(--blur));
      transition: transform .25s, box-shadow .25s;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .article-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 0 24px rgba(53,73,252,.18);
    }

    .article-card.is-new { border-color: rgba(53,73,252,.5); animation: fadeSlideIn .4s ease both; }

    @keyframes fadeSlideIn {
      from { opacity:0; transform:translateY(-10px); }
      to   { opacity:1; transform:translateY(0); }
    }

    .article-meta {
      display: flex;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
    }

    .article-source {
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: var(--accent2);
      font-family: 'DM Mono', monospace;
    }

    .article-date {
      font-size: 10px;
      opacity: .4;
      margin-left: auto;
      font-family: 'DM Mono', monospace;
    }

    .new-badge {
      font-size: 10px;
      font-weight: 700;
      padding: 2px 8px;
      border-radius: 999px;
      background: rgba(53,73,252,.22);
      color: #7b76ff;
      border: 1px solid rgba(53,73,252,.4);
    }

    .article-title {
      font-size: 16px;
      font-weight: 700;
      color: #fff;
      line-height: 1.45;
    }

    .article-excerpt {
      font-size: 13px;
      opacity: .58;
      line-height: 1.6;
      font-family: 'DM Mono', monospace;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .article-link {
      margin-top: auto;
      font-size: 12px;
      font-weight: 700;
      color: var(--accent2);
      text-decoration: none;
      font-family: 'DM Mono', monospace;
      letter-spacing: .3px;
    }

    .article-link:hover { text-decoration: underline; }

    .article-cat-tag {
      display: inline-block;
      font-size: 11px;
      padding: 3px 10px;
      border-radius: 999px;
      border: 1px solid var(--glass);
      color: rgba(255,255,255,.4);
      font-family: 'DM Mono', monospace;
    }

    /* États vides / chargement */
    .veille-loader,
    .veille-empty {
      grid-column: 1 / -1;
      text-align: center;
      padding: 60px 20px;
      opacity: .45;
      font-size: 14px;
      font-family: 'DM Mono', monospace;
    }

    .timeline-sep {
      grid-column: 1 / -1;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: rgba(255,255,255,.2);
      font-family: 'DM Mono', monospace;
      padding: 4px 0;
      border-bottom: 1px solid rgba(255,255,255,.06);
      margin-top: 6px;
    }

    /* ─── OUTILS DE VEILLE ──────────────────────────────────── */
    .outils {
      width: 88%;
      max-width: 1400px;
      margin: 0 auto 60px;
      padding: 32px 36px;
      background: var(--card);
      border-radius: var(--radius);
      border: 1px solid var(--glass);
      backdrop-filter: blur(var(--blur));
    }

    .outils h2 {
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 22px;
      margin-bottom: 24px;
    }

    .outils-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 16px;
    }

    .outil-item {
      background: rgba(255,255,255,.03);
      border: 1px solid var(--glass);
      border-radius: 12px;
      padding: 18px 16px;
    }

    .outil-item strong {
      display: block;
      color: var(--accent2);
      font-size: 13px;
      font-weight: 800;
      margin-bottom: 8px;
    }

    .outil-item p {
      font-size: 12px;
      opacity: .55;
      font-family: 'DM Mono', monospace;
      line-height: 1.6;
    }

    /* ─── TOAST ─────────────────────────────────────────────── */
    #toast {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background: rgba(53,73,252,.92);
      color: #fff;
      padding: 12px 22px;
      border-radius: 12px;
      font-size: 13px;
      font-weight: 600;
      font-family: 'DM Mono', monospace;
      backdrop-filter: blur(12px);
      transform: translateY(80px);
      opacity: 0;
      transition: all .35s;
      z-index: 2000;
      pointer-events: none;
    }

    #toast.show { transform: translateY(0); opacity: 1; }
    </style>
</head>

<?php include('includes/script.php'); ?>

<body>
<?php include('includes/header.php'); ?>
<main>

<!-- ─── HERO ──────────────────────────────────────────────────── -->
<section class="hero">
  <div class="hero-label"><span></span> Veille active — mise à jour automatique</div>
  <h1>IA & Développement Web</h1>
  <p>Suivi des outils, modèles et pratiques qui transforment le métier de développeur en 2024–2025.</p>
</section>

<!-- ─── EXPLICATION ───────────────────────────────────────────── -->
<section class="explication">
  <p>
    Cette page regroupe ma veille technologique autour d'un seul thème central :
    <strong>l'intelligence artificielle appliquée au développement web</strong>.
    J'y suis l'évolution des assistants de code, l'émergence de nouveaux modèles de langage,
    leur impact réel sur les pratiques des développeurs, ainsi que les risques et limites qu'ils soulèvent.
  </p>
  <p>
    Les articles sont collectés automatiquement depuis des sources de référence,
    triés par date et organisés en quatre axes thématiques :
  </p>
  <ul>
    <li>Assistants IA & outils</li>
    <li>Modèles & recherche IA</li>
    <li>Impact & pratiques dev</li>
    <li>Sécurité & limites de l'IA</li>
  </ul>
</section>

<!-- ─── POURQUOI CE THÈME ─────────────────────────────────────── -->
<div class="pourquoi">
  <div class="pourquoi-card">
    <svg class="icon" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <circle cx="12" cy="12" r="1"></circle>
      <path d="M12 1v6m0 6v6"></path>
      <path d="M4.22 4.22l4.24 4.24m0 5.08l-4.24 4.24"></path>
      <path d="M1 12h6m6 0h6"></path>
      <path d="M4.22 19.78l4.24-4.24m5.08 0l4.24 4.24"></path>
      <path d="M19.78 4.22l-4.24 4.24m0 5.08l4.24 4.24"></path>
      <path d="M23 12h-6m-6 0H5"></path>
      <path d="M19.78 19.78l-4.24-4.24m-5.08 0l-4.24-4.24"></path>
    </svg>
    <h4>Actualité brûlante</h4>
    <p>GitHub Copilot, Claude, GPT-4o, Cursor… les sorties majeures se succèdent chaque mois depuis 2024.</p>
  </div>
  <div class="pourquoi-card">
    <svg class="icon" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
      <path d="M2 17l10 5 10-5"></path>
      <path d="M2 12l10 5 10-5"></path>
    </svg>
    <h4>Impact direct sur le métier</h4>
    <p>Ces outils changent concrètement la façon d'écrire du code, de tester et de déboguer au quotidien.</p>
  </div>
  <div class="pourquoi-card">
    <svg class="icon" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
    </svg>
    <h4>Risques réels à connaître</h4>
    <p>Hallucinations, vulnérabilités, dépendance aux suggestions : un développeur doit comprendre les limites.</p>
  </div>
  <div class="pourquoi-card">
    <svg class="icon" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
    </svg>
    <h4>Débat de société</h4>
    <p>L'IA va-t-elle remplacer les devs ? Qui détient le copyright du code généré ? Des questions essentielles.</p>
  </div>
</div>

<!-- ─── THÈMES (cards dépliables) ────────────────────────────── -->
<div class="grid" id="themes">

  <div class="card" onclick="toggleDetails('assistants-details')">
    <h3>Assistants IA & outils</h3>
    <p>GitHub Copilot, Cursor, Windsurf, Amazon Q… les éditeurs intelligents qui s'intègrent dans votre IDE.</p>
    <span class="badge">Productivité</span>
  </div>

  <div class="card" onclick="toggleDetails('modeles-details')">
    <h3>Modèles & recherche IA</h3>
    <p>GPT-4o, Claude 3.5, Llama 3.1, DeepSeek-R1… l'évolution rapide des LLMs qui alimentent ces outils.</p>
    <span class="badge">LLMs</span>
  </div>

  <div class="card" onclick="toggleDetails('impact-details')">
    <h3>Impact & pratiques dev</h3>
    <p>Études empiriques, retours d'expérience et nouvelles pratiques que l'IA impose aux équipes de développement.</p>
    <span class="badge">Workflow</span>
  </div>

  <div class="card" onclick="toggleDetails('securite-details')">
    <h3>Sécurité & limites de l'IA</h3>
    <p>Hallucinations, vulnérabilités introduites, prompt injection, copyright du code généré — les angles sombres.</p>
    <span class="badge">Risques</span>
  </div>

</div>

<!-- Détails dépliables -->
<div class="theme-details" id="assistants-details">
  <ul>
    <li>GitHub Copilot Workspace : de l'issue au pull request — <a href="https://github.blog/2024-04-29-github-copilot-workspace/" target="_blank" rel="noopener">GitHub Blog</a></li>
    <li>Cursor vs Copilot : intégration IA plus profonde dans l'éditeur — <a href="https://www.cursor.com/blog/cursor-vs-copilot" target="_blank" rel="noopener">Cursor Blog</a></li>
    <li>Windsurf (Codeium) : agent de développement intégré — <a href="https://codeium.com/blog/windsurf-editor-release" target="_blank" rel="noopener">Codeium Blog</a></li>
    <li>Copilot multi-modèles : GPT-4o, Claude ou Gemini au choix — <a href="https://github.blog/2024-12-18-github-copilot-multi-model-support/" target="_blank" rel="noopener">GitHub Blog</a></li>
  </ul>
</div>

<div class="theme-details" id="modeles-details">
  <ul>
    <li>GPT-4o : modèle multimodal d'OpenAI, moitié prix pour les devs — <a href="https://openai.com/index/hello-gpt-4o/" target="_blank" rel="noopener">OpenAI</a></li>
    <li>Claude 3.5 Sonnet : nouveau champion des benchmarks de code — <a href="https://www.anthropic.com/news/claude-3-5-sonnet" target="_blank" rel="noopener">Anthropic</a></li>
    <li>Llama 3.1 405B open-source : auto-héberger un LLM frontier — <a href="https://ai.meta.com/blog/meta-llama-3-1/" target="_blank" rel="noopener">Meta AI</a></li>
    <li>DeepSeek-R1 : raisonnement open-source au niveau de o1 — <a href="https://github.com/deepseek-ai/DeepSeek-R1" target="_blank" rel="noopener">DeepSeek AI</a></li>
  </ul>
</div>

<div class="theme-details" id="impact-details">
  <ul>
    <li>Stack Overflow Survey 2024 : 62 % des devs utilisent l'IA au quotidien — <a href="https://survey.stackoverflow.co/2024/ai/" target="_blank" rel="noopener">Stack Overflow</a></li>
    <li>L'IA génère-t-elle du code de qualité ? Une étude empirique sur 10 000 contributions — <a href="https://www.infoq.com/articles/ai-code-quality-study-2024/" target="_blank" rel="noopener">InfoQ</a></li>
    <li>Vibe coding : coder à l'instinct avec l'IA, bonne idée ? — <a href="https://stackoverflow.blog/2025/02/vibe-coding-ai-risks/" target="_blank" rel="noopener">Stack Overflow Blog</a></li>
    <li>Génération auto de tests : Copilot, CodiumAI et Diffblue comparés — <a href="https://www.smashingmagazine.com/2024/10/ai-test-generation-tools-review/" target="_blank" rel="noopener">Smashing Magazine</a></li>
  </ul>
</div>

<div class="theme-details" id="securite-details">
  <ul>
    <li>Hallucinations de packages npm : une menace réelle pour les devs — <a href="https://www.infoq.com/articles/llm-package-hallucination-security/" target="_blank" rel="noopener">InfoQ</a></li>
    <li>Stanford : les devs utilisant Copilot écrivent du code moins sécurisé — <a href="https://www.technologyreview.com/2024/08/stanford-copilot-security-study/" target="_blank" rel="noopener">MIT Tech Review</a></li>
    <li>Prompt injection dans les agents IA : un nouveau vecteur d'attaque — <a href="https://www.infoq.com/articles/prompt-injection-ai-agents-security/" target="_blank" rel="noopener">InfoQ</a></li>
    <li>Copyright du code généré par IA : état du droit en 2024 — <a href="https://www.technologyreview.com/2024/11/ai-code-copyright-legal-status/" target="_blank" rel="noopener">MIT Tech Review</a></li>
  </ul>
</div>

<!-- ─── FLUX D'ARTICLES DYNAMIQUES ────────────────────────────── -->
<section class="veille-section">

  <div class="veille-header">
    <h2>Articles — flux en direct</h2>
    <button class="refresh-btn" id="refreshBtn" onclick="refreshArticles()">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
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
    <button class="filter-pill active" data-cat="all"                       onclick="setFilter(this,'all')">Tous</button>
    <button class="filter-pill"        data-cat="Assistants IA & outils"    onclick="setFilter(this,'Assistants IA &amp; outils')">Assistants IA</button>
    <button class="filter-pill"        data-cat="Modèles & recherche IA"    onclick="setFilter(this,'Modèles &amp; recherche IA')">Modèles & recherche</button>
    <button class="filter-pill"        data-cat="Impact & pratiques dev"    onclick="setFilter(this,'Impact &amp; pratiques dev')">Impact dev</button>
    <button class="filter-pill"        data-cat="Sécurité & limites de l'IA" onclick="setFilter(this,&quot;Sécurité &amp; limites de l'IA&quot;)">Sécurité & limites</button>
    <input  class="veille-search" type="text" id="searchInput" placeholder="Rechercher un article…" oninput="onSearch()" />
  </div>

  <div class="articles-grid" id="articlesGrid">
    <div class="veille-loader">Chargement des articles…</div>
  </div>

</section>

<!-- ─── OUTILS DE VEILLE ──────────────────────────────────────── -->
<div class="outils">
  <h2>Outils de veille</h2>
  <div class="outils-grid">
    <div class="outil-item">
      <strong>Flux RSS automatisés</strong>
      <p>GitHub Blog, Stack Overflow, Anthropic, OpenAI, InfoQ, MIT Tech Review — agrégés toutes les 6h via un script PHP.</p>
    </div>
    <div class="outil-item">
      <strong>Cron planifié</strong>
      <p>Mise à jour automatique en arrière-plan, aucune intervention manuelle requise.</p>
    </div>
    <div class="outil-item">
      <strong>GitHub Release Tracker</strong>
      <p>Suivi des nouvelles versions de Copilot, Cursor, LangChain, LlamaIndex et autres projets IA open-source.</p>
    </div>
    <div class="outil-item">
      <strong>Hacker News & Reddit</strong>
      <p>Détection des discussions communautaires sur l'IA dans le dev : r/programming, r/MachineLearning.</p>
    </div>
    <div class="outil-item">
      <strong>Benchmarks publics</strong>
      <p>HumanEval, SWE-bench, MBPP — les classements officiels pour évaluer les LLMs sur des tâches de code.</p>
    </div>
  </div>
</div>

<!-- ─── TOAST ─────────────────────────────────────────────────── -->
<div id="toast"></div>

<script>
/* ─── VEILLE DYNAMIQUE ──────────────────────────────────────────── */

let currentCat = 'all';
let currentQ   = '';
let debounceT  = null;

function formatDate(ts) {
  if (!ts) return '—';
  const d    = new Date(ts * 1000);
  const now  = new Date();
  const diff = Math.floor((now - d) / 1000);
  if (diff < 3600)   return Math.floor(diff / 60) + ' min';
  if (diff < 86400)  return Math.floor(diff / 3600) + 'h';
  if (diff < 604800) return Math.floor(diff / 86400) + 'j';
  return d.toLocaleDateString('fr-FR', { day: '2-digit', month: 'short', year: 'numeric' });
}

function escHtml(s) {
  if (!s) return '';
  return String(s)
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;');
}

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

  let html = '';
  let lastMonth = null;

  articles.forEach(a => {
    const d     = new Date((a.timestamp ?? 0) * 1000);
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
        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:6px;">
          <span class="article-cat-tag">${escHtml(a.category)}</span>
          <a class="article-link" href="${escHtml(a.url)}" target="_blank" rel="noopener">Lire l'article ↗</a>
        </div>
      </div>`;
  });

  grid.innerHTML = html;
}

function loadArticles() {
  // Convertir les entités HTML des catégories pour l'API
  const catParam = currentCat
    .replace(/&amp;/g, '&')
    .replace(/&#039;/g, "'");

  const params = new URLSearchParams({ action: 'list', cat: catParam, q: currentQ });
  fetch('api_articles.php?' + params)
    .then(r => r.json())
    .then(data => {
      if (data.success) {
        renderArticles(data.articles, data.newCount, data.total, data.lastUpdate);
        if (data.newCount > 0) {
          fetch('api_articles.php', { method:'POST', body: new URLSearchParams({ action:'markRead' }) });
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

function setFilter(btn, cat) {
  document.querySelectorAll('.filter-pill').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  currentCat = cat;
  loadArticles();
}

function onSearch() {
  clearTimeout(debounceT);
  debounceT = setTimeout(() => {
    currentQ = document.getElementById('searchInput').value.trim();
    loadArticles();
  }, 400);
}

function refreshArticles() {
  const btn = document.getElementById('refreshBtn');
  btn.disabled = true;
  btn.classList.add('spinning');

  fetch('api_articles.php', { method:'POST', body: new URLSearchParams({ action:'refresh' }) })
    .then(r => r.json())
    .then(data => {
      showToast(data.new > 0
        ? `✅ ${data.new} nouvel${data.new > 1 ? 's' : ''} article${data.new > 1 ? 's' : ''} ajouté${data.new > 1 ? 's' : ''} !`
        : '✓ Veille à jour — aucun nouvel article');
      loadArticles();
    })
    .catch(() => showToast('❌ Erreur lors de l\'actualisation'))
    .finally(() => { btn.disabled = false; btn.classList.remove('spinning'); });
}

function showToast(msg) {
  const t = document.getElementById('toast');
  t.textContent = msg;
  t.classList.add('show');
  setTimeout(() => t.classList.remove('show'), 3500);
}

function toggleDetails(id) {
  document.querySelectorAll('.theme-details').forEach(el => {
    if (el.id !== id) el.style.display = 'none';
  });
  const box = document.getElementById(id);
  box.style.display = box.style.display === 'block' ? 'none' : 'block';
}

/* Démarrage */
loadArticles();
</script>

</main>
<?php include('includes/footer.php'); ?>
</body>
</html>
