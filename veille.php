<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
$scheme   = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$base     = $scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost');
$canonical= htmlspecialchars($base . $_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');
$ogImage  = htmlspecialchars($base . '/assets/images/Image.jude.jpg', ENT_QUOTES, 'UTF-8');
$metaDesc = "Veille technologique de Wenceslas BOUITY sur l'intelligence artificielle dans le développement web — assistants de code, LLMs, impact sur les développeurs, sécurité et limites de l'IA en 2024–2025.";
$keywords = "veille technologique, intelligence artificielle, développement web, GitHub Copilot, LLM, GPT-4, Claude, Cursor, sécurité IA, assistants de code, Wenceslas BOUITY";
?>

<title>Veille Technologique IA — Wenceslas BOUITY · Portfolio</title>
<meta name="description" content="<?php echo htmlspecialchars($metaDesc, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="keywords"    content="<?php echo htmlspecialchars($keywords, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="author"      content="Wenceslas BOUITY">
<meta name="robots"      content="index, follow, max-image-preview:large">
<meta name="theme-color" content="#2564CF">

<link rel="canonical"  href="<?php echo $canonical; ?>">
<link rel="alternate"  href="<?php echo $canonical; ?>" hreflang="fr">

<!-- Open Graph -->
<meta property="og:locale"      content="fr_FR">
<meta property="og:type"        content="website">
<meta property="og:title"       content="Veille Technologique IA — Wenceslas BOUITY">
<meta property="og:description" content="<?php echo htmlspecialchars($metaDesc, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:url"         content="<?php echo $canonical; ?>">
<meta property="og:image"       content="<?php echo $ogImage; ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<!-- Twitter -->
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:title"       content="Veille Technologique IA — Wenceslas BOUITY">
<meta name="twitter:description" content="<?php echo htmlspecialchars($metaDesc, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:image"       content="<?php echo $ogImage; ?>">

<!-- Favicons -->
<link rel="icon"             type="image/png"     href="/favicon-96x96.png" sizes="96x96">
<link rel="icon"             type="image/svg+xml" href="/favicon.svg">
<link rel="shortcut icon"    href="/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180"      href="/apple-touch-icon.png">
<link rel="manifest"         href="/site.webmanifest">

<!-- Performance hints -->
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

<!-- Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Veille Technologique IA — Wenceslas BOUITY",
  "url": "<?php echo $canonical; ?>",
  "description": "<?php echo addslashes($metaDesc); ?>",
  "inLanguage": "fr-FR",
  "author": { "@type": "Person", "name": "Wenceslas BOUITY", "url": "<?php echo htmlspecialchars($base, ENT_QUOTES); ?>" },
  "about": { "@type": "Thing", "name": "Intelligence Artificielle dans le développement web" }
}
</script>

<style>
/* ══════════════════════════════════════════════
   VEILLE TECH — styles spécifiques
   Variables héritées de style.css
══════════════════════════════════════════════ */

/* ─── Page Layout ─── */
.veille-page { max-width: 1300px; margin: 0 auto; padding: 0 24px; }

/* ─── Hero veille ─── */
.veille-hero {
  text-align: center;
  padding: 72px 20px 48px;
  position: relative;
}

.veille-hero::before {
  content: '';
  position: absolute;
  top: 0; left: 50%;
  transform: translateX(-50%);
  width: 600px; height: 300px;
  background: radial-gradient(ellipse, rgba(196,30,58,0.06) 0%, transparent 70%);
  pointer-events: none;
}

.veille-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--mono);
  font-size: 11px;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--accent);
  border: 1px solid rgba(196,30,58,0.3);
  padding: 5px 16px;
  border-radius: 999px;
  margin-bottom: 24px;
}

.veille-eyebrow .dot {
  width: 6px; height: 6px;
  border-radius: 50%;
  background: var(--accent);
  animation: blink 1.8s ease-in-out infinite;
}

@keyframes blink { 0%,100%{opacity:1} 50%{opacity:.2} }

.veille-hero h1 {
  font-size: clamp(36px, 5vw, 64px);
  font-weight: 700;
  line-height: 1.1;
  letter-spacing: -1.5px;
  background: linear-gradient(135deg, var(--txt) 40%, var(--accent));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: 16px;
}

.veille-hero p {
  max-width: 540px;
  margin: 0 auto;
  font-size: 16px;
  color: var(--txt-muted);
  font-family: var(--mono);
  line-height: 1.7;
}

