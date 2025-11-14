
<style>
/* Styles repris du fichier PHP convertis en CSS pur */
body { font-family: system-ui, "Segoe UI", Roboto, Arial, sans-serif; margin:0; background:#fafafa; color:#111; }
.certifications-section { max-width:1100px; margin:2rem auto; padding:0 1rem; }
.certifications-section h2 { margin-bottom:.25rem;color: #2d3decd5; }
.certifications-section .lead { color:#555; margin-bottom:1rem; }

.cert-grid { display:grid; grid-template-columns: repeat(auto-fill,minmax(240px,1fr)); gap:1rem; }
.cert-card { background:#fff; border:1px solid #3c35fc; border-radius:8px; overflow:hidden; display:flex; flex-direction:column; height:100%; box-shadow:0 2px 6px rgba(0,0,0,0.04); }
.cert-link { text-decoration:none; color:inherit; display:flex; gap:0.75rem; align-items:center; padding:0.75rem; flex:1; }
.cert-thumb { width:84px; height:84px; object-fit:cover; border-radius:6px; flex:0 0 84px; }
.cert-no-thumb { width:84px; height:84px; display:flex; align-items:center; justify-content:center; background:#f5f5f5; color:#777; border-radius:6px; flex:0 0 84px; }
.cert-meta { flex:1; min-width:0; }
.cert-title { margin:0 0 .35rem 0; font-size:1rem; line-height:1.2; }
.cert-issuer { margin:0; color:#666; font-size:.875rem; }

.cert-actions { display:flex; gap:.5rem; padding:.5rem; border-top:1px solid #3c35fc; background:#fafafa; }
.preview-btn, .open-btn { border:0; background:#3c35fc3e; padding:.45rem .6rem; border-radius:6px; cursor:none; font-size:.875rem; text-decoration:none; color:white; border:1px solid #321cfdff; }
.preview-btn:hover, .open-btn:hover { background:black;  }

@media (prefers-color-scheme: dark) {
    body { background:#0b0b0b; color:#ddd; }
    .cert-card { background:#111;box-shadow:none; color:#ddd; }
    .cert-actions, .cert-link { background:transparent; }
    .cert-no-thumb { background:#1a1a1a; color:#999; }
}

/* Modal preview */
#cert-preview-modal { position:fixed; inset:0; display:none; align-items:center; justify-content:center; background:rgba(0,0,0,0.6); z-index:9999; }
#cert-preview-modal[aria-hidden="false"] { display:flex; }
#cert-preview-modal .modal-content { max-width:90%; max-height:90%; background:#fff; border-radius:8px; overflow:auto; padding:8px; position:relative; }
#cert-preview-modal img { width:100%; height:auto; display:block; border-radius:4px; }
.modal-close { position:absolute; top:12px; right:12px; background:#fff; border:0; padding:.4rem .6rem; border-radius:6px; cursor:pointer; }
</style>
</head>
<body>

<section id="certifications" class="certifications-section">
    <h2>Certifications</h2>
    <p class="lead">Mes certifications récentes — cliquez pour ouvrir la certification.</p>

    <div class="cert-grid">
        <!-- Cert 1 (avec miniature) -->
        <article class="cert-card">
            <a class="cert-link" href="https://example.com/certificates/php-modern.pdf" target="_blank" rel="noopener noreferrer" title="Ouvrir PHP: Développement web moderne">
                <img src="/assets/certs/php-modern-thumb.jpg" alt="JS: Développement web moderne - miniature" class="cert-thumb" />
                <div class="cert-meta">
                    <h3 class="cert-title">JS: JavaScript Essentials 1</h3>
                    <p class="cert-issuer">Netacad • <time datetime="2024-11">2025-11</time></p>
                </div>
            </a>

            <div class="cert-actions">
                <button class="preview-btn" type="button" data-thumb="/assets/certs/php-modern-thumb.jpg" aria-label="Aperçu de JS: JavaScript Essentials 1">Aperçu</button>
                <a class="open-btn" href="https://example.com/certificates/php-modern.pdf" target="_blank" rel="noopener noreferrer">Voir la certif</a>
            </div>
        </article>

        <!-- Cert 2 (avec miniature) -->
        <article class="cert-card">
            <a class="cert-link" href="https://example.com/certificates/frontend.pdf" target="_blank" rel="noopener noreferrer" title="Ouvrir Frontend Web Developer">
                <img src="/assets/certs/frontend-thumb.jpg" alt="Frontend Web Developer - miniature" class="cert-thumb" />
                <div class="cert-meta">
                    <h3 class="cert-title">Frontend Web Developer</h3>
                    <p class="cert-issuer">freeCodeCamp • <time datetime="2023-11">2023-11</time></p>
                </div>
            </a>

            <div class="cert-actions">
                <button class="preview-btn" type="button" data-thumb="/assets/certs/frontend-thumb.jpg" aria-label="Aperçu de Frontend Web Developer">Aperçu</button>
                <a class="open-btn" href="https://example.com/certificates/frontend.pdf" target="_blank" rel="noopener noreferrer">Voir la certif</a>
            </div>
        </article>

        <!-- Cert 3 (sans miniature) -->
        <article class="cert-card">
            <a class="cert-link" href="https://example.com/certificates/sql.pdf" target="_blank" rel="noopener noreferrer" title="Ouvrir SQL & Bases de données">
                <div class="cert-no-thumb" aria-hidden="true">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path d="M3 7v10a2 2 0 0 0 2 2h14"/></svg>
                </div>
                <div class="cert-meta">
                    <h3 class="cert-title">SQL & Bases de données</h3>
                    <p class="cert-issuer">Coursera • <time datetime="2022-08">2022-08</time></p>
                </div>
            </a>

            <div class="cert-actions">
                <!-- Pas de bouton Aperçu car pas de miniature -->
                <a class="open-btn" href="https://example.com/certificates/sql.pdf" target="_blank" rel="noopener noreferrer">Voir la certif</a>
            </div>
        </article>
    </div>
</section>

<div id="cert-preview-modal" role="dialog" aria-hidden="true" aria-label="Aperçu de la certification">
    <div class="modal-content" role="document">
        <button class="modal-close" aria-label="Fermer">Fermer</button>
        <div class="modal-body"></div>
    </div>
</div>

<script>
(function(){
    const modal = document.getElementById('cert-preview-modal');
    const body = modal.querySelector('.modal-body');
    const closeBtn = modal.querySelector('.modal-close');

    document.querySelectorAll('.preview-btn').forEach(btn => {
        btn.addEventListener('click', function(){
            const src = this.dataset.thumb;
            body.innerHTML = '';
            const img = document.createElement('img');
            img.src = src;
            img.alt = 'Aperçu';
            body.appendChild(img);
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            img.focus?.();
        });
    });

    function closeModal(){
        modal.setAttribute('aria-hidden', 'true');
        body.innerHTML = '';
        document.body.style.overflow = '';
    }

    closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', function(e){
        if (e.target === modal) closeModal();
    });
    document.addEventListener('keydown', function(e){
        if (e.key === 'Escape' && modal.getAttribute('aria-hidden') === 'false') closeModal();
    });
})();
</script>

