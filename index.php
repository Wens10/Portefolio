<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="4rI-M6EY-53N63JuNY3T18z2Izd-1GiD2YxCxZqBW-A" />
<title>Wenceslas - Portfolio</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Mr Wens" />
<link rel="manifest" href="/site.webmanifest" />
<?php
// Génération dynamique de l'URL canonique / base (fonctionne en local et prod)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$path = strtok($_SERVER['REQUEST_URI'], '?');
$canonical = $protocol . $host . $path;
$base = rtrim($protocol . $host, '/');
$ogImage = $base . '/assets/images/Image.jude.jpg';
$desc = "Wenceslas BOUITY — étudiant en BTS SIO (option SLAM) à EFREI Paris. Portfolio présentant projets, compétences, CV et moyens de contact.";
?>
<meta name="description" content="<?php echo htmlspecialchars($desc, ENT_QUOTES); ?>">
<meta name="author" content="Wenceslas BOUITY">
<meta name="robots" content="index,follow">
<meta name="keywords" content="Wenceslas BOUITY, portfolio, BTS SIO, SLAM, EFREI Paris, développeur web, projets, CV">
<link rel="canonical" href="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">
<link rel="alternate" hreflang="fr" href="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">

<!-- Open Graph / Social -->
<meta property="og:type" content="website">
<meta property="og:title" content="Wenceslas - Portfolio">
<meta property="og:description" content="<?php echo htmlspecialchars($desc, ENT_QUOTES); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">
<meta property="og:site_name" content="Wenceslas - Portfolio">
<meta property="og:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>">
<meta property="og:image:alt" content="Portrait de Wenceslas BOUITY">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Wenceslas - Portfolio">
<meta name="twitter:description" content="<?php echo htmlspecialchars($desc, ENT_QUOTES); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>">

<!-- Performance hints -->
<link rel="preload" as="image" href="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>">
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

