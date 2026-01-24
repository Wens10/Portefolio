
<style>
.internships-section {
  max-width: 1100px;
  margin: 3rem auto;
  padding: 0 1rem;
}

.internships-header h2 {
  color: #2d3dec;
}

.learneo-card {
  background: linear-gradient(165deg, rgba(12, 75, 130, 0.15), rgba(11, 11, 11, 0.9));
  backdrop-filter: blur(10px);  
  border-radius: 10px;
  padding: 1rem;
  margin-bottom: 2rem;
}

.timeline {
  display: flex;
  gap: 1rem;
  margin-bottom: 2rem;
}

.timeline-item {
  flex: 1;
  padding: .75rem;
  border-radius: 8px;
  border: 1px solid #2d3dec;
  background: #f5f6ff;
  cursor: none !important;
}

.timeline-item.active {
  background: #2d3dec;
  color: #fff;
}

.internship-view {
  display: none;
  animation: fade .3s ease;
}

.internship-view.active {
  display: block;
}

/* =====================================================
   Galerie horizontale scrollable – Screens / Captures
   ===================================================== */

.screens {
  display: flex;
  gap: 1.5rem;
  overflow-x: auto;
  overflow-y: hidden;
  padding: 1rem 0;
  margin: 1.5rem 0;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch; /* scroll fluide mobile */
}

/* Carte image */
.screen {
  flex: 0 0 560px;        /* largeur des images */
  height: 420;          /* hauteur des images */
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  color: #666;
  scroll-snap-align: start;
}

/* Image réelle à l’intérieur */
.screen img {
  width: 100%;
  height: 100%;
  border-radius: 12px;
}

/* Scrollbar (Chrome / Edge / Safari) */
.screens::-webkit-scrollbar {
  height: 8px;
}

.screens::-webkit-scrollbar-thumb {
  background: #3c35fc;
  border-radius: 4px;
}

.screens::-webkit-scrollbar-track {
  background: #ddd;
}

/* Mode sombre */
@media (prefers-color-scheme: light) {


  .screens::-webkit-scrollbar-track {
    background: #222;
  }
}


.preview-btn {
  margin-top: 1rem;
  padding: .6rem 1rem;
  background: #2d3dec;
  color: #fff;
  border-radius: 6px;
  border: none;
  cursor: pointer;
}

@keyframes fade {
  from { opacity:0; transform:translateY(5px);}
  to { opacity:1; transform:none;}
}

</style>
</head>
<body>

<section id="internships" class="internships-section">
  <header class="internships-header">
    <h2>Stages & Réalisations professionnelles</h2>
    <p class="lead">
      Deux stages réalisés au sein de la même entreprise, avec un objectif commun :
      concevoir une application métier, d’abord en <strong>low-code</strong>,
      puis en <strong>développement traditionnel</strong>.
    </p>
  </header>

  <!-- Présentation entreprise -->
