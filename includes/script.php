<style>
/* ================================
   CURSEUR CUSTOM COMPATIBLE TOUS NAVIGATEURS
================================ */

:root{
  --cursor-main-size: 10px;
  --cursor-halo-size: 48px;
  --cursor-color: #2049d6;
  --cursor-transition: 180ms cubic-bezier(.2,.9,.2,1);

  --cursor-glow:
    0 0 18px rgba(32,73,214,.9),
    0 0 40px rgba(32,73,214,.6);
}

/* Cache curseur natif desktop */
html,
body{
  cursor:none;
}

body.no-custom-cursor,
input,
textarea,
select,
button,
[contenteditable="true"]{
  cursor:auto !important;
}

/* Désactivation mobile/tactile */
@media (hover:none), (pointer:coarse){
  html,
  body{
    cursor:auto !important;
  }

  .custom-cursor,
  .cursor-halo,
  .cursor-pulse{
    display:none !important;
  }
}

/* ================================
   POINT PRINCIPAL
================================ */

.custom-cursor{
  position:fixed;
  top:0;
  left:0;
  width:var(--cursor-main-size);
  height:var(--cursor-main-size);

  margin-left:calc(var(--cursor-main-size) * -.5);
  margin-top:calc(var(--cursor-main-size) * -.5);

  border-radius:50%;
  background:var(--cursor-color);

  box-shadow:var(--cursor-glow);

  pointer-events:none;
  z-index:999999;

  transform:translate3d(0,0,0);
  -webkit-transform:translate3d(0,0,0);

  transition:
    transform var(--cursor-transition),
    opacity 120ms linear;

  -webkit-transition:
    -webkit-transform var(--cursor-transition),
    opacity 120ms linear;

  will-change:transform, opacity;

  backface-visibility:hidden;
  -webkit-backface-visibility:hidden;
}

/* ================================
   HALO
================================ */

.cursor-halo{
  position:fixed;
  top:0;
  left:0;

  width:var(--cursor-halo-size);
  height:var(--cursor-halo-size);

  margin-left:calc(var(--cursor-halo-size) * -.5);
  margin-top:calc(var(--cursor-halo-size) * -.5);

  border-radius:50%;

  background:
    radial-gradient(
      circle at 30% 30%,
      rgba(255,255,255,.15),
      rgba(32,73,214,.12) 10%,
      rgba(32,73,214,.06) 40%,
      transparent 70%
    );

  box-shadow:
    0 0 30px rgba(32,73,214,.12),
    0 0 70px rgba(32,73,214,.08);

  pointer-events:none;
  z-index:999998;

  transform:translate3d(0,0,0);
  -webkit-transform:translate3d(0,0,0);

  transition:
    width var(--cursor-transition),
    height var(--cursor-transition),
    opacity 180ms linear;

  will-change:transform,width,height,opacity;

  backface-visibility:hidden;
  -webkit-backface-visibility:hidden;
}

/* ================================
   HOVER
================================ */

.cursor-halo.hover{
  width:calc(var(--cursor-halo-size) * 1.6);
  height:calc(var(--cursor-halo-size) * 1.6);

  margin-left:calc(var(--cursor-halo-size) * -.8);
  margin-top:calc(var(--cursor-halo-size) * -.8);

  opacity:.95;
}

.custom-cursor.hover{
  transform:scale(1.6) translate3d(0,0,0);
  -webkit-transform:scale(1.6) translate3d(0,0,0);

  opacity:.95;
}

/* ================================
   PULSE CLICK
================================ */

.cursor-pulse{
  position:fixed;
  border-radius:50%;
  pointer-events:none;
  z-index:999997;

  transform:translate3d(0,0,0);
  -webkit-transform:translate3d(0,0,0);

  background:rgba(32,73,214,.35);

  animation:cursorPulse .45s ease-out forwards;
  -webkit-animation:cursorPulse .45s ease-out forwards;
}

/* Fallback navigateurs sans mix-blend-mode */
@supports (mix-blend-mode:screen){
  .cursor-pulse{
    mix-blend-mode:screen;
  }
}

/* ================================
   ANIMATION
================================ */

@keyframes cursorPulse{
  0%{
    width:12px;
    height:12px;
    opacity:.8;
    transform:scale(1);
  }
  100%{
    width:80px;
    height:80px;
    opacity:0;
    transform:scale(2);
  }
}

