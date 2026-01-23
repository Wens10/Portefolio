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
    <meta name="theme-color" content="#0015ff">

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
      --accent: #3C35FC;
      --accent2: #3C35FC;
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
      background: #3C35FC;
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
      color: #2c25fee8;
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

    </style>
</head>
<?php include('includes/script.php'); ?>

<body>
    <?php include('includes/header.php'); ?>
    <main>

<section class="hero">
  <h1>Veille-Tech</h1>
</section>

<!-- THEMES -->
<div class="grid" id="themes">

  <div class="card" onclick="toggleDetails('wasm-details')">
    <h3>WebAssembly & WASI</h3>
    <p>Depuis mars 2024, WebAssembly s’est renforcé grâce à WASI pour des micro-services rapides.</p>
    <span class="badge">Performances</span>
  </div>

  <div id="wasm-details" style="display:none; padding:20px; background:rgba(255,255,255,0.07); border-radius:12px; border:1px solid rgba(255,255,255,0.12);">
    <ul>
      <li>Évolutions WASI – <a href="#" onclick="openCard('https://eunomia.dev/blog/2025/02/16/wasi-and-the-webassembly-component-model-current-status/')">Article sur WASI 2024</a></li>
      <li>Progression des runtimes : Wasmtime, Wasmer – <a href="https://www.cncf.io/blog/2024/03/28/webassembly-on-kubernetes-the-practice-guide-part-02/" target="_blank">Comparatif 2024</a></li>
      <li>Intégration edge via Cloudflare, Deno – <a href="#" onclick="openCard('https://blog.cloudflare.com/builder-day-2024-announcements/')">Annonce Cloudflare</a></li>
      <li>Cas d’usage 2024–2025 – <a href="https://www.cncf.io/blog/2024/03/28/webassembly-on-kubernetes-the-practice-guide-part-02/" target="_blank">Études de cas Wasm</a></li>
    </ul>
  </div>

  <div class="card" onclick="toggleDetails('edge-details')">
    <h3>Edge Computing / Serverless</h3>
    <p>Entre 2024 et 2025, l’edge est devenu une référence pour des apps rapides.</p>
    <span class="badge">Architecture</span>
  </div>

  <div id="edge-details" style="display:none; padding:20px; background:rgba(255,255,255,0.07); border-radius:12px; border:1px solid rgba(255,255,255,0.12);">
    <ul>
      <li>Cloudflare Workers : nouveaux APIs – <a href="#" onclick="openCard('https://blog.cloudflare.com/builder-day-2024-announcements/')">Cloudflare Docs</a></li>
      <li>Deno Deploy : évolutions 2024–2025 – <a href="https://deno.com/blog?tag=product-update" target="_blank">Annonce Deno</a></li>
      <li>Architecture edge-first – <a href="#" onclick="openCard('https://devclass.com/2024/04/03/cloudflare-updates-workers-platform-with-python-support-event-notifications-and-improved-local-development/')">Article Architecture Edge</a></li>
      <li>Cas d’usage 2024–2025 – <a href="https://crustlab.com/blog/serverless-use-cases-see-what-companies-follow-the-serverless-approach/" target="_blank">Exemples Serverless</a></li>
    </ul>
  </div>

</div>

<!-- POURQUOI CES THÈMES -->
<div style="width:88%; margin:40px auto; padding:20px; background:var(--card); border-radius:18px; border:1px solid var(--glass); backdrop-filter:blur(var(--blur));">
 <h3>Pourquoi j’ai choisi ces deux thèmes ?</h3><br>
<p>J’ai choisi WebAssembly/WASI et l’Edge Computing car ces deux technologies représentent l’évolution actuelle la plus marquante dans le développement moderne. WebAssembly apporte des performances proches du natif et ouvre la voie à des applications plus rapides et plus sûres. L’Edge Computing, lui, révolutionne la manière dont les services sont déployés en rapprochant l’exécution de l’utilisateur.</p>
<p>Leur progression forte depuis 2024 en fait des sujets essentiels à suivre dans une veille technologique et totalement cohérents avec les attentes des développeurs.</p>
</div>

<!-- OUTILS DE VEILLE -->
<div class="outils" id="outils">
  <h2>Outils de Veille</h2>
  <div class="item"><strong>Feedly</strong> — Suivi des actualités WebAssembly et WASI.</div>
  <div class="item"><strong>GitHub</strong> — Release tracking : Wasmtime, Wasmer, Deno, Cloudflare Workers.</div>
  <div class="item"><strong>Hacker News</strong> — Détection des annonces edge/serverless.</div>
  <div class="item"><strong>MDN</strong> — Suivi des standards web impactant Wasm et l’edge.</div>
</div>

<!-- MODAL / CARTE -->
<div id="overlay"></div>
<div id="cardModal">
  <button class="close-btn" onclick="closeCard()">X</button>
  <iframe id="cardFrame"></iframe>
</div>

<script>
// Toggle affichage détails
function toggleDetails(id){
  const box = document.getElementById(id);
  box.style.display = box.style.display === "block" ? "none" : "block";
}

// --- OUVRIR LIEN DANS LA CARTE ---
function openCard(url){
  document.getElementById('cardFrame').src = url;
  document.getElementById('cardModal').style.display = 'block';
  document.getElementById('overlay').style.display = 'block';
}

// --- FERMER LA CARTE ---
function closeCard(){
  document.getElementById('cardFrame').src = '';
  document.getElementById('cardModal').style.display = 'none';
  document.getElementById('overlay').style.display = 'none';
}


// Fermer en cliquant sur overlay
document.getElementById('overlay').addEventListener('click', closeCard);
</script>

<?php include('includes/footer.php'); ?>
</body>
</html>
