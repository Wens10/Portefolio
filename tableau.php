<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de synthèse BTS SIO</title>
    <meta description="Ce document présente le tableau de synthèse des compétences acquises dans le cadre du BTS SIO.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Mr Wens" />
    <link rel="manifest" href="/site.webmanifest" />
</head>
<?php include('includes/script.php'); ?>

<body>
    <?php include('includes/header.php'); ?>
    <main>
       <style>
           :root {
               --primary-blue: #3C35FC;
               --dark-bg: #0a0b10;
               --card-bg: rgba(255, 255, 255, 0.03);
               --border-color: rgba(60, 53, 252, 0.3);
               --text-light: #f4f4f9;
           }
       
           body {
               background-color: var(--dark-bg);
               color: var(--text-light);
               font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
               line-height: 1.6;
           }
       
           section {
               max-width: 1500px;
               margin: 40px auto;
               padding: 20px;
               animation: fadeIn 0.8s ease-out;
           }
       
           h1 {
               font-weight: 700;
               letter-spacing: 1px;
               text-transform: uppercase;
               margin-bottom: 30px;
               position: relative;
           }
       
           /* Style spécifique au Tableau de Synthèse */
           .summary-container {
               background: var(--card-bg);
               backdrop-filter: blur(10px);
               border: 1px solid var(--border-color);
               border-radius: 15px;
               padding: 30px;
               text-align: center;
               box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
           }
       
           embed {
               border-radius: 8px;
               box-shadow: 0 0 20px rgba(60, 53, 252, 0.2);
               max-width: 100%;
           }
       
       
       
           /* Boutons Modernes & Futuristes */
           .btn-main {
               width: 100%;
               padding: 15px 20px;
               background: var(--card-bg);
               color: white;
               border: 1px solid var(--border-color);
               border-radius: 10px;
               cursor: pointer;
               font-size: 14px;
               font-weight: 600;
               transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
               display: flex;
               align-items: center;
               justify-content: center;
               text-align: center;
           }
       
           button:hover {
               border-color: white;
               transform: translateY(-5px);
               box-shadow: 0 5px 15px rgba(60, 53, 252, 0.4);
           }
       
           .btn-main {
               background: var(--primary-blue);
               margin-top: 20px;
               max-width: 300px;
               display: inline-flex;
           }
       
           a {
               text-decoration: none;
           }
       
           /* Animations */
           @keyframes fadeIn {
               from { opacity: 0; transform: translateY(20px); }
               to { opacity: 1; transform: translateY(0); }
           }
       
           @media (max-width: 768px) {
               embed { height: 500px; }
               
           }
       </style>
       
       <section>
           <div class="summary-container">
               <h1 style="color: var(--primary-blue);">Tableau de synthèse</h1>
               <embed src="/assets/images/TB DE SYNTHESE.pdf" width="100%" height="800px" type="application/pdf" />
               <br>
               <a href="/assets/images/TB DE SYNTHESE.pdf" target="_blank">
                   <button class="btn-main">Ouvrir le document complet</button>
               </a>
           </div>
       </section>
       
       
       
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>