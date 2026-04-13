            <div class="Competences">
                <h2>Compétences & Outils</h2>

                <h3>Technologies Web</h3>
                <div id="definitionBox" style="margin-top: 20px; padding: 10px; border: 1px solid #ccc; display: none;">
                </div>
                <div>

                    <div class="skill"
                        data-definition="java est un langage de programmation orienté objet, utilisé pour développer des applications web, mobiles et d'entreprise.">
                        <h4>Java</h4><img src="/assets/images/java-svgrepo-com.svg" alt="">
                    </div>
                    <div class="skill"
                        data-definition="python est un langage de programmation interprété, utilisé pour le développement web, l'analyse de données et l'intelligence artificielle.">
                        <h4>Python</h4><img src="/assets/images/python-svgrepo-com.svg" alt="">
                    </div>
                    <div class="skill"
                        data-definition="javascript est un langage de programmation interprété, principalement utilisé pour créer des pages web interactives.">
                        <h4>JavaScript</h4><img src="/assets/images/javascript-icon.svg" alt="">
                    </div>
                    <div class="skill"
                        data-definition="html est le langage de balisage standard pour créer des pages web.">
                        <h4>HTML</h4><img src="/assets/images/html5.svg" alt="">
                    </div>
                    <div class="skill"
                        data-definition="css est un langage de style utilisé pour décrire la présentation des documents HTML.">
                        <h4>CSS</h4><img src="/assets/images/css.svg" alt="">
                    </div>
                    <div class="skill"
                        data-definition="react est une bibliothèque JavaScript pour construire des interfaces utilisateur.">
                        <h4>React</h4><img src="/assets/images/react-svgrepo-com.svg" alt="">
                    </div>
                    <div class="skill"
                        data-definition="node.js est un environnement d'exécution JavaScript côté serveur.">
                        <h4>Node.js</h4><img src="/assets/images/nodejs-1-logo-svgrepo-com.svg" alt="">
                    </div>
                    <div class="skill"
                        data-definition="tailwind css est un framework CSS utilitaire pour créer des designs modernes et réactifs.">
                        <h4>Tailwind</h4><img src="/assets/images/tailwind-css-svgrepo-com.svg" alt="">
                    </div>
                    <div class="skill"
                        data-definition="bootstrap est un framework CSS populaire pour le développement d'interfaces web réactives.">
                        <h4>Bootstrap</h4><img src="/assets/images/bootstrap-5-1.svg" alt="">
                    </div>
                    <div class="skill"
                        data-definition="php est un langage de script côté serveur, principalement utilisé pour le développement web.">
                        <h4>PHP</h4><img src="/assets/images/php-ar21.svg" alt="">
                    </div>

                </div>
                <h3>Outils et Environnements</h3>
                <div id="definitionBo" style="margin-top: 20px; padding: 10px; border: 1px solid #ccc; display: none;">
                </div>
                <div>


                    <div class="skills"
                        data-definition="git est un système de contrôle de version distribué, utilisé pour suivre les modifications dans le code source.">
                        <h4>Git</h4><img src="/assets/images/git-svgrepo-com.svg" alt="">
                    </div>
                    <div class="skills"
                        data-definition="github est une plateforme de développement collaboratif qui utilise git pour le versionnage de code.">
                        <h4>GitHub</h4><img src="/assets/images/github-142-svgrepo-com (1).svg" alt="">
                    </div>

                    <div class="skills"
                        data-definition="visual studio code est un éditeur de code source développé par microsoft, qui prend en charge le développement dans plusieurs langages de programmation.">
                        <h4>VS Code</h4><img src="/assets/images/Visual Studio Code (VS Code).svg" alt="">
                    </div>
                    <div class="skills"
                        data-definition="linux est un système d'exploitation open source basé sur le noyau linux.">
                        <h4>Linux</h4><img src="/assets/images/linux-svgrepo-com.svg" alt="">
                    </div>
                    <div class="skills"
                        data-definition="mysql est un système de gestion de base de données relationnelle open source.">
                        <h4>MySQL</h4><img src="/assets/images/MySQL.svg" alt="">
                    </div>
                    <div class="skills"
                        data-definition="wordpress est un système de gestion de contenu open source, utilisé pour créer des sites web et des blogs.">
                        <h4>WordPress</h4><img src="/assets/images/wordpress-color-svgrepo-com.svg" alt="">
                    </div>
                    <div class="skills"
                        data-definition="canva est un outil de conception graphique en ligne, utilisé pour créer des visuels pour le web et l'impression.">
                        <h4>Canva</h4><img src="/assets/images/Canva.svg" alt="">
                    </div>
                    <div class="skills"
                        data-definition="figma est un outil de conception d'interface utilisateur basé sur le cloud, utilisé pour la conception de maquettes et de prototypes.">
                        <h4>Figma</h4><img src="/assets/images/figma-svgrepo-com.svg" alt="">
                    </div>
                </div>
            </div>
        <script>