@-webkit-keyframes cursorPulse{
  0%{
    width:12px;
    height:12px;
    opacity:.8;
    -webkit-transform:scale(1);
  }
  100%{
    width:80px;
    height:80px;
    opacity:0;
    -webkit-transform:scale(2);
  }
}

/* ================================
   SAFARI / FIREFOX FIX
================================ */

body{
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
}

/* Force rendu */
.custom-cursor,
.cursor-halo{
  contain:layout style paint;
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {

  /* ==========================
     DETECTION TACTILE
  ========================== */
  function isTouchDevice() {
    return (
      'ontouchstart' in window ||
      navigator.maxTouchPoints > 0 ||
      window.matchMedia('(pointer: coarse)').matches
    );
  }

  if (isTouchDevice()) {
    document.body.classList.add('touch');
    return;
  }

  /* ==========================
     CREATION ELEMENTS
  ========================== */
  const cursor = document.createElement('div');
  cursor.className = 'custom-cursor';

  const halo = document.createElement('div');
  halo.className = 'cursor-halo';

  document.body.appendChild(cursor);
  document.body.appendChild(halo);

  /* ==========================
     POSITION
  ========================== */
  let mouseX = window.innerWidth / 2;
  let mouseY = window.innerHeight / 2;

  let cursorX = mouseX;
  let cursorY = mouseY;

  let haloX = mouseX;
  let haloY = mouseY;

  const speed = 0.25;
  const haloSpeed = 0.12;

  let visible = true;

  /* ==========================
     MOUVEMENT
  ========================== */
  function showCursor() {
    if (!visible) {
      cursor.style.opacity = '1';
      halo.style.opacity = '1';
      visible = true;
    }
  }

  function hideCursor() {
    cursor.style.opacity = '0';
    halo.style.opacity = '0';
    visible = false;
  }

  window.addEventListener('pointermove', function (e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
    showCursor();
  }, { passive: true });

  document.addEventListener('mouseleave', hideCursor);
  document.addEventListener('mouseenter', showCursor);

  /* ==========================
     HOVER DELEGATION
  ========================== */
  document.addEventListener('mouseover', function (e) {
    const target = e.target.closest(
      'a, button, .btn, .nav-link, [role="button"]'
    );

    if (target) {
      cursor.classList.add('hover');
      halo.classList.add('hover');
    }
  });

  document.addEventListener('mouseout', function (e) {
    const target = e.target.closest(
      'a, button, .btn, .nav-link, [role="button"]'
    );

    if (target) {
      cursor.classList.remove('hover');
      halo.classList.remove('hover');
    }
  });

  /* ==========================
     CLICK EFFECT
  ========================== */
  function spawnPulse(x, y) {
    const pulse = document.createElement('div');
    pulse.className = 'cursor-pulse';

    const size = 16;

    pulse.style.width = size + 'px';
    pulse.style.height = size + 'px';
    pulse.style.left = (x - size / 2) + 'px';
    pulse.style.top = (y - size / 2) + 'px';

    document.body.appendChild(pulse);

    requestAnimationFrame(function () {
      pulse.style.transform = 'scale(6)';
      pulse.style.opacity = '0';
    });

    setTimeout(function () {
      if (pulse.parentNode) {
        pulse.parentNode.removeChild(pulse);
      }
    }, 650);
  }

  window.addEventListener('click', function (e) {
    spawnPulse(e.clientX, e.clientY);
  });

  /* ==========================
     INPUTS
  ========================== */
  document.addEventListener('focusin', function (e) {
    if (
      e.target.matches(
        'input, textarea, select, [contenteditable="true"], .code-editor'
      )
    ) {
      cursor.style.display = 'none';
      halo.style.display = 'none';
    }
  });

  document.addEventListener('focusout', function () {
    cursor.style.display = '';
    halo.style.display = '';
  });

  /* ==========================
     ANIMATION
  ========================== */
  function animate() {
    cursorX += (mouseX - cursorX) * speed;
    cursorY += (mouseY - cursorY) * speed;

    haloX += (mouseX - haloX) * haloSpeed;
    haloY += (mouseY - haloY) * haloSpeed;

    cursor.style.transform =
      'translate3d(' + cursorX + 'px,' + cursorY + 'px,0)';

    halo.style.transform =
      'translate3d(' + haloX + 'px,' + haloY + 'px,0)';

    requestAnimationFrame(animate);
  }

  animate();

});
</script>
