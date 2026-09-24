<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="4rI-M6EY-53N63JuNY3T18z2Izd-1GiD2YxCxZqBW-A" />

<?php
$protocol  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
$host      = $_SERVER['HTTP_HOST'] ?? 'localhost';
$path      = strtok($_SERVER['REQUEST_URI'], '?');
$canonical = $protocol . $host . $path;
$base      = rtrim($protocol . $host, '/');
$ogImage   = $base . '/assets/images/Image.jude.jpg';
$name      = "Wenceslas BOUITY";
$jobTitle  = "Etudiant en DATA/IA";
$desc      = "Wenceslas BOUITY — Développeur Web & Logiciel passionné, basé à Paris. Portfolio présentant projets full-stack, compétences JavaScript/PHP/Python, veille technologique IA et coordonnées. Disponible pour alternance.";
$keywords  = "Wenceslas BOUITY, portfolio développeur, développeur web Paris, JavaScript, PHP, Python, SQL, Node.js, full-stack, alternance 2026, EFREI Paris, veille technologique IA, projets web";
?>

<title><?php echo htmlspecialchars($name); ?> — Développeur Web &amp; Logiciel · Portfolio</title>
<meta name="description"   content="<?php echo htmlspecialchars($desc, ENT_QUOTES); ?>">
<meta name="keywords"      content="<?php echo htmlspecialchars($keywords, ENT_QUOTES); ?>">
<meta name="author"        content="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>">
<meta name="robots"        content="index, follow, max-image-preview:large">
<meta name="language"      content="fr">
<meta name="geo.region"    content="FR-IDF">
<meta name="geo.placename" content="Paris, France">
<meta name="theme-color"   content="#2564CF">

<link rel="canonical" href="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">
<link rel="alternate" href="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>" hreflang="fr">

<!-- Open Graph -->
<meta property="og:type"         content="website">
<meta property="og:title"        content="<?php echo htmlspecialchars($name . ' — Développeur Web & Logiciel · Portfolio', ENT_QUOTES); ?>">
<meta property="og:description"  content="<?php echo htmlspecialchars($desc, ENT_QUOTES); ?>">
<meta property="og:url"          content="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">
<meta property="og:site_name"    content="<?php echo htmlspecialchars($name, ENT_QUOTES); ?> · Portfolio">
<meta property="og:image"        content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>">
<meta property="og:image:alt"    content="Portrait de <?php echo htmlspecialchars($name, ENT_QUOTES); ?>">
<meta property="og:image:width"  content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale"       content="fr_FR">

<!-- Twitter Card -->
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:title"       content="<?php echo htmlspecialchars($name . ' — Développeur Web & Logiciel', ENT_QUOTES); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($desc, ENT_QUOTES); ?>">
<meta name="twitter:image"       content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>">

<!-- Favicons -->
<link rel="icon"             type="image/png"     href="/favicon-96x96.png" sizes="96x96">
<link rel="icon"             type="image/svg+xml" href="/favicon.svg">
<link rel="shortcut icon"    href="/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180"      href="/apple-touch-icon.png">
<meta name="apple-mobile-web-app-title" content="WB Portfolio">
<link rel="manifest" href="/site.webmanifest">

<!-- Performance hints -->
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="image" href="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>">

<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

<!-- JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Person",
      "name": "<?php echo $name; ?>",
      "url": "<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>",
      "image": "<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>",
      "jobTitle": "Développeur Web & Logiciel",
      "description": "<?php echo addslashes($desc); ?>",
      "knowsAbout": ["JavaScript","PHP","Python","Node.js","SQL","HTML","CSS","Git","Bootstrap","React","Intelligence Artificielle"],
      "alumniOf": {
        "@type": "CollegeOrUniversity",
        "name": "EFREI Paris",
        "address": {"@type":"PostalAddress","addressLocality":"Paris","addressCountry":"FR"}
      },
      "address": {"@type":"PostalAddress","addressLocality":"Paris","addressCountry":"FR"},
      "sameAs": [
        "https://www.linkedin.com/in/wenceslas-jude-bouity-905430331/",
        "https://github.com/Wens10",
        "https://www.instagram.com/mr_wenss/"
      ],
      "email": "wenceslasbouity92@gmail.com"
    },
    {
      "@type": "WebSite",
      "url": "<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>",
      "name": "<?php echo $name; ?> — Portfolio",
      "description": "<?php echo addslashes($desc); ?>",
      "inLanguage": "fr-FR",
      "author": {"@type":"Person","name":"<?php echo $name; ?>"}
    }
  ]
}
</script>
</head>