/* ─── Explication bloc ─── */
.explication {
  max-width: 900px;
  margin: 0 auto 56px;
  padding: 28px 36px;
  background: var(--accent-lit2);
  border-left: 2px solid var(--accent);
  border-radius: 0 12px 12px 0;
  color: var(--txt-muted);
  line-height: 1.75;
  font-family: var(--mono);
  font-size: 14px;
}

.explication p        { margin-bottom: 12px; }
.explication p:last-child { margin-bottom: 0; }
.explication strong   { color: var(--accent); }

.explication ul {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-top: 12px;
}

.explication ul li {
  padding: 4px 14px;
  border-radius: 999px;
  border: 1px solid rgba(196,30,58,0.3);
  font-size: 12px;
  color: var(--accent);
  font-weight: 400;
}

/* ─── Section "Pourquoi" ─── */
.pourquoi {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 16px;
  margin-bottom: 56px;
}

.pourquoi-card {
  background: var(--bg-card);
  border: 1px solid var(--border);
  border-radius: 14px;
  padding: 24px 20px;
  position: relative;
  overflow: hidden;
  transition: transform var(--tr), box-shadow var(--tr), border-color var(--tr);
}

.pourquoi-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, var(--accent), rgba(196,30,58,0.3));
  opacity: 0.6;
  transition: opacity var(--tr);
}

.pourquoi-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-a); border-color: var(--accent); }
.pourquoi-card:hover::before { opacity: 1; }

.pourquoi-card .icon {
  font-size: 24px;
  margin-bottom: 12px;
  display: block;
  color: var(--accent);
}

.pourquoi-card h4 {
  font-size: 14px;
  font-weight: 600;
  color: var(--txt);
  margin-bottom: 8px;
}

.pourquoi-card p {
  font-size: 13px;
  color: var(--txt-muted);
  font-family: var(--mono);
  line-height: 1.6;
}

/* ─── Grille thèmes ─── */
.themes-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 18px;
  margin-bottom: 20px;
}

.theme-card {
  background: var(--bg-card);
  border: 1px solid var(--border);
  padding: 28px 24px;
  border-radius: 14px;
  transition: transform var(--tr), box-shadow var(--tr), border-color var(--tr);
  cursor: pointer;
  position: relative;
  overflow: hidden;
}

.theme-card::after {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(135deg, var(--accent-lit2), transparent 60%);
  opacity: 0;
  transition: opacity var(--tr);
}

.theme-card:hover { transform: translateY(-5px) scale(1.01); box-shadow: var(--shadow-a); border-color: var(--accent); }
.theme-card:hover::after { opacity: 1; }

.theme-card h3 {
  font-size: 18px;
  color: var(--accent);
  font-weight: 700;
  margin-bottom: 10px;
}

.theme-card p {
  font-size: 13px;
  color: var(--txt-muted);
  font-family: var(--mono);
  line-height: 1.6;
}

.theme-badge {
  display: inline-block;
  margin-top: 14px;
  padding: 4px 14px;
  font-size: 10px;
  border-radius: 999px;
  border: 1px solid var(--accent);
  color: var(--accent);
  font-weight: 700;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  font-family: var(--mono);
}

/* ─── Détails dépliables ─── */
.theme-details {
  display: none;
  margin-bottom: 18px;
  padding: 22px 28px;
  background: var(--bg-card);
  border-radius: 12px;
  border: 1px solid var(--border);
}

.theme-details ul     { list-style: none; display: flex; flex-direction: column; gap: 10px; }

.theme-details ul li {
  font-size: 14px;
  font-family: var(--mono);
  color: var(--txt-muted);
  display: flex;
  align-items: baseline;
  gap: 10px;
}

.theme-details ul li::before { content: '→'; color: var(--accent); flex-shrink: 0; }

.theme-details ul li a {
  color: var(--accent);
  text-decoration: none;
  font-weight: 500;
  transition: opacity var(--tr);
}

.theme-details ul li a:hover { text-decoration: underline; opacity: 0.8; }

/* ─── Section articles ─── */
.veille-section { margin-bottom: 64px; }

.veille-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 16px;
  margin-bottom: 16px;
}

.veille-header h2 {
  font-size: 20px;
  font-weight: 700;
  color: var(--txt);
  margin: 0;
  position: relative;
}

.veille-header h2::after {
  content: '';
  position: absolute;
  left: 0; bottom: -6px;
  width: 32px; height: 2px;
  background: var(--accent);
  border-radius: 2px;
}

.veille-stats {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  font-size: 12px;
  color: var(--txt-muted);
  margin-bottom: 16px;
  font-family: var(--mono);
}

.veille-stats strong { color: var(--accent); }

