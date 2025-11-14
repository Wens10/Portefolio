<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets - Portefolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/projets.css">
    <link rel="shortcut icon" href="assets/images/alien-svgrepo-com.svg" type="image/x-icon">
    <?php
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $baseUrl = $scheme . '://' . $_SERVER['HTTP_HOST'];
    $currentUrl = $baseUrl . $_SERVER['REQUEST_URI'];
    $ogImage = $baseUrl . '/Portefolio/assets/images/alien-svgrepo-com.svg';
    ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($currentUrl, ENT_QUOTES); ?>">
    <link rel="alternate" href="<?php echo htmlspecialchars($currentUrl, ENT_QUOTES); ?>" hreflang="fr" />

    <meta name="description" content="Découvrez mes projets : jeux, sites web et réalisations E‑Learning. Portfolio présentant technologies utilisées, captures d'écran et liens GitHub.">
    <meta name="keywords" content="portfolio, projets, site web, jeux en ligne, JavaScript, HTML, CSS, WordPress, GitHub">
    <meta name="author" content="Auteur du portfolio">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#3C35FC">

    <!-- Open Graph -->
    <meta property="og:title" content="Projets — Portefolio">
    <meta property="og:description" content="Portfolio présentant mes projets : jeux, sites web et réalisations E‑Learning avec captures et liens GitHub.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($currentUrl, ENT_QUOTES); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Portefolio">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Projets — Portefolio">
    <meta name="twitter:description" content="Portfolio présentant mes projets : jeux, sites web et réalisations E‑Learning.">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Projets — Portefolio",
        "description": "Présentation de projets web et jeux réalisés avec HTML, CSS, JavaScript, WordPress et Node.js. Liens GitHub et démonstrations en ligne.",
        "url": "<?php echo htmlspecialchars($currentUrl, ENT_QUOTES); ?>",
        "inLanguage": "fr-FR",
        "author": {
            "@type": "Person",
            "name": "Auteur du portfolio"
        },
        "mainEntity": {
            "@type": "ItemList",
            "name": "Projets",
            "numberOfItems": 4
        }
    }
    </script>
</head>
<?php include('includes/script.php'); ?>
<body>
    <?php include('includes/header.php'); ?>
<style>

:root {
  /* Couleurs principales */
  --color-primary: #3C35FC;      /* Bleu principal */
  --color-secondary: #2e2d2b;    /* Gris foncé / noir chaud */
  --color-secondary2: #0b0b0b;    /* Gris foncé / noir chaud */
  --color-text: #ffffff;           /* Blanc */

  /* Variantes */
  --color-primary-light: #3c35fc; /* Variante plus claire du bleu */
  --color-secondary-light: #3c3b38; /* Variante plus claire du gris */
  --color-text-muted: #cccccc;    /* Texte secondaire */

  /* Arrière-plans */
  --background-dark: var(--color-secondary);
  --background-light: #f5f5f5;

  /* Bordures et effets */
  --border-color: rgba(255, 255, 255, 0.1);
  --shadow-color: rgba(0, 0, 0, 0.2);
}

    </style>
</head>

