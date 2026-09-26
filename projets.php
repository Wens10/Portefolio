<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projets IA, web &amp; logiciel — Wenceslas BOUITY · Portfolio</title>

  <?php
  $base       = 'https://wenceslas-bouity.ovh';
  $currentUrl = $base . '/projets.php'; // canonique fixe (sans paramètres)
  $ogImage    = $base . '/assets/images/Image.jude.jpg';
  ?>

  <link rel="canonical" href="<?php echo htmlspecialchars($currentUrl, ENT_QUOTES); ?>">
  <link rel="alternate" href="<?php echo htmlspecialchars($currentUrl, ENT_QUOTES); ?>" hreflang="fr">

  <meta name="description"   content="Projets de Wenceslas BOUITY : applications web full-stack, jeux JavaScript, sites e-commerce, outils desktop C# et infrastructure GLPI. Liens GitHub et démonstrations en ligne.">
  <meta name="keywords"      content="projets développeur web, JavaScript, PHP, Python, Node.js, C#, WinUI3, SQLite, portfolio, GitHub, Wenceslas BOUITY">
  <meta name="author"        content="Wenceslas BOUITY">
  <meta name="robots"        content="index, follow">
  <meta name="theme-color"   content="#2564CF">

  <meta property="og:title"       content="Projets — Wenceslas BOUITY · Portfolio">
  <meta property="og:description" content="Projets full-stack, jeux, e-commerce et applications desktop réalisés par Wenceslas BOUITY.">
  <meta property="og:type"        content="website">
  <meta property="og:url"         content="<?php echo htmlspecialchars($currentUrl, ENT_QUOTES); ?>">
  <meta property="og:image"       content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>">
  <meta property="og:locale"      content="fr_FR">

  <meta name="twitter:card"        content="summary">
  <meta name="twitter:title"       content="Projets — Wenceslas BOUITY">
  <meta name="twitter:description" content="Projets web et logiciels de Wenceslas BOUITY avec GitHub et démos.">
  <meta name="twitter:image"       content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>">

  <link rel="icon"             type="image/png"     href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon"             type="image/svg+xml" href="/favicon.svg">
  <link rel="shortcut icon"    href="/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180"      href="/apple-touch-icon.png">
  <link rel="manifest"         href="/site.webmanifest">

  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Projets — Wenceslas BOUITY",
    "description": "Projets full-stack, jeux JavaScript, applications desktop et infrastructure réalisés par Wenceslas BOUITY.",
    "url": "<?php echo htmlspecialchars($currentUrl, ENT_QUOTES); ?>",
    "inLanguage": "fr-FR",
    "author": { "@type": "Person", "@id": "https://wenceslas-bouity.ovh/#person", "name": "Wenceslas BOUITY" }
  }
  </script>
</head>