<!-- Structured data (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Person",
      "name": "Wenceslas BOUITY",
      "url": "<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>",
      "image": "<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>",
      "jobTitle": "Étudiant en BTS SIO (SLAM)",
      "worksFor": {
        "@type": "CollegeOrUniversity",
        "name": "EFREI Paris"
      },
      "sameAs": [
        "https://www.linkedin.com/in/wenceslas-jude-bouity-905430331/",
        "https://www.instagram.com/mr_wenss/",
        "https://github.com/Wens10"
      ],
      "description": "<?php echo str_replace('"', '\"', $desc); ?>"
    },
    {
      "@type": "WebPage",
      "url": "<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>",
      "name": "Wenceslas - Portfolio",
      "description": "<?php echo str_replace('"', '\"', $desc); ?>"
    }
  ]
}
</script>
</head>
<?php include('includes/script.php'); ?>
<body>
  <?php include('includes/header.php'); ?>
  
  <main >
        <section class="hero-section" id="home">
          <div class="container">
            <div class="row align-items-center">
        
              <!-- TEXTE -->
              <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <h1 class="hero-title">
                  Wenceslas BOUITY <br>
                  <span class="highlight">Étudiant en BTS SIO</span>
                </h1>
        
                <p class="hero-description">
                  Étudiant en <strong>BTS SIO</strong> option <strong>SLAM</strong> à
                  <strong>EFREI Paris</strong>, je suis passionné par le développement web
                  et les technologies de l’information. Mon objectif est de devenir un
                  développeur polyvalent, capable de concevoir des applications
                  performantes et adaptées aux besoins des entreprises.
                </p>
        
                <ul class="hero-list">
                  <li>Mes projets réalisés en cours et en autonomie</li>
                  <li>Mes compétences techniques et fonctionnelles</li>
                  <li>Mon parcours académique et professionnel</li>
                </ul>
        
                <div class="hero-buttons d-grid gap-3 d-lg-flex justify-content-lg-start">
                  <a href="projets.php" class="btn btn-primary btn-sm">Projets</a>
                  <a href="#contact" class="btn btn-secondary btn-sm">Contact</a>
                </div>
                <br>
                <div class="social-icons">
                  <a href="https://www.linkedin.com/in/wenceslas-jude-bouity-905430331/" target="_blank">
                    <img src="assets/images/linkedin-svgrepo-com (1).svg" alt="LinkedIn" style="width: 48px; height: 48px; transition: transform 0.3s ease; align-items: center; justify-content: center; display: inline-block; margin-right: 10px;" class="social-icon">
                  </a>
                  <a href="https://www.instagram.com/mr_wenss/" target="_blank">
                    <img src="assets/images/instagram-circle.svg" alt="Instagram" style="width: 48px; height: 48px; transition: transform 0.3s ease; align-items: center; justify-content: center; display: inline-block; margin-right: 10px;" class="social-icon instagram">
                  </a>
                  <a href="https://github.com/Wens10" target="_blank">
                    <img src="assets/images/github (1).svg" alt="Github" style="width: 48px; height: 48px; transition: transform 0.3s ease; align-items: center; justify-content: center; display: inline-block; margin-right: 10px;" class="social-icon">
                  </a>
                </div>
              </div>
              <style> .social-icon { transition: transform 0.3s ease !important; } .social-icons a:hover .social-icon { transform: scale(1.2) translateY(-5px); } .social-icons a:active .social-icon { transform: scale(0.95); } </style>
              <!-- VIDÉO -->
            <div class="col-lg-6 col-md-12 text-center text-lg-end mt-5 mt-lg-0 order-1 order-lg-2">
              <div class="avatar-container">
            
                <!-- VIDÉO -->
                <video
                  id="avatarVideo"
                  class="avatar video"
                  src="assets/video/avatar.mp4"
                  muted
                  playsinline
                ></video>
            
                <!-- AVATAR STATIQUE -->
                <img
                  id="avatarImage"
                  class="avatar"
                  src="assets/images/avatar.png"
                  alt="Avatar"
                />
            
                <!-- PHOTO RÉELLE -->
                <img
                  id="realPhoto"
                  class="avatar"
                  src="assets/images/photo.jpg"
                  alt="Photo réelle"
                />
            
              </div>
              </div>
  
                <style>
                .avatar-container {
                 position: relative;
                 height: 720px;
                 margin: auto;
                 overflow: hidden;
               }
               
               /* BASE */
               .avatar {
                 position: absolute;
                 top: 50%;
                 left: 150px; /* desktop */
               
                 width: 350px;
                 max-width: 100%;
                 object-fit: contain;
               
                 background: transparent;
                 mix-blend-mode: lighten;
               
                 border-radius: 24px;
                 box-shadow: 0 40px 80px rgba(0, 0, 0, 0.5);
               
                 opacity: 0;
                 transform: translateX(40px) translateY(-50%);
               
                 transition:
                   transform 1.4s cubic-bezier(0.4, 0, 0.2, 1),
                   opacity 1.4s ease;
               
                 will-change: transform, opacity;
               }
               
               /* VISIBLE */
               .avatar.visible {
                 opacity: 1;
                 transform: translateX(0) translateY(-50%);
               }
               
               /* SORTIE */
               .avatar.exit {
                 opacity: 0;
                 transform: translateX(160px) translateY(-50%);
               }
               
               /* ---------------- MOBILE ---------------- */
               @media (max-width: 768px) {
                 .avatar {
                   left: 50%;
                   width: 280px;
                   max-width: 90%;
               
                   transform: translateX(-50%) translateY(-50%);
                 }
               
                 .avatar.visible {
                   transform: translateX(-50%) translateY(-50%);
                 }
               
                 .avatar.exit {
                   transform: translateX(-50%) translateY(40px);
                 }
               }
               
                </style>
                <script>
                  const video = document.getElementById("avatarVideo");
                  const avatarImg = document.getElementById("avatarImage");
                  const photo = document.getElementById("realPhoto");
                
                  function show(el) {
                    el.classList.remove("exit");
                    el.classList.add("visible");
                  }
                
                  function hide(el) {
                    el.classList.add("exit");
                    setTimeout(() => {
                      el.classList.remove("visible");
                    }, 1400);
                  }
                
                  function startLoop() {
                    // ---- VIDÉO (INTRO) ----
                    video.pause();
                    video.currentTime = 0;
                    show(video);
                    video.play();
                
                    video.onended = () => {
                      hide(video);
                
                      // ---- AVATAR STATIQUE ----
                      setTimeout(() => {
                        show(avatarImg);
                
                        setTimeout(() => {
                          hide(avatarImg);
                
                          // ---- PHOTO RÉELLE ----
                          setTimeout(() => {
                            show(photo);
                
                            setTimeout(() => {
                              hide(photo);
                
                              // 🔁 RESTART
                              setTimeout(startLoop, 1500);
                            }, 10000);
                
                          }, 1500);
                        }, 8000);
                
                      }, 1500);
                    };
                  }
                
                  startLoop();
                </script>



            </div>
          </div>
        </section>
        
        <section  class="int">
            <h2 style="text-align: center; color: #3C35FC;">Curriculum Vitae</h2>
            <br>
            <div class="row align-items-center">
            <div class="col-12 col-lg-5" style="margin: auto; text-align: center; justify-content: center; display: flex; flex-direction: column;">
              <!-- Viewer pour grands écrans -->
              <embed src="assets/images/Mon%20CV.pdf" type="application/pdf" width="100%" height="580px" class="d-none d-lg-block" style="border: none;" />
              <!-- Boutons Voir / Télécharger (toujours visibles) -->
              <div class="d-flex gap-2 justify-content-center justify-content-lg-start mt-3">
                <a href="assets/images/Mon%20CV.pdf" target="_blank" rel="noopener" class="btn btn-outline-primary" aria-label="Voir mon CV">Voir</a>
                <a href="assets/images/Mon%20CV.pdf" download class="btn btn-primary" aria-label="Télécharger mon CV">🢃 Mon CV</a>
              </div>
            </div>
          
        </section>
    <section class="parcours" id="about">

      <div class="d-flex justify-content-center w-100">
        <?php include('includes/about.php'); ?>
      </div>
    </section>
    <section>
      <div>
        <?php include('includes/compétences.php'); ?>
      </div>
    </section>
    <section>
      <div>
        <?php include('includes/certifications.php'); ?>
      </div>
    </section>
    <section>
      <div>
        <?php include('includes/stage.php'); ?>
      </div>
    </section>
    <br><br><br>
    <section id="contact">
      <h2 style="text-align: center; color: #3C35FC;">Contact</h2>
      <div class="d-flex justify-content-center w-100">
      <?php include('includes/contact.php'); ?>
      </div>
    </section>
  </main>
  
  <?php include('includes/footer.php'); ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
