            <div class="Competences">
                <h2>Compétences &amp; Outils</h2>

                <h3>Technologies Web</h3>
                <div id="techDefinitionBox"></div>
                <div class="skills-grid">
                    <div class="skill-card" data-definition="Python : langage interprété multi-usage, utilisé pour le web, l'analyse de données et l'IA.">
                        <img src="/assets/images/python-svgrepo-com.svg" alt="Python"><h4>Python</h4>
                    </div>
                    <div class="skill-card" data-definition="JavaScript : langage incontournable du web, côté client et serveur (Node.js).">
                        <img src="/assets/images/javascript-icon.svg" alt="JavaScript"><h4>JavaScript</h4>
                    </div>
                    <div class="skill-card" data-definition="HTML : langage de balisage standard pour structurer les pages web.">
                        <img src="/assets/images/html5.svg" alt="HTML"><h4>HTML</h4>
                    </div>
                    <div class="skill-card" data-definition="CSS : langage de style pour mettre en forme les documents HTML.">
                        <img src="/assets/images/css.svg" alt="CSS"><h4>CSS</h4>
                    </div>
                    <div class="skill-card" data-definition="React : bibliothèque JavaScript pour construire des interfaces utilisateur réactives.">
                        <img src="/assets/images/react-svgrepo-com.svg" alt="React"><h4>React</h4>
                    </div>
                    <div class="skill-card" data-definition="Node.js : environnement d'exécution JavaScript côté serveur, rapide et performant.">
                        <img src="/assets/images/nodejs-1-logo-svgrepo-com.svg" alt="Node.js"><h4>Node.js</h4>
                    </div>
                    <div class="skill-card" data-definition="Bootstrap : framework CSS pour créer des interfaces web responsives rapidement.">
                        <img src="/assets/images/bootstrap-5-1.svg" alt="Bootstrap"><h4>Bootstrap</h4>
                    </div>
                    <div class="skill-card" data-definition="PHP : langage de script côté serveur, largement utilisé pour le développement web dynamique.">
                        <img src="/assets/images/php-ar21.svg" alt="PHP"><h4>PHP</h4>
                    </div>
                </div>

                <h3>Outils &amp; Environnements</h3>
                <div id="toolDefinitionBox"></div>
                <div class="skills-grid">
                    <div class="tools-card" data-definition="Git : système de contrôle de version distribué pour suivre les modifications du code.">
                        <img src="/assets/images/git-svgrepo-com.svg" alt="Git"><h4>Git</h4>
                    </div>
                    <div class="tools-card" data-definition="GitHub : plateforme de développement collaboratif basée sur Git.">
                        <img src="/assets/images/github-142-svgrepo-com (1).svg" alt="GitHub"><h4>GitHub</h4>
                    </div>
                    <div class="tools-card" data-definition="VS Code : éditeur de code léger et extensible par Microsoft.">
                        <img src="/assets/images/Visual Studio Code (VS Code).svg" alt="VS Code"><h4>VS Code</h4>
                    </div>
                    <div class="tools-card" data-definition="MySQL : système de gestion de bases de données relationnelles open source.">
                        <img src="/assets/images/MySQL.svg" alt="MySQL"><h4>MySQL</h4>
                    </div>
                    <div class="tools-card" data-definition="WordPress : CMS open source, idéal pour créer des sites web et blogs.">
                        <img src="/assets/images/wordpress-color-svgrepo-com.svg" alt="WordPress"><h4>WordPress</h4>
                    </div>
                    <div class="tools-card" data-definition="Canva : outil de conception graphique en ligne pour visuels web et print.">
                        <img src="/assets/images/Canva.svg" alt="Canva"><h4>Canva</h4>
                    </div>
                    <div class="tools-card" data-definition="Figma : outil de design UI/UX collaboratif basé sur le cloud.">
                        <img src="/assets/images/figma-svgrepo-com.svg" alt="Figma"><h4>Figma</h4>
                    </div>
                </div>
            </div>

        <script>
        const techBox = document.getElementById('techDefinitionBox');
        const toolBox = document.getElementById('toolDefinitionBox');

        document.querySelectorAll('.skill-card').forEach(card => {
            card.addEventListener('click', e => {
                e.stopPropagation();
                techBox.textContent = card.getAttribute('data-definition');
                techBox.style.display = 'block';
                toolBox.style.display = 'none';
            });
        });

        document.querySelectorAll('.tools-card').forEach(card => {
            card.addEventListener('click', e => {
                e.stopPropagation();
                toolBox.textContent = card.getAttribute('data-definition');
                toolBox.style.display = 'block';
                techBox.style.display = 'none';
            });
        });

        document.addEventListener('click', () => {
            techBox.style.display = 'none';
            toolBox.style.display = 'none';
        });
        </script>

        <style>
.Competences {
    padding: 80px 20px;
    text-align: center;
    max-width: 1200px;
    margin: 0 auto;
}

.Competences h2 {
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    color: var(--txt);
    font-weight: 800;
    letter-spacing: -0.5px;
    margin-bottom: 12px;
}

.Competences h2 span { color: var(--accent); }

.Competences h3 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--accent);
    margin: 36px 0 16px;
    text-transform: uppercase;
    letter-spacing: 2px;
    display: inline-block;
    border-bottom: 2px solid var(--accent);
    padding-bottom: 6px;
}

.skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
    gap: 16px;
    max-width: 1100px;
    margin: 0 auto;
    padding: 8px;
}

.skill-card, .tools-card {
    background: var(--bg-card);
    border: 1.5px solid var(--border);
    border-radius: var(--radius);
    padding: 20px 14px;
    cursor: pointer;
    transition: all var(--tr);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    box-shadow: var(--shadow-sm);
}

.skill-card:hover, .tools-card:hover {
    border-color: var(--accent);
    transform: translateY(-4px);
    box-shadow: var(--shadow-a);
    background: var(--bg-hover);
}

.skill-card img, .tools-card img {
    width: 44px;
    height: 44px;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.skill-card:hover img, .tools-card:hover img {
    transform: rotate(10deg) scale(1.1);
}

.skill-card h4, .tools-card h4 {
    font-size: 0.85rem;
    color: var(--txt);
    font-weight: 600;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

#techDefinitionBox, #toolDefinitionBox {
    display: none;
    max-width: 600px;
    margin: 12px auto 20px;
    padding: 14px 20px;
    background: var(--accent-lit2);
    border-left: 3px solid var(--accent);
    border-radius: 0 8px 8px 0;
    font-style: italic;
    font-size: 14px;
    color: var(--txt-muted);
    text-align: left;
}
        </style>
