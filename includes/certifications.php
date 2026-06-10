<section id="certifications" class="certif-section">
  <div class="container">

    <h2 class="certif-title">Certifications</h2>
    <p class="certif-lead">Mes certifications récentes — cliquez sur une carte pour ouvrir le document.</p>

    <div class="certif-grid">

      <!-- Cert 1 — JavaScript Essentials -->
      <article class="certif-card">
        <a class="certif-link" href="/assets/images/JavaScript_Essentials_1_certificate_wenceslasbouity92-gmail-com_f3f1a0df-3386-4ac1-b1c9-5e295ddb1040.pdf" target="_blank" rel="noopener noreferrer">
          <div class="certif-thumb-wrap">
            <img src="/assets/images/javascript-essentials-1.png" alt="JavaScript Essentials 1" class="certif-thumb">
            <span class="certif-badge">Netacad</span>
          </div>
          <div class="certif-meta">
            <h3>JS: JavaScript Essentials 1</h3>
            <p class="certif-issuer">Cisco Networking Academy</p>
            <time class="certif-date" datetime="2025-12">Décembre 2025</time>
          </div>
        </a>
        <div class="certif-actions">
          <button class="certif-preview-btn" type="button"
            data-thumb="/assets/images/Capture d'écran 2026-04-30 160656.png"
            aria-label="Aperçu JS Essentials 1">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
            Aperçu
          </button>
          <a class="certif-open-btn" href="/assets/images/JavaScript_Essentials_1_certificate_wenceslasbouity92-gmail-com_f3f1a0df-3386-4ac1-b1c9-5e295ddb1040.pdf" target="_blank" rel="noopener noreferrer">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            Ouvrir
          </a>
        </div>
      </article>

      <!-- Cert 2 — HTML Essentials -->
      <article class="certif-card">
        <a class="certif-link" href="/assets/images/HTML_Essentials_certificate_wenceslasbouity92-gmail-com_959676b4-7f09-4341-911d-f4d56d9f1d0a.pdf" target="_blank" rel="noopener noreferrer">
          <div class="certif-thumb-wrap">
            <img src="/assets/images/html-essentials.png" alt="HTML Essentials" class="certif-thumb">
            <span class="certif-badge">Netacad</span>
          </div>
          <div class="certif-meta">
            <h3>HTML: HTML Essentials</h3>
            <p class="certif-issuer">Cisco Networking Academy</p>
            <time class="certif-date" datetime="2026-04">Avril 2026</time>
          </div>
        </a>
        <div class="certif-actions">
          <button class="certif-preview-btn" type="button"
            data-thumb="/assets/images/Capture d'écran 2026-04-30 160433.png"
            aria-label="Aperçu HTML Essentials">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
            Aperçu
          </button>
          <a class="certif-open-btn" href="/assets/images/HTML_Essentials_certificate_wenceslasbouity92-gmail-com_959676b4-7f09-4341-911d-f4d56d9f1d0a.pdf" target="_blank" rel="noopener noreferrer">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            Ouvrir
          </a>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- Modal aperçu -->
<div id="certif-modal" role="dialog" aria-hidden="true" aria-label="Aperçu de la certification">
  <div class="certif-modal-inner">
    <button class="certif-modal-close" aria-label="Fermer">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
    <div class="certif-modal-body"></div>
  </div>
</div>

<style>
/* ─── Certifications ─── */
.certif-section {
  padding: 80px 0;
  background: var(--bg);
}

.certif-title {
  font-size: clamp(1.6rem, 3vw, 2.2rem) !important;
  font-weight: 800 !important;
  color: var(--txt) !important;
  text-align: center !important;
  margin-bottom: 8px !important;
  letter-spacing: -0.5px;
}

.certif-lead {
  text-align: center;
  color: var(--txt-muted);
  font-size: 15px;
  margin-bottom: 48px;
}

.certif-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 24px;
  max-width: 800px;
  margin: 0 auto;
}

.certif-card {
  background: var(--bg-card);
  border: 1.5px solid var(--border);
  border-radius: var(--radius);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  box-shadow: var(--shadow-sm);
  transition: all var(--tr);
}

.certif-card:hover {
  transform: translateY(-6px);
  border-color: var(--accent);
  box-shadow: var(--shadow-a);
}