<?php include('includes/script.php'); ?>
<body>
  <?php include('includes/header.php'); ?>

  <main>

    <!-- ─── HERO ─── -->
    <section class="hero-section" id="home">
      <div class="container">
        <div class="row align-items-center g-5">

          <!-- Texte -->
          <div class="col-lg-6 col-md-12 order-2 order-lg-1">
            <span class="hero-eyebrow">Bonjour, je suis</span>
            <h1 class="hero-title">
              Wenceslas BOUITY
              <span class="highlight">Etudiant en &amp; DATA/IA</span>
            </h1>

            <p class="hero-description">
              Passionné par le développement depuis l'enfance, je conçois des applications web et logicielles performantes. Actuellement à EFREI Paris, je cherche à rejoindre des équipes ambitieuses pour créer des produits qui ont un impact réel.
            </p>

            <ul class="hero-list">
              <li>Projets full-stack réalisés en cours et en autonomie</li>
              <li>Compétences en JavaScript, PHP, Python &amp; SQL</li>
              <li>Veille active sur l'IA &amp; les nouvelles technologies</li>
            </ul>

            <div class="hero-buttons">
              <a href="projets.php"  class="btn btn-primary btn-sm">Voir mes projets</a>
              <a href="#contact"     class="btn btn-secondary btn-sm">Me contacter</a>
            </div>

            <div class="social-icons">
              <a href="https://www.linkedin.com/in/wenceslas-jude-bouity-905430331/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                <img src="assets/images/linkedin-svgrepo-com (1).svg" alt="LinkedIn" class="social-icon">
              </a>
              <a href="https://github.com/Wens10" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                <img src="assets/images/github (1).svg" alt="GitHub" class="social-icon">
              </a>
              <a href="https://www.instagram.com/mr_wenss/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <img src="assets/images/instagram-circle.svg" alt="Instagram" class="social-icon instagram">
              </a>
            </div>
          </div>

          <!-- Photo -->
          <div class="col-lg-6 col-md-12 text-center order-1 order-lg-2">
            <div class="avatar-container">
              <img id="realPhoto"
                   src="assets/images/photo.jpg"
                   alt="Portrait de Wenceslas BOUITY, développeur web"
                   loading="eager">
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ─── CV ─── -->
    <section class="int" aria-label="Curriculum Vitae">
      <div class="container">
        <h2 style="text-align: center; color: var(--accent);">Curriculum Vitae</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-7 text-center">
            <embed src="assets/images/Mon%20CV.pdf" type="application/pdf" width="100%" height="600px"
                   class="d-none d-lg-block"
                   style="border: none; border-radius: 12px; box-shadow: 0 8px 40px rgba(0,0,0,0.1);"
                   title="CV de Wenceslas BOUITY">
            <div class="d-flex gap-3 justify-content-center mt-4">
              <a href="assets/images/Mon%20CV.pdf" target="_blank" rel="noopener" class="btn btn-outline-primary px-4">Voir le CV</a>
              <a href="assets/images/Mon%20CV.pdf" download class="btn btn-primary px-4">&#8595; Télécharger</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ─── PARCOURS ─── -->
    <section class="parcours" id="about" aria-label="Parcours académique et professionnel">
      <div class="container">
        <h2 style="text-align: center; color: var(--accent);">Mon Parcours</h2>
      </div>
      <div class="d-flex justify-content-center w-100">
        <?php include('includes/about.php'); ?>
      </div>
    </section>

    <!-- ─── COMPÉTENCES ─── -->
    <section style="background: var(--bg-soft);" aria-label="Compétences techniques">
      <?php include('includes/compétences.php'); ?>
    </section>

    <!-- ─── CERTIFICATIONS ─── -->
    <section aria-label="Certifications">
      <?php include('includes/certifications.php'); ?>
    </section>

    <!-- ─── STAGE ─── -->
    <section style="background: var(--bg-soft);" aria-label="Expériences professionnelles">
      <?php include('includes/stage.php'); ?>
    </section>

    <!-- ─── CONTACT ─── -->
    <section id="contact" aria-label="Contact" style="padding: 80px 0 40px;">
      <div class="container">
        <h2 style="text-align: center; color: var(--accent);">Contactez-moi</h2>
      </div>
      <div class="d-flex justify-content-center w-100">
        <?php include('includes/contact.php'); ?>
      </div>
    </section>

  </main>

  <?php include('includes/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', () => {
    const sections = Array.from(document.querySelectorAll('section[id]'));
    const navLinks  = Array.from(document.querySelectorAll('nav a[href^="#"], nav a[href^="index.php#"]'));
    const header    = document.querySelector('.main-header');
    const headerH   = () => header ? header.offsetHeight : 0;

    function visibleH(sec) {
      const r = sec.getBoundingClientRect();
      return Math.max(0, Math.min(r.bottom, window.innerHeight) - Math.max(r.top, headerH()));
    }

    function setActive(id) {
      if (!id) return;
      navLinks.forEach(a => a.classList.remove('active'));
      const link = navLinks.find(a => a.getAttribute('href').endsWith('#' + id));
      if (link) link.classList.add('active');
    }

    let ticking = false;
    window.addEventListener('scroll', () => {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(() => {
        if (window.scrollY <= headerH() + 5) { setActive(sections[0]?.id); ticking = false; return; }
        let best = null, bestV = 0;
        sections.forEach(s => { const v = visibleH(s); if (v > bestV) { bestV = v; best = s; } });
        if (best) setActive(best.id);
        ticking = false;
      });
    }, { passive: true });
  });
  </script>
</body>
</html>
