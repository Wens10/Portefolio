
<?php /* Anti-flash : le thème sombre est le défaut ; on applique le clair si l'utilisateur l'a choisi */ ?>
<script>(function(){var t=localStorage.getItem('theme');if(t==='light')document.documentElement.setAttribute('data-theme','light');}());</script>

<header class="main-header">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">

        <div class="navbar-brand logo">
          <a href="index.php" aria-label="Accueil — Wenceslas BOUITY">
            <img src="assets/images/alien-svgrepo-com.svg" alt="WB" width="36" height="36">
          </a>
        </div>

        <!-- Bouton mode sombre + burger (toujours visibles) -->
        <div style="display:flex;align-items:center;gap:8px;">
          <button class="theme-toggle" id="themeToggle" aria-label="Basculer le mode sombre" title="Mode sombre / clair">
            <!-- Soleil (mode clair) -->
            <svg class="icon-sun" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/>
              <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
              <line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/>
              <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
            </svg>
            <!-- Lune (mode sombre) -->
            <svg class="icon-moon" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
            </svg>
          </button>

          <button class="navbar-toggler" type="button" aria-label="Ouvrir le menu" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav nav-menu">
            <li class="nav-item"><a class="nav-link" href="index.php#home">Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#about">Parcours</a></li>
            <li class="nav-item"><a class="nav-link" href="projets.php">Projets</a></li>
            <li class="nav-item"><a class="nav-link" href="veille.php">Veille Tech</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
          </ul>
        </div>

      </div>
    </nav>
  </div>

  <style>
    .nav-link.active { color: var(--accent) !important; font-weight: 600; }

    @media (max-width: 991px) {
      #navbarNav {
        background: var(--bg-card);
        border-top: 1px solid var(--border);
        padding: 12px 0;
        border-radius: 0 0 12px 12px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.1);
      }
      .nav-menu .nav-link { padding: 10px 20px !important; }
    }
  </style>

  <script>
  /* ── Theme toggle ── */
  (function(){
    const btn  = document.getElementById('themeToggle');
    const html = document.documentElement;

    btn.addEventListener('click', () => {
      const isLight = html.getAttribute('data-theme') === 'light';
      if (isLight) {
        html.removeAttribute('data-theme');          /* retour au sombre (défaut) */
        localStorage.setItem('theme', 'dark');
        btn.setAttribute('aria-label', 'Passer en mode clair');
      } else {
        html.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
        btn.setAttribute('aria-label', 'Passer en mode sombre');
      }
    });

    /* Ajuste le aria-label au chargement */
    if (html.getAttribute('data-theme') === 'light') {
      btn.setAttribute('aria-label', 'Passer en mode sombre');
    } else {
      btn.setAttribute('aria-label', 'Passer en mode clair');
    }
  }());

  /* ── Nav active + menu mobile ── */
  document.addEventListener("DOMContentLoaded", () => {
    const navLinks    = document.querySelectorAll(".nav-link");
    const sections    = document.querySelectorAll("section[id]");
    const currentPath = window.location.pathname.split("/").pop();
    const currentHash = window.location.hash;

    navLinks.forEach(link => {
      const href = link.getAttribute("href");
      if (href === currentPath) link.classList.add("active");
      if ((currentPath === "" || currentPath === "index.php") && href === `index.php${currentHash}`) {
        link.classList.add("active");
      }
    });

    navLinks.forEach(link => {
      link.addEventListener("click", () => {
        navLinks.forEach(l => l.classList.remove("active"));
        link.classList.add("active");
      });
    });

    window.addEventListener("scroll", () => {
      let cur = "";
      sections.forEach(sec => {
        if (scrollY >= sec.offsetTop - 120 && scrollY < sec.offsetTop + sec.offsetHeight) cur = sec.id;
      });
      if (cur) {
        navLinks.forEach(l => {
          l.classList.remove("active");
          if (l.getAttribute("href") === `index.php#${cur}`) l.classList.add("active");
        });
      }
    });

    const toggler = document.querySelector('.navbar-toggler');
    const menu    = document.getElementById('navbarNav');

    toggler?.addEventListener('click', () => menu?.classList.toggle('show'));
    navLinks.forEach(l => l.addEventListener('click', () => menu?.classList.remove('show')));
    document.addEventListener('click', e => {
      if (!menu?.contains(e.target) && !toggler?.contains(e.target)) menu?.classList.remove('show');
    });
  });
  </script>
</header>