.veille-controls {
  display: flex;
  gap: 8px;
  flex-wrap: wrap;
  align-items: center;
  margin-bottom: 24px;
}

.filter-pill {
  padding: 5px 16px;
  border-radius: 999px;
  border: 1px solid var(--border);
  background: transparent;
  color: var(--txt-muted);
  font-size: 12px;
  cursor: pointer;
  transition: all var(--tr);
  font-family: var(--mono);
  font-weight: 400;
}

.filter-pill:hover          { border-color: var(--accent); color: var(--accent); }
.filter-pill.active         { background: var(--accent-lit); border-color: var(--accent); color: var(--accent); }

.veille-search {
  margin-left: auto;
  background: var(--bg-card);
  border: 1px solid var(--border);
  border-radius: 999px;
  padding: 6px 18px;
  color: var(--txt);
  font-size: 12px;
  outline: none;
  font-family: var(--mono);
  width: 210px;
  transition: border-color var(--tr);
}

.veille-search::placeholder  { color: rgba(136,146,176,0.45); }
.veille-search:focus          { border-color: var(--accent); }

.refresh-btn {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 7px 18px;
  border-radius: 999px;
  border: 1px solid var(--border);
  background: transparent;
  color: var(--accent);
  font-size: 12px;
  font-weight: 500;
  cursor: pointer;
  transition: all var(--tr);
  font-family: var(--mono);
}

.refresh-btn:hover           { background: var(--accent-lit); }
.refresh-btn:disabled        { opacity: 0.4; cursor: not-allowed; }
.refresh-btn svg             { transition: transform 0.6s; }
.refresh-btn.spinning svg    { animation: spin 1s linear infinite; }

@keyframes spin { to { transform: rotate(360deg); } }

/* ─── Grille articles ─── */
.articles-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(310px, 1fr));
  gap: 20px;
}

/* ─── Carte article — redesign avec thumbnail ─── */
.article-card {
  background: var(--bg-card);
  border: 1px solid var(--border);
  border-radius: 14px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--tr), box-shadow var(--tr), border-color var(--tr);
}

.article-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow);
  border-color: var(--accent);
}

.article-card.is-new { border-color: rgba(196,30,58,0.4); animation: fadeSlideIn 0.4s ease both; }