<?php include('includes/script.php'); ?>
<body>
  <?php include('includes/header.php'); ?>

  <main>
    <div class="portfolio-section">

      <h1 style="text-align:center; color: var(--txt);">Mes Projets</h1>
      <p style="text-align:center; color: var(--txt-muted); margin-bottom: 48px; font-size: 16px;">
        Une sélection de réalisations techniques — web, logiciel et infrastructure.
      </p>

      <!-- ─── Client léger & lourd ─── -->
      <h2 style="color: var(--txt); font-size: 1.2rem; font-weight: 700; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid var(--accent); display: inline-block;">
        Client léger &amp; Client lourd
      </h2>

      <div class="portfolio-grid" style="margin-bottom: 48px;">

        <!-- Prestalia Web -->
        <div class="portfolio-card">
          <div style="height: 200px; overflow: hidden;">
            <img src="assets/images/Capture d'écran 2026-04-13 150315.png" alt="Prestalia — application web" loading="lazy">
          </div>
          <h3>Prestalia</h3>
          <p>Application web de mise en relation entre clients et prestataires de services, développée en équipe dans le cadre du BTS SIO.</p>
          <ul>
            <li><strong>Contexte :</strong> Projet E6 (Janvier – Mars 2026)</li>
            <li><strong>Objectif :</strong> Plateforme de gestion de comptes et réservations</li>
            <li>Création et gestion des comptes utilisateurs</li>
            <li>API REST · SQLite · Node.js · EJS · TypeScript</li>
          </ul>
          <a href="/assets/images/Prestalia_Web_Documentation.pdf" class="access-btn" target="_blank">📄 Documentation</a>
          <a href="https://github.com/Wens10/HACKATON1/tree/main/Prestalia" class="access-btn" target="_blank">GitHub →</a>
        </div>

        <!-- Prestalia Desktop -->
        <div class="portfolio-card">
          <div style="height: 200px; overflow: hidden;">
            <img src="assets/images/Capture d'écran 2026-04-13 144542.png" alt="Prestalia Desktop — application Windows" loading="lazy">
          </div>
          <h3>Prestalia Desktop</h3>
          <p>Application Windows d'administration de la plateforme Prestalia, développée en C# / WinUI 3.</p>
          <ul>
            <li><strong>Contexte :</strong> Projet E6 — complément desktop de Prestalia Web</li>
            <li>CRUD complet : utilisateurs, prestataires, réservations</li>
            <li>Technologies : C#, XAML, WinUI 3, SQLite, Node.js API</li>
            <li>Outils : Visual Studio, Git, GitHub, Figma, Trello</li>
          </ul>
          <a href="/assets/images/Prestalia_Desktop_Documentation.pdf" class="access-btn" target="_blank">📄 Documentation</a>
          <a href="https://github.com/Wens10/HACKATON1/tree/main/Prestalia_Desktop" class="access-btn" target="_blank">GitHub →</a>
        </div>

      </div>

      <!-- ─── Autres projets ─── -->
      <h2 style="color: var(--txt); font-size: 1.2rem; font-weight: 700; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid var(--accent); display: inline-block;">
        Autres Projets
      </h2>

      <div id="definitionBox"></div>

      <div class="portfolio-grid">

        <!-- Snake JS -->
        <div class="portfolio-card">
          <div style="height: 200px; overflow: hidden;">
            <img src="assets/images/SNAKE.png" alt="Jeu du Serpent en JavaScript" loading="lazy">
          </div>
          <h3>Jeu du Serpent</h3>
          <p>Application web développée avec <span class="skill" data-definition="JavaScript est un langage de programmation interprété, utilisé pour créer des pages web interactives.">JavaScript</span>.</p>
          <ul>
            <li>Mouvement fluide du serpent</li>
            <li>Collisions avec les murs et la nourriture</li>
            <li>Gestion des scores</li>
          </ul>
          <a href="https://snake-game-sigma-three.vercel.app/" class="access-btn" target="_blank">Voir le projet →</a>
          <a href="https://github.com/Wens10/Snake_Game" class="access-btn" target="_blank">GitHub →</a>
        </div>

        <!-- Snake C -->
        <div class="portfolio-card">
          <div style="height: 200px; overflow: hidden;">
            <img src="assets/images/c-snake.png" alt="Jeu du Serpent en C" loading="lazy">
          </div>
          <h3>Snake en C</h3>
          <p>Jeu du serpent développé en langage <span class="skill" data-definition="C est un langage de programmation bas niveau très utilisé pour les applications système.">C</span>, avec gestion clavier, déplacement et détection des collisions.</p>
          <ul>
            <li>Interface console avec mouvement fluide</li>
            <li>Collecte de nourriture, augmentation de la taille</li>
            <li>Détection des collisions murs et corps</li>
          </ul>
          <a href="https://github.com/Wens10/C-Snake" class="access-btn" target="_blank">GitHub →</a>
        </div>

        <!-- E-commerce -->
        <div class="portfolio-card">
          <div style="height: 200px; overflow: hidden;">
            <img src="assets/images/E-commerce.png" alt="Site E-commerce Parfums" loading="lazy">
          </div>
          <h3>Site E-commerce Parfums</h3>
          <p>Site e-commerce pour la vente de parfums, réalisé avec <span class="skill" data-definition="HTML est le langage de balisage pour structurer le contenu web.">HTML</span>, <span class="skill" data-definition="CSS décrit la présentation visuelle d'un document HTML.">CSS</span> et <span class="skill" data-definition="JavaScript est un langage de programmation pour créer des pages web interactives.">JavaScript</span>. Le panier utilise <span class="skill" data-definition="localStorage permet de stocker des données localement dans le navigateur.">localStorage</span>.</p>
          <ul>
            <li>Catalogue produits avec fiches attractives</li>
            <li>Panier dynamique et gestion des quantités</li>
            <li>Design responsive et navigation fluide</li>
          </ul>
          <a href="https://perfectsmell.vercel.app/" class="access-btn" target="_blank">Voir le projet →</a>
          <a href="https://github.com/Wens10/PerfectSMELL" class="access-btn" target="_blank">GitHub →</a>
        </div>

        <!-- Hackathon -->
        <div class="portfolio-card">
          <div style="height: 200px; overflow: hidden;">
            <img src="assets/images/CodeNova.png" alt="Projet Hackathon CodeNova" loading="lazy">
          </div>
          <h3>Projet Hackathon — Code Nova</h3>
          <p>Site web présentant l'équipe <strong>Code Nova</strong> et son service, réalisé en hackathon.</p>
          <ul>
            <li>Présentation interactive de l'équipe</li>
            <li>Section dédiée au service offert</li>
            <li>Technologies : HTML, CSS, JavaScript, Git</li>
          </ul>
          <a href="https://codenova-indol.vercel.app/" class="access-btn" target="_blank">Voir le projet →</a>
          <a href="https://github.com/Wens10/HACKATON1/tree/main/CodeNova" class="access-btn" target="_blank">GitHub →</a>
        </div>

        <!-- GLPI -->
        <div class="portfolio-card">
          <div style="height: 200px; overflow: hidden;">
            <img src="assets/images/glpi.png" alt="Serveur GLPI virtualisé" loading="lazy">
          </div>
          <h3>Serveur GLPI — Environnement virtualisé</h3>
          <p>Mise en place d'un serveur <span class="skill" data-definition="GLPI est un logiciel open-source de gestion des actifs informatiques et de helpdesk.">GLPI</span> dans un environnement <span class="skill" data-definition="VMware est un logiciel de virtualisation permettant de créer et gérer des machines virtuelles.">VMware</span> virtualisé.</p>
          <ul>
            <li>Création de la machine virtuelle</li>
            <li>Installation et configuration GLPI</li>
            <li>Gestion des actifs et tickets de support</li>
            <li>Technologies : VMware, GLPI, Apache, MySQL, Debian</li>
          </ul>
          <a href="assets/images/GLPI_Documentation_Projet.pdf" class="access-btn" target="_blank">📄 Documentation</a>
        </div>

      </div>
    </div>
  </main>

  <?php include('includes/footer.php'); ?>

  <script>
  document.querySelectorAll('.skill').forEach(skill => {
    skill.addEventListener('click', () => {
      const box = document.getElementById('definitionBox');
      box.textContent = skill.getAttribute('data-definition');
      box.style.display = 'block';
    });
  });
  </script>
</body>
</html>
