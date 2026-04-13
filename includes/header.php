

<header class="main-header" style="position: fixed; width: 100%; top:0; left:0;">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <div class="navbar-brand logo">
         <a  href="index.php"><img src="assets/images/alien-svgrepo-com.svg" alt=""></a> <br> 
        </div>
        
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav nav-menu">
            <li class="nav-item">
              <a class="nav-link" href="index.php#home">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#about">Parcours</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tableau.php">Tableau de synthese</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="projets.php">Projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bts_sio.php">BTS SIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="veille.php">Veille-Tech</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#contact">Contact</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <style>
         .nav-link.active {
       
       font-weight: 600;
       
     }
     
  </style>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const navLinks = document.querySelectorAll(".nav-link");
  const sections = document.querySelectorAll("section[id]");
  const currentPath = window.location.pathname.split("/").pop();
  const currentHash = window.location.hash;

  // =============================
  // ACTIVE AU CHARGEMENT
  // =============================
  navLinks.forEach(link => {
    const href = link.getAttribute("href");

    // Pages simples
    if (href === currentPath) {
      link.classList.add("active");
    }

    // index.php + hash
    if (
      (currentPath === "" || currentPath === "index.php") &&
      href === `index.php${currentHash}`
    ) {
      link.classList.add("active");
    }
  });

  // =============================
  // ACTIVE AU CLIC (IMMÉDIAT)
  // =============================
  navLinks.forEach(link => {
    link.addEventListener("click", () => {
      navLinks.forEach(l => l.classList.remove("active"));
      link.classList.add("active");
    });
  });

  // =============================
  // ACTIVE AU SCROLL
  // =============================
  window.addEventListener("scroll", () => {
    let currentSection = "";

    sections.forEach(section => {
      const sectionTop = section.offsetTop - 120;
      const sectionHeight = section.offsetHeight;

      if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
        currentSection = section.id;
      }
    });

    if (currentSection) {
      navLinks.forEach(link => {
        const href = link.getAttribute("href");
        link.classList.remove("active");

        if (href === `index.php#${currentSection}`) {
          link.classList.add("active");
        }
      });
    }
  });
});
</script>


</header>