@keyframes fadeSlideIn {
  from { opacity: 0; transform: translateY(-12px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* Thumbnail — vraie image ou gradient de catégorie */
.article-thumb {
  width: 100%;
  height: 160px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 22px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}

/* Vraie image de fond */
.article-thumb.has-img {
  background-size: cover;
  background-position: center;
}

.article-thumb::after {
  content: '';
  position: absolute; inset: 0;
  background: rgba(0,0,0,0.25);
}

.article-thumb-icon {
  position: relative; z-index: 1;
  width: 52px; height: 52px;
  background: rgba(255,255,255,0.18);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  backdrop-filter: blur(6px);
  border: 1px solid rgba(255,255,255,0.2);
  flex-shrink: 0;
}

.article-thumb-icon svg { width: 26px; height: 26px; stroke: #fff; }

.article-thumb-cat {
  position: relative; z-index: 1;
  font-family: var(--mono);
  font-size: 10px;
  font-weight: 500;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: rgba(255,255,255,0.9);
  background: rgba(0,0,0,0.4);
  padding: 4px 10px;
  border-radius: 4px;
  max-width: 55%;
  text-align: right;
  line-height: 1.4;
}

/* Gradients par catégorie — tons chauds cohérents avec l'accent orange */
.cat-assistants { background: linear-gradient(135deg, #c2410c 0%, #ff6427 100%); }
.cat-modeles    { background: linear-gradient(135deg, #92400e 0%, #d97706 100%); }
.cat-impact     { background: linear-gradient(135deg, #166534 0%, #16a34a 100%); }
.cat-securite   { background: linear-gradient(135deg, #7f1d1d 0%, #dc2626 100%); }
.cat-default    { background: linear-gradient(135deg, #374151 0%, #6b7280 100%); }

/* Corps de la carte */
.article-body {
  padding: 16px 20px 20px;
  display: flex;
  flex-direction: column;
  gap: 8px;
  flex: 1;
}

.article-meta {
  display: flex;
  align-items: center;
  gap: 8px;
  flex-wrap: wrap;
}

.article-source {
  font-size: 10px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: var(--accent);
  font-family: var(--mono);
}

.article-date {
  font-size: 10px;
  color: var(--txt-muted);
  margin-left: auto;
  font-family: var(--mono);
}

.new-badge {
  font-size: 10px;
  font-weight: 600;
  padding: 2px 8px;
  border-radius: 999px;
  background: var(--accent-lit);
  color: var(--accent);
  border: 1px solid rgba(196,30,58,0.3);
  font-family: var(--mono);
}

.article-title {
  font-size: 15px;
  font-weight: 600;
  color: var(--txt);
  line-height: 1.45;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.article-excerpt {
  font-size: 13px;
  color: var(--txt-muted);
  line-height: 1.6;
  font-family: var(--mono);
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  flex: 1;
}

.article-footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 8px;
  padding-top: 12px;
  border-top: 1px solid var(--border);
}

.article-cat-tag {
  display: inline-block;
  font-size: 10px;
  padding: 3px 10px;
  border-radius: 4px;
  border: 1px solid var(--border);
  color: var(--txt-muted);
  font-family: var(--mono);
  max-width: 55%;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.article-link {
  font-size: 12px;
  font-weight: 600;
  color: var(--accent);
  text-decoration: none;
  font-family: var(--mono);
  letter-spacing: 0.3px;
  white-space: nowrap;
  transition: opacity var(--tr);
}

.article-link:hover { opacity: 0.75; text-decoration: underline; }

/* États vides / chargement */
.veille-loader,
.veille-empty {
  grid-column: 1 / -1;
  text-align: center;
  padding: 60px 20px;
  color: var(--txt-muted);
  font-size: 14px;
  font-family: var(--mono);
}

.timeline-sep {
  grid-column: 1 / -1;
  font-size: 11px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--txt-muted);
  font-family: var(--mono);
  padding: 4px 0;
  border-bottom: 1px solid var(--border);
  margin-top: 8px;
  opacity: 0.5;
}

/* ─── Outils de veille ─── */
.outils {
  margin-bottom: 64px;
  padding: 32px 36px;
  background: var(--bg-card);
  border-radius: 14px;
  border: 1px solid var(--border);
}

.outils h2 {
  color: var(--txt);
  font-size: 18px;
  margin-bottom: 24px;
  font-weight: 600;
}

.outils-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
  gap: 14px;
}

.outil-item {
  background: var(--accent-lit2);
  border: 1px solid var(--border);
  border-radius: 10px;
  padding: 16px;
  transition: border-color var(--tr);
}

.outil-item:hover { border-color: var(--accent); }

.outil-item strong {
  display: block;
  color: var(--accent);
  font-size: 13px;
  font-weight: 600;
  margin-bottom: 6px;
  font-family: var(--mono);
}

.outil-item p {
  font-size: 12px;
  color: var(--txt-muted);
  font-family: var(--mono);
  line-height: 1.6;
}

/* ─── Toast ─── */
#toast {
  position: fixed;
  bottom: 28px; right: 28px;
  background: var(--bg-card);
  border: 1px solid var(--accent);
  color: var(--txt);
  padding: 12px 22px;
  border-radius: 10px;
  font-size: 13px;
  font-weight: 500;
  font-family: var(--mono);
  backdrop-filter: blur(12px);
  transform: translateY(80px);
  opacity: 0;
  transition: all 0.35s;
  z-index: 2000;
  pointer-events: none;
}

#toast.show { transform: translateY(0); opacity: 1; }

/* ─── Responsive ─── */
@media (max-width: 768px) {
  .explication  { padding: 20px 20px; }
  .outils       { padding: 20px; }
  .articles-grid { grid-template-columns: 1fr; }
  .veille-search { width: 100%; margin-left: 0; }
}
</style>
</head>

<?php include('includes/script.php'); ?>

<body>
<?php include('includes/header.php'); ?>

<main style="padding-top: 80px;">
<div class="veille-page">

<!-- ─── HERO ─── -->
<section class="veille-hero" aria-label="Veille technologique">
  <div class="veille-eyebrow">
    <span class="dot" aria-hidden="true"></span>
    Veille active — mise à jour automatique
  </div>
  <h1>IA &amp; Développement Web</h1>
  <p>Suivi des outils, modèles et pratiques qui transforment le métier de développeur en 2024–2025.</p>
</section>

<!-- ─── EXPLICATION ─── -->
<section class="explication" aria-label="À propos de cette veille">
  <p>
    Cette veille technologique est centrée sur un thème majeur :
    <strong>l'intelligence artificielle appliquée au développement web</strong>.
    J'y suis l'évolution des assistants de code, l'émergence de nouveaux modèles de langage,
    leur impact réel sur les pratiques des développeurs, ainsi que les risques et limites qu'ils soulèvent.
  </p>
  <p>Les articles sont collectés automatiquement depuis des sources de référence, triés par date et organisés en quatre axes :</p>
  <ul>
    <li>Assistants IA &amp; outils</li>
    <li>Modèles &amp; recherche IA</li>
    <li>Impact &amp; pratiques dev</li>
    <li>Sécurité &amp; limites de l'IA</li>
  </ul>
</section>

<!-- ─── POURQUOI CE THÈME ─── -->
<div class="pourquoi" role="list" aria-label="Raisons de ce sujet de veille">
  <div class="pourquoi-card" role="listitem">
    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="26" height="26" aria-hidden="true"><circle cx="13" cy="11" r="8"/><path d="M13 3v2m0 12v2M5 11H3m18 0h-2M7.05 7.05 5.636 5.636m12.728 0L16.95 7.05M7.05 14.95l-1.414 1.414m12.728 0L16.95 14.95"/></svg>
    <h4>Actualité brûlante</h4>
    <p>GitHub Copilot, Claude, GPT-4o, Cursor… les sorties majeures se succèdent chaque mois depuis 2024.</p>
  </div>
  <div class="pourquoi-card" role="listitem">
    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="26" height="26" aria-hidden="true"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
    <h4>Impact direct sur le métier</h4>
    <p>Ces outils changent concrètement la façon d'écrire du code, de tester et de déboguer au quotidien.</p>
  </div>
  <div class="pourquoi-card" role="listitem">
    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="26" height="26" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
    <h4>Risques réels à connaître</h4>
    <p>Hallucinations, vulnérabilités, dépendance aux suggestions : comprendre les limites est essentiel.</p>
  </div>
  <div class="pourquoi-card" role="listitem">
    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="26" height="26" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
    <h4>Débat de société</h4>
    <p>L'IA va-t-elle remplacer les devs ? Qui détient le copyright du code généré ? Questions cruciales.</p>
  </div>
</div>

<!-- ─── THÈMES (cards dépliables) ─── -->
<div class="themes-grid" id="themes" role="list" aria-label="Axes thématiques">
  <div class="theme-card" role="listitem" onclick="toggleDetails('assistants-details')" aria-expanded="false">
    <h3>Assistants IA &amp; outils</h3>
    <p>GitHub Copilot, Cursor, Windsurf, Amazon Q… les éditeurs intelligents qui s'intègrent dans votre IDE.</p>
    <span class="theme-badge">Productivité</span>
  </div>
  <div class="theme-card" role="listitem" onclick="toggleDetails('modeles-details')" aria-expanded="false">
    <h3>Modèles &amp; recherche IA</h3>
    <p>GPT-4o, Claude 3.5, Llama 3.1, DeepSeek-R1… l'évolution rapide des LLMs qui alimentent ces outils.</p>
    <span class="theme-badge">LLMs</span>
  </div>
  <div class="theme-card" role="listitem" onclick="toggleDetails('impact-details')" aria-expanded="false">
    <h3>Impact &amp; pratiques dev</h3>
    <p>Études empiriques, retours d'expérience et nouvelles pratiques que l'IA impose aux équipes dev.</p>
    <span class="theme-badge">Workflow</span>
  </div>
  <div class="theme-card" role="listitem" onclick="toggleDetails('securite-details')" aria-expanded="false">
    <h3>Sécurité &amp; limites de l'IA</h3>
    <p>Hallucinations, vulnérabilités, prompt injection, copyright du code généré — les angles sombres.</p>
    <span class="theme-badge">Risques</span>
  </div>
</div>

<!-- Détails dépliables -->
<div class="theme-details" id="assistants-details">
  <ul>
    <li>GitHub Copilot Workspace : de l'issue au pull request — <a href="https://github.blog/2024-04-29-github-copilot-workspace/" target="_blank" rel="noopener">GitHub Blog</a></li>
    <li>Cursor vs Copilot : intégration IA plus profonde dans l'éditeur — <a href="https://www.cursor.com/blog/cursor-vs-copilot" target="_blank" rel="noopener">Cursor Blog</a></li>
    <li>Windsurf (Codeium) : agent de développement intégré — <a href="https://codeium.com/blog/windsurf-editor-release" target="_blank" rel="noopener">Codeium Blog</a></li>
    <li>Copilot multi-modèles : GPT-4o, Claude ou Gemini au choix — <a href="https://github.blog/2024-12-18-github-copilot-multi-model-support/" target="_blank" rel="noopener">GitHub Blog</a></li>
  </ul>
</div>
<div class="theme-details" id="modeles-details">
  <ul>
    <li>GPT-4o : modèle multimodal d'OpenAI, moitié prix pour les devs — <a href="https://openai.com/index/hello-gpt-4o/" target="_blank" rel="noopener">OpenAI</a></li>
    <li>Claude 3.5 Sonnet : nouveau champion des benchmarks de code — <a href="https://www.anthropic.com/news/claude-3-5-sonnet" target="_blank" rel="noopener">Anthropic</a></li>
    <li>Llama 3.1 405B open-source : auto-héberger un LLM frontier — <a href="https://ai.meta.com/blog/meta-llama-3-1/" target="_blank" rel="noopener">Meta AI</a></li>
    <li>DeepSeek-R1 : raisonnement open-source au niveau de o1 — <a href="https://github.com/deepseek-ai/DeepSeek-R1" target="_blank" rel="noopener">DeepSeek AI</a></li>
  </ul>
</div>
<div class="theme-details" id="impact-details">
  <ul>
    <li>Stack Overflow Survey 2024 : 62 % des devs utilisent l'IA au quotidien — <a href="https://survey.stackoverflow.co/2024/ai/" target="_blank" rel="noopener">Stack Overflow</a></li>
    <li>L'IA génère-t-elle du code de qualité ? Étude empirique sur 10 000 contributions — <a href="https://www.infoq.com/articles/ai-code-quality-study-2024/" target="_blank" rel="noopener">InfoQ</a></li>
    <li>Vibe coding : coder à l'instinct avec l'IA, bonne idée ? — <a href="https://stackoverflow.blog/2025/02/vibe-coding-ai-risks/" target="_blank" rel="noopener">Stack Overflow Blog</a></li>
    <li>Génération auto de tests : Copilot, CodiumAI et Diffblue comparés — <a href="https://www.smashingmagazine.com/2024/10/ai-test-generation-tools-review/" target="_blank" rel="noopener">Smashing Magazine</a></li>
  </ul>
</div>
<div class="theme-details" id="securite-details">
  <ul>
    <li>Hallucinations de packages npm : une menace réelle — <a href="https://www.infoq.com/articles/llm-package-hallucination-security/" target="_blank" rel="noopener">InfoQ</a></li>
    <li>Stanford : les devs avec Copilot écrivent du code moins sécurisé — <a href="https://www.technologyreview.com/2024/08/stanford-copilot-security-study/" target="_blank" rel="noopener">MIT Tech Review</a></li>
    <li>Prompt injection dans les agents IA : nouveau vecteur d'attaque — <a href="https://www.infoq.com/articles/prompt-injection-ai-agents-security/" target="_blank" rel="noopener">InfoQ</a></li>
    <li>Copyright du code généré par IA : état du droit en 2024 — <a href="https://www.technologyreview.com/2024/11/ai-code-copyright-legal-status/" target="_blank" rel="noopener">MIT Tech Review</a></li>
  </ul>
</div>

<!-- ─── FLUX D'ARTICLES ─── -->
<section class="veille-section" aria-label="Flux d'articles en direct">

  <div class="veille-header">
    <h2>Articles — flux en direct</h2>
    <button class="refresh-btn" id="refreshBtn" onclick="refreshArticles()" aria-label="Actualiser les articles">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/>
        <path d="M21 3v5h-5"/>
        <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/>
        <path d="M8 16H3v5"/>
      </svg>
      Actualiser
    </button>
  </div>

  <div class="veille-stats" role="status" aria-live="polite">
    <span><strong id="statTotal">—</strong> articles en archive</span>
    <span><strong id="statNew">—</strong> nouveaux</span>
    <span>Dernière mise à jour : <strong id="statDate">—</strong></span>
  </div>

  <div class="veille-controls" role="group" aria-label="Filtres par catégorie">
    <button class="filter-pill active" data-cat="all"                          onclick="setFilter(this,'all')">Tous</button>
    <button class="filter-pill"        data-cat="Assistants IA & outils"       onclick="setFilter(this,'Assistants IA &amp; outils')">Assistants IA</button>
    <button class="filter-pill"        data-cat="Modèles & recherche IA"        onclick="setFilter(this,'Modèles &amp; recherche IA')">Modèles &amp; recherche</button>
    <button class="filter-pill"        data-cat="Impact & pratiques dev"        onclick="setFilter(this,'Impact &amp; pratiques dev')">Impact dev</button>
    <button class="filter-pill"        data-cat="Sécurité & limites de l'IA"   onclick="setFilter(this,&quot;Sécurité &amp; limites de l'IA&quot;)">Sécurité &amp; limites</button>
    <input  class="veille-search" type="search" id="searchInput" placeholder="Rechercher un article…" oninput="onSearch()" aria-label="Rechercher dans les articles">
  </div>

  <div class="articles-grid" id="articlesGrid" role="list" aria-live="polite">
    <div class="veille-loader">Chargement des articles…</div>
  </div>

</section>

<!-- ─── OUTILS DE VEILLE ─── -->
<div class="outils" aria-label="Outils utilisés pour la veille">
  <h2>Outils de veille</h2>
  <div class="outils-grid">
    <div class="outil-item">
      <strong>Flux RSS automatisés</strong>
      <p>GitHub Blog, Stack Overflow, Anthropic, OpenAI, InfoQ, MIT Tech Review — agrégés toutes les 6h.</p>
    </div>
    <div class="outil-item">
      <strong>Cron planifié</strong>
      <p>Mise à jour automatique en arrière-plan, aucune intervention manuelle requise.</p>
    </div>
    <div class="outil-item">
      <strong>GitHub Release Tracker</strong>
      <p>Suivi des nouvelles versions de Copilot, Cursor, LangChain, LlamaIndex et autres projets IA.</p>
    </div>
    <div class="outil-item">
      <strong>Hacker News &amp; Reddit</strong>
      <p>Détection des discussions communautaires sur l'IA dans le dev : r/programming, r/MachineLearning.</p>
    </div>
    <div class="outil-item">
      <strong>Benchmarks publics</strong>
      <p>HumanEval, SWE-bench, MBPP — les classements officiels pour évaluer les LLMs sur des tâches de code.</p>
    </div>
  </div>
</div>

</div><!-- /veille-page -->
</main>

<div id="toast" role="alert" aria-live="assertive"></div>

<?php include('includes/footer.php'); ?>

<script>
/* ══════════════════════════════════════════════
   VEILLE TECH — JavaScript
══════════════════════════════════════════════ */

let currentCat = 'all';
let currentQ   = '';
let debounceT  = null;

/* ─── Mapping catégorie → style visuel ─── */
const CAT_STYLES = {
  'Assistants IA & outils': {
    cls  : 'cat-assistants',
    label: 'Assistants IA',
    icon : `<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><line x1="12" y1="7" x2="12" y2="11"/><line x1="7" y1="16" x2="7" y2="16" stroke-width="2"/><line x1="12" y1="16" x2="12" y2="16" stroke-width="2"/><line x1="17" y1="16" x2="17" y2="16" stroke-width="2"/></svg>`
  },
  'Modèles & recherche IA': {
    cls  : 'cat-modeles',
    label: 'Modèles & IA',
    icon : `<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a5 5 0 1 0 0 10A5 5 0 0 0 12 2z"/><path d="M2 20c0-4 4.5-7 10-7s10 3 10 7"/><path d="M9 9l-2 3h2l-2 3"/><path d="M15 9l2 3h-2l2 3"/></svg>`
  },
  'Impact & pratiques dev': {
    cls  : 'cat-impact',
    label: 'Impact Dev',
    icon : `<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>`
  },
  "Sécurité & limites de l'IA": {
    cls  : 'cat-securite',
    label: 'Sécurité IA',
    icon : `<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>`
  }
};

const DEFAULT_STYLE = {
  cls  : 'cat-default',
  label: 'Tech',
  icon : `<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>`
};

function getCatStyle(cat) {
  return CAT_STYLES[cat] || DEFAULT_STYLE;
}

/* ─── Utilitaires ─── */
function formatDate(ts) {
  if (!ts) return '—';
  const d    = new Date(ts * 1000);
  const now  = new Date();
  const diff = Math.floor((now - d) / 1000);
  if (diff < 3600)   return Math.floor(diff / 60) + ' min';
  if (diff < 86400)  return Math.floor(diff / 3600) + 'h';
  if (diff < 604800) return Math.floor(diff / 86400) + 'j';
  return d.toLocaleDateString('fr-FR', { day: '2-digit', month: 'short', year: 'numeric' });
}

function escHtml(s) {
  if (!s) return '';
  return String(s)
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;');
}

/* ─── Rendu des articles ─── */
function renderArticles(articles, newCount, total, lastUpdate) {
  const grid = document.getElementById('articlesGrid');

  document.getElementById('statTotal').textContent = total ?? articles.length;
  document.getElementById('statNew').textContent   = newCount ?? 0;
  document.getElementById('statDate').textContent  = lastUpdate
    ? new Date(lastUpdate).toLocaleString('fr-FR', { day:'2-digit', month:'short', hour:'2-digit', minute:'2-digit' })
    : '—';

  if (!articles.length) {
    grid.innerHTML = '<div class="veille-empty">Aucun article trouvé.</div>';
    return;
  }

  let html      = '';
  let lastMonth = null;

  articles.forEach(a => {
    const d        = new Date((a.timestamp ?? 0) * 1000);
    const month    = d.toLocaleDateString('fr-FR', { month: 'long', year: 'numeric' });
    const style    = getCatStyle(a.category ?? '');

    if (month !== lastMonth) {
      html += `<div class="timeline-sep">${month}</div>`;
      lastMonth = month;
    }

    const hasImg   = a.image && a.image.startsWith('http');
    const thumbCls = hasImg ? 'has-img' : style.cls;
    const thumbSty = hasImg ? ` style="background-image:url('${escHtml(a.image)}')"` : '';

    html += `
      <article class="article-card ${a.isNew ? 'is-new' : ''}" role="listitem">
        <div class="article-thumb ${thumbCls}"${thumbSty} aria-hidden="true">
          <div class="article-thumb-icon">${style.icon}</div>
          <div class="article-thumb-cat">${escHtml(style.label)}</div>
        </div>
        <div class="article-body">
          <div class="article-meta">
            <span class="article-source">${escHtml(a.source)}</span>
            ${a.isNew ? '<span class="new-badge">Nouveau</span>' : ''}
            <span class="article-date">${formatDate(a.timestamp)}</span>
          </div>
          <h3 class="article-title">${escHtml(a.title)}</h3>
          ${a.excerpt ? `<p class="article-excerpt">${escHtml(a.excerpt)}</p>` : ''}
          <div class="article-footer">
            <span class="article-cat-tag">${escHtml(a.category)}</span>
            <a class="article-link" href="${escHtml(a.url)}" target="_blank" rel="noopener noreferrer">
              Lire l'article →
            </a>
          </div>
        </div>
      </article>`;
  });

  grid.innerHTML = html;
}

/* ─── Chargement ─── */
function loadArticles() {
  const catParam = currentCat.replace(/&amp;/g, '&').replace(/&#039;/g, "'");
  const params   = new URLSearchParams({ action: 'list', cat: catParam, q: currentQ });

  fetch('api_articles.php?' + params)
    .then(r => r.json())
    .then(data => {
      if (data.success) {
        renderArticles(data.articles, data.newCount, data.total, data.lastUpdate);
        if (data.newCount > 0) {
          fetch('api_articles.php', { method:'POST', body: new URLSearchParams({ action:'markRead' }) });
        }
      } else {
        document.getElementById('articlesGrid').innerHTML =
          '<div class="veille-empty">Impossible de charger les articles.<br>Lance <code>fetch_articles.php</code> une première fois.</div>';
      }
    })
    .catch(() => {
      document.getElementById('articlesGrid').innerHTML =
        '<div class="veille-empty">Erreur de connexion à l\'API.</div>';
    });
}

function setFilter(btn, cat) {
  document.querySelectorAll('.filter-pill').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  currentCat = cat;
  loadArticles();
}

function onSearch() {
  clearTimeout(debounceT);
  debounceT = setTimeout(() => {
    currentQ = document.getElementById('searchInput').value.trim();
    loadArticles();
  }, 380);
}

function refreshArticles() {
  const btn = document.getElementById('refreshBtn');
  btn.disabled = true;
  btn.classList.add('spinning');

  fetch('api_articles.php', { method:'POST', body: new URLSearchParams({ action:'refresh' }) })
    .then(r => r.json())
    .then(data => {
      showToast(data.new > 0
        ? `✓ ${data.new} nouvel${data.new > 1 ? 's' : ''} article${data.new > 1 ? 's' : ''} ajouté${data.new > 1 ? 's' : ''}`
        : '✓ Veille à jour — aucun nouvel article');
      loadArticles();
    })
    .catch(() => showToast('Erreur lors de l\'actualisation'))
    .finally(() => { btn.disabled = false; btn.classList.remove('spinning'); });
}

function showToast(msg) {
  const t = document.getElementById('toast');
  t.textContent = msg;
  t.classList.add('show');
  setTimeout(() => t.classList.remove('show'), 3500);
}

function toggleDetails(id) {
  document.querySelectorAll('.theme-details').forEach(el => {
    if (el.id !== id) { el.style.display = 'none'; }
  });
  const box  = document.getElementById(id);
  const card = box.previousElementSibling;
  const open = box.style.display === 'block';
  box.style.display = open ? 'none' : 'block';
  if (card) card.setAttribute('aria-expanded', String(!open));
}

/* Démarrage */
loadArticles();
</script>
</body>
</html>