<body>
    <div class="hero">
        <main>
            <section class="portfolio-section" style="padding: 32px 0;">
                <h1 style="text-align:center; margin-bottom: 36px; color: #3C35FC;">Mes Projets</h1>
                <div id="definitionBox">
                </div> <br>
                <div class="portfolio-grid" style="display: flex; flex-wrap: wrap; gap: 32px; justify-content: center;">
                    <!-- Projet 1 -->
                    <div class="portfolio-card">
                        <div style="height: 180px; overflow: hidden;">
                            <img src="assets/images/SNAKE.png" alt="Jeu du Serpent"
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div style="padding: 20px; flex: 1;">
                            <h3 style="margin-top:0;">Jeu du Serpent</h3>
                            <p style="color:#ccc;">
                                Application Web développée avec <span class="skill"
                                    data-definition="javascript est un langage de programmation interprété, principalement utilisé pour créer des pages web interactives.">JavaScript</span>
                            </p>
                            <ul style="color:#bbb; margin-bottom: 16px;">
                                <li>Mouvement fluide du serpent</li>
                                <li>Collisions avec les murs et la nourriture</li>
                                <li>Gestion des scores</li>
                            </ul><br>
                            <a href="#" class="access-btn" target="_blank">Accéder au projet</a><br><br>
                            <a href="#" class="access-btn">Liens GitHub</a>
                        </div>
                    </div>
                    <!-- Projet 2 -->
                    <div class="portfolio-card">
                        <div style="height: 180px; overflow: hidden;">
                            <img src="assets/images/webix.png" alt="CréaWebix"
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div style="padding: 20px; flex: 1;">
                            <h3 style="margin-top:0;">CréaWebix</h3>
                            <p style="color:#ccc;">
                                Site Web que nous avons développé avec Nathan MARQUES-DUVAL en <span class="skill"
                                    data-definition="html est un langage de balisage utilisé pour structurer le contenu des pages web.">HTML</span>
                                <span class="skill"
                                    data-definition="css est un langage de style utilisé pour décrire la présentation des pages web.">CSS</span>
                                <span class="skill"
                                    data-definition="javascript est un langage de programmation interprété, principalement utilisé pour créer des pages web interactives.">JavaScript</span>
                                et <span class="skill"
                                    data-definition="Node.js est un environnement d'exécution pour JavaScript, permettant de créer des applications côté serveur.">Node.js</span>
                                afin de présenter notre entreprise de création de site web.
                            </p>
                            <ul style="color:#bbb; margin-bottom: 16px;">
                                <li>Présentation de l'entreprise</li>
                                <li>Présentation des services</li>
                            </ul>
                            <a href="#" class="access-btn" target="_blank">Accéder au projet</a><br><br>
                            <a href="https://github.com/Wens10/CreaWebix" class="access-btn" target="_blank">Liens GitHub</a>
                        </div>
                    </div>
                    <!-- Projet 3 -->
                    <div class="portfolio-card">
                        <div style="height: 180px; overflow: hidden;">
                            <img src="assets/images/Capture d'écran 2025-10-03 161119.png" alt="E-Learning" 
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div style="padding: 20px; flex: 1;">
                            <h3 style="margin-top:0;">Site E-Learning</h3>
                            <p style="color:#ccc;">
                                Site Web réalisé avec <span class="skill"
                                    data-definition="wordpress est un système de gestion de contenu open source, utilisé pour créer des sites web et des blogs.">WordPress</span>
                                et personnalisé en <span class="skill"
                                    data-definition="CSS est un langage de style utilisé pour décrire la présentation d'un document écrit en HTML ou XML.">CSS</span>
                                sur certaines pages.<br>
                                NB : Le site à été réalisé en équipes lors d'un projet de cours.
                            </p>
                            <ul style="color:#bbb; margin-bottom: 16px;">
                                <li>présentation de l'équipe</li>
                                <li>présentation de la formation</li>
                            </ul>
                            <a href="https://projet-wp.nathanmd.ovh/" class="access-btn" target="_blank">Accéder au Site</a><br><br>
                            <a href="#" class="access-btn">Liens GitHub</a>
                        </div>
                    </div>
                    <!-- Projet 4 -->
                    <div class="portfolio-card">
                        <div style="height: 180px; overflow: hidden;">
                            <img src="assets/images/quiz champions.png" alt="Monuments Quiz Champions"
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div style="padding: 20px; flex: 1;">
                            <h3 style="margin-top:0;">Monuments Quiz Champions</h3>
                            <p style="color:#ccc;">
                                Monuments Quiz est un mini jeu Web réalisé avec 
                                <span class="skill"data-definition="html est un langage de balisage utilisé pour structurer le contenu des pages web.">HTML</span>
                                <span class="skill"data-definition="css est un langage de style utilisé pour décrire la présentation des pages web.">CSS</span> et    
                                <span class="skill"data-definition="javascript est un langage de programmation interprété, principalement utilisé pour créer des pages web interactives.">javascript</span>
                                . Le but du jeu est de répondre à un quiz sur les quelques monuments célèbres du monde entier.                       
                            </p>
                            <ul style="color:#bbb; margin-bottom: 16px;">
                                <li>Affichage dynamique des questions</li>
                            </ul><br>
                            <a href="https://monuments-quiz-champions.vercel.app/" class="access-btn" target="_blank">Accéder au jeu</a><br><br>
                            <a href="https://github.com/Wens10/Monuments_Quiz_Champions" class="access-btn" target="_blank">Liens GitHub</a>
                        </div>
                    </div>
                </div>

            </section>
        </main>
        <script>
            document.querySelectorAll('.skill').forEach(skill => {
                skill.addEventListener('click', () => {
                    const definition = skill.getAttribute('data-definition');
                    const definitionBox = document.getElementById('definitionBox');
                    definitionBox.textContent = definition;
                    definitionBox.style.display = 'block';
                });
            });
            document.querySelectorAll('.skills').forEach(skills => {
                skills.addEventListener('click', () => {
                    const definition = skills.getAttribute('data-definition');
                    const definitionBo = document.getElementById('definitionBo');
                    definitionBo.textContent = definition;
                    definitionBo.style.display = 'block';
                });
            });
        </script>
        <style>
            .skill,
            .skills {
                cursor: pointer;
                padding: 10px;
                transition: background-color 0.2s;
            }

            .skill:hover,
            .skills:hover {
                background-color: #0c4b825c;
            }

            #definitionBox {
                background-color: #0c4b825e;
                backdrop-filter: blur(5px);
                border-left: 4px solid var(--color-primary);
                font-style: italic;
            }

            #definitionBo {
                background-color: var(--color-primary-light);
                backdrop-filter: blur(5px);
                border-left: 4px solid var(--color-primary);
                font-style: italic;
            }
            #definitionBox {
                display: none;
                margin-top: 24px;
                padding: 12px;
                background: #0c4b825c;
                border-left: 4px solid var(--color-primary-light);
                font-style: italic;
            }
        </style>
    <?php include('includes/footer.php'); ?>
</body>
</html>