<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets - Portefolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/">
    <link rel="shortcut icon" href="assets/images/alien-svgrepo-com.svg" type="image/x-icon">
</head>
<?php include('includes/script.php'); ?>

<body>
    <?php include('includes/header.php'); ?>
    <main>
  <style>
    /* ------------------ THEME FUTURISTE ------------------ */
    :root {
      --bg: #000000ff;
      --txt: #ffffffff;
      --accent: #0015ffff;
      --accent2: #002cb0ff;
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



    /* HEADER */
    header {
      padding: 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }





    /* TITRE PRINCIPAL */
    .hero {
      text-align: center;
      margin-top: 10px;
    }

    .hero h1 {
      font-size: 48px;
      font-weight: 700;
      background: linear-gradient(120deg, var(--accent), var(--accent2));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hero p {
      margin-top: 10px;
      font-size: 18px;
      opacity: 0.7;
    }

    /* GRILLE DES THEMES */
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

    /* OUTILS DE VEILLE */
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
      color: blue;
      font-size: 16px;
      font-weight: 800;
    }
  </style>



<script>
// --- Gestion de l'ouverture des détails ---
function toggleDetails(id){
  const box = document.getElementById(id);
  box.style.display = box.style.display === "block" ? "none" : "block";
}

</script>


<section class="hero">
  <h1>Veille Technologique</h1>
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
      <li>Évolutions WASI – <a href="https://eunomia.dev/blog/2025/02/16/wasi-and-the-webassembly-component-model-current-status/" target="_blank">Article sur WASI 2024</a></li>
      <li>Progression des runtimes : Wasmtime, Wasmer – <a href="https://www.cncf.io/blog/2024/03/28/webassembly-on-kubernetes-the-practice-guide-part-02/" target="_blank">Comparatif 2024</a></li>
      <li>Intégration edge via Cloudflare, Deno – <a href="https://blog.cloudflare.com/builder-day-2024-announcements/" target="_blank">Annonce Cloudflare</a></li>
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
      <li>Cloudflare Workers : nouveaux APIs – <a href="https://blog.cloudflare.com/builder-day-2024-announcements/" target="_blank">Cloudflare Docs</a></li>
      <li>Deno Deploy : évolutions 2024–2025 – <a href="https://deno.com/blog?tag=product-update" target="_blank">Annonce Deno</a></li>
      <li>Architecture edge-first – <a href="https://devclass.com/2024/04/03/cloudflare-updates-workers-platform-with-python-support-event-notifications-and-improved-local-development/" target="_blank">Article Architecture Edge</a></li>
      <li>Cas d’usage 2024–2025 – <a href="#" target="_blank">Exemples Serverless</a></li>
    </ul>
  </div>

</div>
<div style="width:88%; margin:40px auto; padding:20px; background:var(--card); border-radius:18px; border:1px solid var(--glass); backdrop-filter:blur(var(--blur));">

 <h3>Pourquoi j’ai choisi ces deux thèmes ?</h3><br>
<p>J’ai choisi WebAssembly/WASI et l’Edge Computing car ces deux technologies représentent l’évolution actuelle la plus marquante dans le développement moderne. WebAssembly apporte des performances proches du natif et ouvre la voie à des applications plus rapides et plus sûres. L’Edge Computing, lui, révolutionne la manière dont les services sont déployés en rapprochant l’exécution de l’utilisateur.
</p>
<p>Leur progression forte depuis 2024 en fait des sujets essentiels à suivre dans une veille technologique et totalement cohérents avec les attentes des développeurs.
</p>
</div>

<!-- OUTILS DE VEILLE -->
<div class="outils" id="outils">
  <h2>Outils de Veille</h2>

  <div class="item"><strong>Feedly</strong> — Suivi des actualités WebAssembly et WASI.</div>
  <div class="item"><strong>GitHub</strong> — Release tracking : Wasmtime, Wasmer, Deno, Cloudflare Workers.</div>
  <div class="item"><strong>Hacker News</strong> — Détection des annonces edge/serverless.</div>
  <div class="item"><strong>MDN</strong> — Suivi des standards web impactant Wasm et l’edge.</div>

</div>



    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>