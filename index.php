<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wenceslas - Portfolio</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<?php include('includes/script.php'); ?>
<body>
  <?php include('includes/header.php'); ?>
  
  <main >
    <section class="hero-section" id="home">
      
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12 order-2 order-lg-1">
            <h1 class="hero-title">Wenceslas BOUITY <br><span class="highlight">Etudiant en BTS SIO</span></h1>
            <p class="hero-description">
<p>Étudiant en <strong>BTS SIO</strong> option <strong>SLAM</strong> à <strong>EFREI Paris</strong>, je suis passionné par le développement web et les technologies de l’information. Mon objectif est de devenir un développeur polyvalent, capable de concevoir des applications performantes et adaptées aux besoins des entreprises.

Dans ce portfolio, vous trouverez :

<ul> <li>Mes projets réalisés en cours et en autonomie</li> <li>Mes compétences techniques et fonctionnelles</li> <li>Mon parcours académique et professionnel</li> </ul> </p>
            <p></p>
            <div class="hero-buttons d-grid gap-3 d-lg-flex justify-content-lg-start">
              <a href="#Projet" class="btn btn-primary btn-sm">Projets</a>
              <a href="#contact" class="btn btn-secondary btn-sm">Contact</a>
            </div>


          </div>

          <div class=" col-lg-6 col-md-12 text-center text-lg-end mt-5 mt-lg-0 order-1 order-lg-2">
            <img src="assets/images/Image.jude.jpg" alt="Wenceslas" class="img-fluid hero-image">
          </div>
        </div>
       
      </div>
    </section>
    <br><br>
    <section class="parcours" id="about">
      <?php include('includes/about.php'); ?>
    </section>
    <br><br>
    <section id="contact">
      <?php include('includes/contact.php'); ?>
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