<h2>Entreprise d’accueil : Learneo</h2>
  <p class="lead">
    Présentation de l’organisme au sein duquel j’ai réalisé mes deux stages.
  </p>

  <article class="learneo-card">
    <div class="learneo-text">
      <h3>Qui est Learneo ?</h3>

      <p>
        <strong>Learneo</strong> est un organisme de formation professionnelle
        spécialisé dans les métiers de l’informatique et des technologies numériques.
        Fondée en <strong>juillet 2004</strong>, l’entreprise accompagne depuis plus
        de <strong>20 ans</strong> les entreprises, les salariés, les demandeurs d’emploi
        et les apprenants dans le développement de leurs compétences IT.
      </p>

      <p>
        Les activités de Learneo s’articulent autour de
        <strong>trois piliers principaux</strong> :
      </p>

      <ul>
        <li>
          <strong>La formation continue</strong> à destination des entreprises
          et de leurs collaborateurs
        </li>
        <li>
          <strong>La formation pour la reconversion professionnelle et l’apprentissage</strong>,
          notamment via Learneo Académie
        </li>
        <li>
          <strong>Les prestations de services informatiques</strong>,
          incluant le consulting et la délégation d’expertise
        </li>
      </ul>

      <p>
        Learneo intervient sur des domaines technologiques majeurs tels que
        les <strong>réseaux et infrastructures</strong>, le
        <strong>cloud computing</strong>, la <strong>cybersécurité</strong>,
        ainsi que la <strong>data</strong> et l’<strong>intelligence artificielle</strong>.
      </p>

      <p>
        L’entreprise s’appuie sur des solutions reconnues du marché
        (notamment <strong>Microsoft Azure</strong>, <strong>AWS</strong>,
        <strong>Cisco</strong>, <strong>VMware</strong>)
        et utilise des méthodologies professionnelles telles que
        <strong>ITIL</strong>, <strong>Agile / Scrum</strong>,
        <strong>DevOps</strong> ou <strong>PMP</strong>.
      </p>
    </div>
  </article>

  <!-- Timeline -->
  <div class="timeline">

    <!-- STAGE 1 -->
    <button class="timeline-item active" data-target="stage1">
      <span class="date">Stage 1</span>
      <span class="title">POC Low-Code</span>
    </button>

    <!-- STAGE 2 -->
    <button class="timeline-item" data-target="stage2">
      <span class="date">Stage 2</span>
      <span class="title">POC Développement traditionnel</span>
    </button>
  </div>

  <!-- VUES -->
  <div class="internship-views">

    <!-- ================= STAGE 1 ================= -->
    <article id="stage1" class="internship-view active">
      <h3>Stage 1 — Conception d’un POC en Low-Code</h3>

      <p class="objective">
        <strong>Objectif du stage :</strong>
        Concevoir un prototype d’application métier permettant la gestion des clients,
        des formateurs et des sessions de formation, à l’aide d’outils low-code.
      </p>

      <h4>Déroulement du stage</h4>
      <ol>
        <li>Analyse des besoins internes</li>
        <li>Conception et développement de prototypes</li>
        <li>Comparaison de solutions et recommandation finale</li>
      </ol>

      <h4>Réalisations principales</h4>
      <ul>
        <li>Prototype d’application AppSheet connecté à Google Sheets</li>
        <li>Gestion des clients, formateurs et formations</li>
        <li>Mise en place de filtres, relations et validations de données</li>
        <li>Comparaison AppSheet / PowerApps / prototype PHP-JS</li>
        <li>Support réseau et réorganisation des salles informatiques</li>
      </ul>

      <!-- Screens -->
      <div class="screens">
        <div class="screen place"><img src="/assets/images/Capture d'écran 2026-01-04 201625.png" alt=""></div>
        <div class="screen place"><img src="/assets/images/Capture d'écran 2026-01-04 201709.png" alt=""></div>
        <div class="screen place"><img src="/assets/images/Capture d'écran 2026-01-04 201749.png" alt=""></div>
      </div>

      <a href="assets/images/Attestation de stage (1) Learneo_ 2025 - Copie.pdf" target="_blank" class="preview-btn">
        Voir l’attestation de stage
      </a>
    </article>

    <!-- ================= STAGE 2 ================= -->
    <article id="stage2" class="internship-view">
      <h3>Stage 2 — Développement traditionnel</h3>

      <p class="objective">
        <strong>Objectif du stage :</strong>
        Développer une application métier complète destinée à remplacer
        une solution existante, avec une ergonomie améliorée et une interface épurée.
      </p>

      <h4>Contexte et organisation</h4>
      <ul>
        <li>Travail en binôme Front-end / Back-end</li>
        <li>Rédaction du cahier des charges</li>
        <li>Mise en place d’une stratégie de travail</li>
        <li>Suivi du projet via Trello et GitHub</li>
      </ul>

      <h4>Réalisations principales</h4>
      <ul>
        <li>Conception des pages et des interfaces</li>
        <li>Intégration HTML / CSS</li>
        <li>Utilisation de EJS pour le rendu dynamique</li>
        <li>Collaboration étroite avec le développeur back-end</li>
      </ul>

      <!-- Screens -->
      <div class="screens">
        <div class="screen place"><img src="/assets/images/1.png" alt=""></div>
        <div class="screen place"><img src="/assets/images/2.png" alt=""></div>
        <div class="screen place"><img src="/assets/images/3.png" alt=""></div>
        <div class="screen place"><img src="/assets/images/4.png" alt=""></div>
        <div class="screen place"><img src="/assets/images/5.png" alt=""></div>
        <div class="screen place"><img src="/assets/images/6.png" alt=""></div>
        <div class="screen place"><img src="/assets/images/7.png" alt=""></div>
        <div class="screen place"><img src="/assets/images/8.png" alt=""></div>
      </div>

      <button class="preview-btn" href="/assets/images/Attestation de stage (2) learneo 2025 - Copie.pdf" target="_blank">
        Voir l’attestation de stage
      </button>
    </article>

  </div>
</section>


<script>
(function(){
  const buttons = document.querySelectorAll('.timeline-item');
  const views = document.querySelectorAll('.internship-view');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      buttons.forEach(b => b.classList.remove('active'));
      views.forEach(v => v.classList.remove('active'));

      btn.classList.add('active');
      document.getElementById(btn.dataset.target).classList.add('active');
    });
  });


})();
</script>


