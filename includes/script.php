<style>
    /* === Curseur personnalisé: bleu roi lumineux === */
:root{
  --cursor-main-size: 10px;
  --cursor-halo-size: 48px;
  --cursor-color: #2049d6; /* bleu roi */
  --cursor-glow: 0 0 18px rgba(32,73,214,0.9), 0 0 40px rgba(32,73,214,0.6);
  --cursor-transition: 180ms cubic-bezier(.2,.9,.2,1);
}

/* masquer le curseur natif (sauf pour inputs où on veut le garder) */
body:not(.no-custom-cursor){ cursor: none; }

/* garder le curseur natif lors d'interaction avec champs */
input, textarea, select, button, [contenteditable="true"] {
  cursor: auto !important;
}

/* élément principal (petit point précis) */
.custom-cursor {
  position: fixed;
  top: 0;
  left: 0;
  width: var(--cursor-main-size);
  height: var(--cursor-main-size);
  margin-left: calc(var(--cursor-main-size) * -0.5);
  margin-top: calc(var(--cursor-main-size) * -0.5);
  border-radius: 50%;
  background: var(--cursor-color);
  box-shadow: var(--cursor-glow);
  pointer-events: none;
  z-index: 99999;
  transform: translate3d(0,0,0);
  transition: transform var(--cursor-transition), opacity 120ms linear;
  will-change: transform;
}

/* halo/follow (plus gros, lag) */
.cursor-halo {
  position: fixed;
  top: 0;
  left: 0;
  width: var(--cursor-halo-size);
  height: var(--cursor-halo-size);
  margin-left: calc(var(--cursor-halo-size) * -0.5);
  margin-top: calc(var(--cursor-halo-size) * -0.5);
  border-radius: 50%;
  background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.15), rgba(32,73,214,0.12) 10%, rgba(32,73,214,0.06) 40%, transparent 70%);
  box-shadow: 0 0 30px rgba(32,73,214,0.12), 0 0 70px rgba(32,73,214,0.08);
  pointer-events: none;
  z-index: 99998;
  transform: translate3d(0,0,0);
  transition: width var(--cursor-transition), height var(--cursor-transition), opacity 180ms linear;
  will-change: transform, width, height, opacity;
}

/* grandissement sur hover des éléments interactifs */
a:hover, button:hover, .btn:hover, .nav-link:hover {
  /* on agrandit la halo et le point */
}
.cursor-halo.hover {
  width: calc(var(--cursor-halo-size) * 1.6);
  height: calc(var(--cursor-halo-size) * 1.6);
  margin-left: calc(var(--cursor-halo-size) * -0.8);
  margin-top: calc(var(--cursor-halo-size) * -0.8);
  opacity: 0.95;
}

.custom-cursor.hover {
  transform: scale(1.6) translate3d(0,0,0);
  opacity: 0.95;
}

/* effet clic : petit "flash" */
.cursor-pulse {
  position: fixed;
  border-radius: 50%;
  pointer-events: none;
  z-index: 99997;
  transform: translate3d(0,0,0);
  mix-blend-mode: screen;
}

/* cache le curseur si on utilise un appareil tactile */
body.touch .custom-cursor,
body.touch .cursor-halo {
  display: none !important;
}

</style>
<script>
document.addEventListener('DOMContentLoaded', () => {
  // si périphérique tactile => désactiver le custom cursor
  function isTouch() {
    return ('ontouchstart' in window) || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
  }
  if (isTouch()) {
    document.body.classList.add('touch');
    return;
  }

  // créer les éléments
  const cursor = document.createElement('div');
  cursor.className = 'custom-cursor';
  document.body.appendChild(cursor);

  const halo = document.createElement('div');
  halo.className = 'cursor-halo';
  document.body.appendChild(halo);

  // state
  let mouseX = window.innerWidth / 2;
  let mouseY = window.innerHeight / 2;
  let cursorX = mouseX;
  let cursorY = mouseY;
  let haloX = mouseX;
  let haloY = mouseY;

  const speed = 0.25; // easing cursor
  const haloSpeed = 0.12; // easing halo (more lag -> magical trail)

  // track mouse
  window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    // show immediately if hidden
    cursor.style.opacity = '1';
    halo.style.opacity = '1';
  });

  // hide on blur (optional)
  window.addEventListener('mouseout', () => {
    cursor.style.opacity = '0';
    halo.style.opacity = '0';
  });

  // enlarge on hover for interactive elements
  const hoverTargets = ['a', 'button', '.btn', '.nav-link', '[role="button"]'];
  function addHoverListeners() {
    hoverTargets.forEach(sel => {
      document.querySelectorAll(sel).forEach(el => {
        el.addEventListener('mouseenter', () => {
          cursor.classList.add('hover');
          halo.classList.add('hover');
        });
        el.addEventListener('mouseleave', () => {
          cursor.classList.remove('hover');
          halo.classList.remove('hover');
        });
      });
    });
  }
  addHoverListeners();

  // observe changes in DOM to reattach hover listeners if nav items are injected later
  const obs = new MutationObserver(() => addHoverListeners());
  obs.observe(document.body, { childList: true, subtree: true });

  // click particle / pulse effect
  function spawnPulse(x, y) {
    const pulse = document.createElement('div');
    pulse.className = 'cursor-pulse';
    const size = 12 + Math.random() * 18;
    pulse.style.width = `${size}px`;
    pulse.style.height = `${size}px`;
    pulse.style.left = `${x - size/2}px`;
    pulse.style.top = `${y - size/2}px`;
    pulse.style.background = 'radial-gradient(circle, rgba(255,255,255,0.8) 0%, rgba(32,73,214,0.9) 25%, rgba(32,73,214,0.25) 60%, transparent 100%)';
    pulse.style.opacity = '0.95';
    pulse.style.transition = 'transform 600ms cubic-bezier(.2,.9,.2,1), opacity 600ms ease-out';
    document.body.appendChild(pulse);

    // animate
    requestAnimationFrame(() => {
      pulse.style.transform = `scale(6)`;
      pulse.style.opacity = '0';
    });

    setTimeout(() => pulse.remove(), 700);
  }

  window.addEventListener('click', (e) => {
    spawnPulse(e.clientX, e.clientY);
  });

  // hide custom cursor when focus on inputs (so caret visible)
  const inputs = 'input, textarea, select, [contenteditable="true"], .code-editor';
  document.querySelectorAll(inputs).forEach(el => {
    el.addEventListener('focus', () => {
      cursor.style.display = 'none';
      halo.style.display = 'none';
    });
    el.addEventListener('blur', () => {
      cursor.style.display = '';
      halo.style.display = '';
    });
  });

  // animation loop
  function animate() {
    // ease cursor
    cursorX += (mouseX - cursorX) * speed;
    cursorY += (mouseY - cursorY) * speed;
    cursor.style.transform = `translate3d(${cursorX}px, ${cursorY}px, 0)`;

    // halo lags more
    haloX += (mouseX - haloX) * haloSpeed;
    haloY += (mouseY - haloY) * haloSpeed;
    halo.style.transform = `translate3d(${haloX}px, ${haloY}px, 0)`;

    requestAnimationFrame(animate);
  }
  requestAnimationFrame(animate);
});
</script>