// On sélectionne les deux boîtes
const definitionBox = document.getElementById('definitionBox');
const definitionBo = document.getElementById('definitionBo');

document.querySelectorAll('.skill').forEach(skill => {
    skill.addEventListener('click', (e) => {
        e.stopPropagation(); // Empêche la fermeture immédiate au clic
        const definition = skill.getAttribute('data-definition');
        definitionBox.textContent = definition;
        definitionBox.style.display = 'block';
    });
});

document.querySelectorAll('.skills').forEach(skills => {
    skills.addEventListener('click', (e) => {
        e.stopPropagation();
        const definition = skills.getAttribute('data-definition');
        definitionBo.textContent = definition;
        definitionBo.style.display = 'block';
    });
});

// Système de fermeture globale
document.addEventListener('click', () => {
    definitionBox.style.display = 'none';
    definitionBo.style.display = 'none';
});
        </script>
        <style>



.Competences {
    color: white;
    padding: 90px 20px;
    font-family: 'Segoe UI', Roboto, sans-serif;
    text-align: center;
}

.Competences h2 {
    font-size: 2.5rem;
    color: #3C35FC;
    letter-spacing: 4px;
    margin-bottom: 50px;

}

.Competences h3 {
    margin: 40px 0 20px;
    font-weight: 300;
    opacity: 0.8;
    border-bottom: 1px solid var(--card-bg);
    display: inline-block;
    color: #3C35FC;
    padding-bottom: 10px;
}

/* Container des skills */
.Competences > div {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 25px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 10px;
}

/* Style de chaque carte de compétence */
.skill, .skills {
    background: var(--card-bg);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 20px;
    backdrop-filter: blur(10px);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    cursor: help;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
}

/* Effet au survol */


/* Animation de l'icône */
.skill img, .skills img {
    width: 50px;
    height: 50px;
    margin-top: 10px;
    transition: all 0.4s ease;
}

.skill:hover img, .skills:hover img {
    
    transform: rotate(360deg); /* Rotation légère pour le côté tech */
}

.skill h4, .skills h4 {
    font-size: 1rem;
    color: #3C35FC;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Boîte de définition (le texte qui apparaît) */
#definitionBox, #definitionBo {
    background: rgba(0, 242, 255, 0.05) !important;
    border: 1px solid var(--primary-glow) !important;
    color: var(--primary-glow);
    border-radius: 8px;
    font-style: italic;
    max-width: 600px;
    margin: 20px auto !important;
    box-shadow: 0 0 15px rgba(0, 242, 255, 0.1);
}
.skill,
.skills {
    cursor: pointer;
    padding: 10px;
    transition: background-color 0.2s;
}
#definitionBox {
    background-color: #ffe6034c;
    backdrop-filter: blur(5px);
    border-left: 4px solid #ff0000;
    font-style: italic;
        }
#definitionBo {
    background-color: #71ff8b69;
    backdrop-filter: blur(5px);
    border-left: 4px solid #ff3700;
    font-style: italic;
}
        </style>