/*
  Script robuste pour activer le lien de nav de la section la plus visible.
  - Prend en compte header fixe (détecte sa hauteur)
  - Fonctionne au chargement, scroll, resize et clic sur les liens
  - Utilise requestAnimationFrame pour ne pas spammer le scroll
*/

document.addEventListener('DOMContentLoaded', () => {
  const sections = Array.from(document.querySelectorAll('section[id]'));
  const navLinks = Array.from(document.querySelectorAll('nav a[href^="#"]'));
  const header = document.querySelector('header') || document.querySelector('.navbar') || null;

  function getHeaderHeight() {
    return header ? header.offsetHeight : 0;
  }

  function clearActive() {
    navLinks.forEach(a => a.classList.remove('active'));
  }

  function setActiveById(id) {
    if (!id) return;
    clearActive();
    const link = document.querySelector(`nav a[href="#${id}"]`);
    if (link) link.classList.add('active');
  }

  // calcule la hauteur visible d'une section en tenant compte du header fixe
  function visibleHeightOf(section) {
    const rect = section.getBoundingClientRect();
    const topLimit = getHeaderHeight(); // le header masque le haut
    const visibleTop = Math.max(rect.top, topLimit);
    const visibleBottom = Math.min(rect.bottom, window.innerHeight);
    const visible = Math.max(0, visibleBottom - visibleTop);
    return visible;
  }

  let ticking = false;
  function onScrollOrResize() {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        updateActiveSection();
        ticking = false;
      });
      ticking = true;
    }
  }

  function updateActiveSection() {
    // Si on est tout en haut, forcer "home" (ou la première section)
    if (window.scrollY <= getHeaderHeight() + 5) {
      const first = sections[0];
      if (first) setActiveById(first.id);
      return;
    }

    // Cherche la section ayant la plus grande surface visible
    let bestSection = null;
    let bestVisible = 0;

    for (const sec of sections) {
      const vis = visibleHeightOf(sec);
      if (vis > bestVisible) {
        bestVisible = vis;
        bestSection = sec;
      }
    }

    // Si aucune section n'est visible (rare), on garde la précédente
    if (bestSection && bestVisible > 0) {
      setActiveById(bestSection.id);
    }
  }

  // Gérer clicks sur nav pour scroll smooth et activation immédiate
  navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      // Optionnel : empêcher le saut brutal
      e.preventDefault();
      const targetId = link.getAttribute('href').slice(1);
      const target = document.getElementById(targetId);
      if (!target) return;

      // calcule la position en tenant compte du header
      const headerH = getHeaderHeight();
      const top = target.getBoundingClientRect().top + window.scrollY - headerH - 10; // -10 pour marge
      window.scrollTo({
        top,
        behavior: 'smooth'
      });

      // activation immédiate (visuel) — l'update sera confirmée par le scroll handler
      setActiveById(targetId);
    });
  });

  // Events
  window.addEventListener('scroll', onScrollOrResize, { passive: true });
  window.addEventListener('resize', onScrollOrResize);

  // Initialisation au chargement
  updateActiveSection();
});

document.addEventListener('DOMContentLoaded', () => {
  const toggler = document.querySelector('.navbar-toggler');
  const menu = document.querySelector('#navbarNav'); // ton menu à ouvrir/fermer
  const links = document.querySelectorAll('.navbar-nav .nav-link');

  // Toggle menu au clic sur le bouton
  toggler.addEventListener('click', () => {
    menu.classList.toggle('show'); // ouvre/ferme le menu
  });

  // Fermer le menu quand on clique sur un lien
  links.forEach(link => {
    link.addEventListener('click', () => {
      if (menu.classList.contains('show')) {
        menu.classList.remove('show');
      }
    });
  });

  // Fermer le menu quand la souris quitte la zone du menu
  menu.addEventListener('mouseleave', () => {
    if (menu.classList.contains('show')) {
      menu.classList.remove('show');
    }
  });

  // Optionnel : fermer si on clique en dehors du menu
  document.addEventListener('click', (e) => {
    if (!menu.contains(e.target) && !toggler.contains(e.target)) {
      menu.classList.remove('show');
    }
  });
});


</script>

</body>
</html>