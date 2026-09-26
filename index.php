<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="4rI-M6EY-53N63JuNY3T18z2Izd-1GiD2YxCxZqBW-A" />

<?php
/* URL canonique fixe : évite que /, /index.php ou /?x=… soient vus comme des doublons */
$base      = 'https://wenceslas-bouity.ovh';
$canonical = $base . '/';
$ogImage   = $base . '/assets/images/Image.jude.jpg';
$name      = "Wenceslas BOUITY";
$title     = "Wenceslas BOUITY — Alternance Développeur IA générative (LLM) · Paris";
$desc      = "Wenceslas BOUITY, étudiant en Bachelor IA à l'ECE Paris, cherche une alternance 2026-2027 en IA générative (LLM, agents IA). Développeur full-stack Python/JS.";
$keywords  = "Wenceslas BOUITY, alternance IA, alternance développeur IA générative, alternance LLM Paris, Bachelor IA ECE Paris, développeur full-stack Python, agents IA, portfolio étudiant IA";
?>

<title><?php echo htmlspecialchars($title); ?></title>
<meta name="description"   content="<?php echo htmlspecialchars($desc, ENT_QUOTES); ?>">
<meta name="keywords"      content="<?php echo htmlspecialchars($keywords, ENT_QUOTES); ?>">
<meta name="author"        content="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>">
<meta name="robots"        content="index, follow, max-image-preview:large">
<meta name="geo.region"    content="FR-IDF">
<meta name="geo.placename" content="Paris, France">
<meta name="theme-color"   content="#2564CF">

<link rel="canonical" href="<?php echo $canonical; ?>">

<!-- Open Graph (LinkedIn, Facebook…) -->
<meta property="og:type"         content="profile">
<meta property="og:title"        content="<?php echo htmlspecialchars($title, ENT_QUOTES); ?>">
<meta property="og:description"  content="<?php echo htmlspecialchars($desc, ENT_QUOTES); ?>">
<meta property="og:url"          content="<?php echo $canonical; ?>">
<meta property="og:site_name"    content="Wenceslas BOUITY · Portfolio">
<meta property="og:image"        content="<?php echo $ogImage; ?>">
<meta property="og:image:alt"    content="Portrait de Wenceslas BOUITY">
<meta property="og:image:width"  content="411">
<meta property="og:image:height" content="515">
<meta property="og:locale"       content="fr_FR">
<meta property="profile:first_name" content="Wenceslas">
<meta property="profile:last_name"  content="BOUITY">

<!-- Twitter / X -->
<meta name="twitter:card"        content="summary">
<meta name="twitter:title"       content="<?php echo htmlspecialchars($title, ENT_QUOTES); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($desc, ENT_QUOTES); ?>">
<meta name="twitter:image"       content="<?php echo $ogImage; ?>">

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
<link rel="preload" as="image" href="assets/images/photo.jpg" fetchpriority="high">

<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

<!-- JSON-LD : page de profil (format reconnu par Google pour les profils de personnes) -->
<?php
$jsonLd = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'      => 'ProfilePage',
            '@id'        => $canonical . '#profile',
            'url'        => $canonical,
            'name'       => $title,
            'inLanguage' => 'fr-FR',
            'dateModified' => date('c', filemtime(__FILE__)),
            'mainEntity' => ['@id' => $canonical . '#person'],
            'isPartOf'   => ['@id' => $canonical . '#website'],
        ],
        [
            '@type'       => 'Person',
            '@id'         => $canonical . '#person',
            'name'        => $name,
            'givenName'   => 'Wenceslas',
            'familyName'  => 'BOUITY',
            'url'         => $canonical,
            'image'       => $ogImage,
            'jobTitle'    => 'Étudiant en Bachelor Intelligence Artificielle — alternance Développeur IA générative',
            'description' => $desc,
            'email'       => 'mailto:wenceslasbouity92@gmail.com',
            'address'     => ['@type' => 'PostalAddress', 'addressLocality' => 'Paris', 'addressRegion' => 'Île-de-France', 'addressCountry' => 'FR'],
            'affiliation' => ['@type' => 'CollegeOrUniversity', 'name' => 'ECE Paris', 'url' => 'https://www.ece.fr'],
            'alumniOf'    => [
                ['@type' => 'CollegeOrUniversity', 'name' => 'EFREI Paris', 'url' => 'https://www.efrei.fr'],
            ],
            'hasCredential' => [
                ['@type' => 'EducationalOccupationalCredential', 'name' => 'BTS SIO option SLAM', 'credentialCategory' => 'Diplôme'],
            ],
            'knowsAbout'  => ['Intelligence artificielle', 'IA générative', 'LLM', 'Agents IA', 'Prompt engineering', 'Machine Learning', 'Python', 'JavaScript', 'TypeScript', 'Node.js', 'PHP', 'SQL', 'API REST', 'C#', 'Docker'],
            'knowsLanguage' => ['fr', 'en'],
            'sameAs'      => [
                'https://www.linkedin.com/in/wenceslas-jude-bouity-905430331/',
                'https://github.com/Wens10',
                'https://www.instagram.com/mr_wenss/',
            ],
        ],
        [
            '@type'      => 'WebSite',
            '@id'        => $canonical . '#website',
            'url'        => $canonical,
            'name'       => 'Wenceslas BOUITY · Portfolio',
            'inLanguage' => 'fr-FR',
            'publisher'  => ['@id' => $canonical . '#person'],
        ],
    ],
];
?>
<script type="application/ld+json"><?php echo json_encode($jsonLd, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
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
              <span class="highlight">Alternance Développeur IA générative</span>
            </h1>

            <p class="hero-description">
              Étudiant en <strong>Bachelor Intelligence Artificielle à l'ECE Paris</strong> après un BTS SIO à l'EFREI, je recherche une <strong>alternance 2026-2027</strong> pour concevoir des applications d'IA générative : assistants, agents IA et automatisation de processus métier.
            </p>

            <ul class="hero-list">
              <li>Intégration de LLM dans des outils concrets (ex. l'assistant IA de ce site)</li>
              <li>Développeur full-stack : Python, JavaScript/TypeScript, API REST, SQL</li>
              <li>Rythme 3 semaines entreprise / 2 semaines école — mobile partout en France</li>
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
                   alt="Portrait de Wenceslas BOUITY, étudiant en Bachelor IA et développeur IA générative"
                   width="1095" height="1600"
                   loading="eager" fetchpriority="high">
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

    <!-- ─── STAGE ─── -->
    <section aria-label="Expériences professionnelles">
      <?php include('includes/stage.php'); ?>
    </section>

    <!-- ─── CONTACT ─── -->
    <section id="contact" aria-label="Contact" style="padding: 80px 0 40px; background: var(--bg-soft);">
      <div class="container">
        <h2 style="text-align: center; color: var(--accent);">Contactez-moi</h2>
      </div>
      <div class="d-flex justify-content-center w-100">
        <?php include('includes/contact.php'); ?>
      </div>
    </section>

  </main>

  <?php include('includes/footer.php'); ?>

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