.certif-link {
  display: flex;
  align-items: center;
  gap: 16px;
  padding: 20px;
  text-decoration: none;
  color: inherit;
  flex: 1;
}

.certif-thumb-wrap {
  position: relative;
  flex-shrink: 0;
}

.certif-thumb {
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 10px;
  border: 1.5px solid var(--border);
  display: block;
}

.certif-badge {
  position: absolute;
  bottom: -6px; left: 50%;
  transform: translateX(-50%);
  background: var(--accent);
  color: #fff;
  font-size: 9px;
  font-weight: 700;
  letter-spacing: 0.5px;
  padding: 2px 8px;
  border-radius: 999px;
  white-space: nowrap;
  font-family: var(--mono);
}

.certif-meta { flex: 1; min-width: 0; }

.certif-meta h3 {
  font-size: 0.95rem;
  font-weight: 700;
  color: var(--txt);
  margin: 0 0 4px;
  line-height: 1.3;
}

.certif-issuer {
  font-size: 0.82rem;
  color: var(--txt-muted);
  margin: 0 0 6px;
}

.certif-date {
  display: inline-block;
  font-size: 0.75rem;
  font-family: var(--mono);
  color: var(--accent);
  background: var(--accent-lit);
  padding: 2px 8px;
  border-radius: 4px;
}

.certif-actions {
  display: flex;
  gap: 8px;
  padding: 12px 20px 16px;
  border-top: 1px solid var(--border);
}

.certif-preview-btn,
.certif-open-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 8px 14px;
  border-radius: 8px;
  font-size: 13px;
  font-weight: 600;
  font-family: var(--font);
  cursor: pointer;
  transition: all var(--tr);
  text-decoration: none;
}

.certif-preview-btn {
  background: var(--bg-soft);
  border: 1.5px solid var(--border);
  color: var(--txt-muted);
}

.certif-preview-btn:hover {
  border-color: var(--accent);
  color: var(--accent);
  background: var(--accent-lit);
}

.certif-open-btn {
  background: var(--accent);
  border: 1.5px solid var(--accent);
  color: #fff;
}

.certif-open-btn:hover {
  background: var(--accent-h);
  border-color: var(--accent-h);
  transform: translateY(-1px);
}

/* Modal */
#certif-modal {
  position: fixed;
  inset: 0;
  display: none;
  align-items: center;
  justify-content: center;
  background: rgba(0,0,0,0.55);
  backdrop-filter: blur(4px);
  z-index: 9999;
  padding: 20px;
}

#certif-modal[aria-hidden="false"] { display: flex; }

.certif-modal-inner {
  background: var(--bg-card);
  border-radius: var(--radius);
  max-width: 90vw;
  max-height: 90vh;
  overflow: auto;
  padding: 20px;
  position: relative;
  box-shadow: var(--shadow-lg);
  border: 1.5px solid var(--border);
}

.certif-modal-close {
  position: absolute;
  top: 12px; right: 12px;
  background: var(--bg-soft);
  border: 1.5px solid var(--border);
  border-radius: 8px;
  padding: 6px;
  cursor: pointer;
  color: var(--txt-muted);
  display: flex; align-items: center;
  transition: all var(--tr);
}

.certif-modal-close:hover {
  border-color: var(--accent);
  color: var(--accent);
}

.certif-modal-body img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 8px;
}
</style>

<script>
(function(){
  const modal   = document.getElementById('certif-modal');
  const body    = modal.querySelector('.certif-modal-body');
  const closeBtn= modal.querySelector('.certif-modal-close');

  document.querySelectorAll('.certif-preview-btn').forEach(btn => {
    btn.addEventListener('click', function(){
      const src = this.dataset.thumb;
      body.innerHTML = '';
      const img = document.createElement('img');
      img.src = src; img.alt = 'Aperçu certification';
      body.appendChild(img);
      modal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    });
  });

  function closeModal(){
    modal.setAttribute('aria-hidden', 'true');
    body.innerHTML = '';
    document.body.style.overflow = '';
  }

  closeBtn.addEventListener('click', closeModal);
  modal.addEventListener('click', e => { if (e.target === modal) closeModal(); });
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && modal.getAttribute('aria-hidden') === 'false') closeModal();
  });
})();
</script>
