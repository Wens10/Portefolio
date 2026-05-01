<?php
/**
 * seed_articles.php
 * A executer UNE SEULE FOIS pour pre-charger l'historique depuis 2024.
 * Ensuite fetch_articles.php prend le relais pour les nouveaux articles.
 * Lance : php seed_articles.php
 */

define('ARTICLES_FILE', __DIR__ . '/data/articles.json');

if (!is_dir(__DIR__ . '/data')) {
    mkdir(__DIR__ . '/data', 0755, true);
}

$seedArticles = [

    // ══════════════════════════════════════════════════════
    //  Assistants IA & outils — 2024 / 2025
    // ══════════════════════════════════════════════════════

    [
        'title'    => 'GitHub Copilot dépasse le million de développeurs payants',
        'url'      => 'https://github.blog/2024-02-29-github-copilot-surpasses-1-3-million-paid-subscribers/',
        'source'   => 'GitHub Blog',
        'category' => 'Assistants IA & outils',
        'excerpt'  => 'GitHub annonce que Copilot dépasse 1,3 million d\'abonnés payants, avec une accélération de l\'adoption dans les équipes enterprise. Les modèles GPT-4 alimentent désormais les suggestions.',
        'date'     => '2024-02-29',
    ],
    [
        'title'    => 'GitHub Copilot Workspace : de l\'issue au pull request en IA',
        'url'      => 'https://github.blog/2024-04-29-github-copilot-workspace/',
        'source'   => 'GitHub Blog',
        'category' => 'Assistants IA & outils',
        'excerpt'  => 'GitHub présente Copilot Workspace, un environnement de développement piloté par IA capable de planifier, implémenter et tester des changements de code à partir d\'une simple issue GitHub.',
        'date'     => '2024-04-29',
    ],
    [
        'title'    => 'Cursor : l\'éditeur de code IA qui rivalise avec VS Code',
        'url'      => 'https://www.cursor.com/blog/cursor-vs-copilot',
        'source'   => 'Cursor Blog',
        'category' => 'Assistants IA & outils',
        'excerpt'  => 'Cursor se distingue de GitHub Copilot en proposant une intégration IA plus profonde dans l\'éditeur : compréhension du projet entier, édition multi-fichiers et conversations contextuelles.',
        'date'     => '2024-06-12',
    ],
    [
        'title'    => 'Amazon Q Developer : l\'assistant IA pour les équipes AWS',
        'url'      => 'https://aws.amazon.com/blogs/devops/amazon-q-developer-generally-available/',
        'source'   => 'AWS DevOps Blog',
        'category' => 'Assistants IA & outils',
        'excerpt'  => 'Amazon Q Developer devient disponible en GA avec des fonctionnalités de complétion de code, de génération de tests unitaires et de transformation automatique de code Java legacy.',
        'date'     => '2024-07-30',
    ],
    [
        'title'    => 'Copilot Extensions : l\'écosystème de plugins IA pour GitHub',
        'url'      => 'https://github.blog/2024-10-29-github-copilot-extensions-are-generally-available/',
        'source'   => 'GitHub Blog',
        'category' => 'Assistants IA & outils',
        'excerpt'  => 'GitHub ouvre l\'écosystème Copilot aux extensions tierces : les développeurs peuvent désormais connecter des outils comme Sentry, Datadog ou Docker directement dans leurs conversations IA.',
        'date'     => '2024-10-29',
    ],
    [
        'title'    => 'Windsurf (ex-Codeium) : l\'IDE IA nouvelle génération',
        'url'      => 'https://codeium.com/blog/windsurf-editor-release',
        'source'   => 'Codeium Blog',
        'category' => 'Assistants IA & outils',
        'excerpt'  => 'Codeium lance Windsurf, un éditeur IA qui introduit le concept d\'agent de développement intégré capable d\'effectuer des tâches complexes sur plusieurs fichiers avec un contexte global.',
        'date'     => '2024-11-13',
    ],
    [
        'title'    => 'GitHub Copilot : les modèles au choix (GPT-4o, Claude, Gemini)',
        'url'      => 'https://github.blog/2024-12-18-github-copilot-multi-model-support/',
        'source'   => 'GitHub Blog',
        'category' => 'Assistants IA & outils',
        'excerpt'  => 'GitHub Copilot permet aux développeurs de choisir le modèle de langage sous-jacent : GPT-4o, Claude 3.5 Sonnet ou Gemini 1.5 Pro, ouvrant la voie à une vraie compétition de qualité.',
        'date'     => '2024-12-18',
    ],
    [
        'title'    => 'Claude 3.5 Sonnet dans VS Code : l\'intégration qui change la donne',
        'url'      => 'https://devblogs.microsoft.com/visualstudio/claude-3-5-sonnet-in-vs-code/',
        'source'   => 'Visual Studio Blog',
        'category' => 'Assistants IA & outils',
        'excerpt'  => 'Microsoft intègre Claude 3.5 Sonnet d\'Anthropic dans VS Code comme alternative à GPT-4o pour Copilot, avec des résultats particulièrement convaincants sur les tâches de refactoring complexe.',
        'date'     => '2025-01-15',
    ],
    [
        'title'    => 'Devin, le premier agent développeur autonome : bilan après 6 mois',
        'url'      => 'https://www.cognition.ai/blog/devin-retrospective',
        'source'   => 'Cognition AI Blog',
        'category' => 'Assistants IA & outils',
        'excerpt'  => 'Cognition dresse un bilan de Devin six mois après son lancement : où il excelle (tâches répétitives, migrations de code), où il échoue encore et comment les développeurs l\'utilisent réellement.',
        'date'     => '2025-02-20',
    ],

    // ══════════════════════════════════════════════════════
    //  Modèles & recherche IA — 2024 / 2025
    // ══════════════════════════════════════════════════════

    [
        'title'    => 'GPT-4o : le modèle multimodal d\'OpenAI pour les développeurs',
        'url'      => 'https://openai.com/index/hello-gpt-4o/',
        'source'   => 'OpenAI News',
        'category' => 'Modèles & recherche IA',
        'excerpt'  => 'OpenAI lance GPT-4o, capable de traiter texte, audio et images en temps réel avec une latence fortement réduite. Les développeurs bénéficient d\'un accès API à moitié prix par rapport à GPT-4 Turbo.',
        'date'     => '2024-05-13',
    ],
    [
        'title'    => 'Claude 3.5 Sonnet : nouveau champion des benchmarks de code',
        'url'      => 'https://www.anthropic.com/news/claude-3-5-sonnet',
        'source'   => 'Anthropic Blog',
        'category' => 'Modèles & recherche IA',
        'excerpt'  => 'Anthropic publie Claude 3.5 Sonnet qui s\'impose sur les benchmarks de coding (HumanEval, SWE-bench) et propose l\'artefact interactif pour générer et prévisualiser du code directement dans l\'interface.',
        'date'     => '2024-06-20',
    ],
    [
        'title'    => 'Gemini 1.5 Pro : 1 million de tokens de contexte pour les devs',
        'url'      => 'https://ai.google/static/documents/gemini-1-5-pro-long-context.pdf',
        'source'   => 'Google AI Blog',
        'category' => 'Modèles & recherche IA',
        'excerpt'  => 'Google rend Gemini 1.5 Pro accessible aux développeurs avec une fenêtre de contexte d\'un million de tokens, permettant d\'analyser des bases de code entières en une seule requête.',
        'date'     => '2024-09-24',
    ],
    [
        'title'    => 'o1 : le modèle de raisonnement d\'OpenAI face aux problèmes complexes',
        'url'      => 'https://openai.com/index/learning-to-reason-with-llms/',
        'source'   => 'OpenAI News',
        'category' => 'Modèles & recherche IA',
        'excerpt'  => 'OpenAI dévoile o1, un modèle entraîné à raisonner étape par étape avant de répondre. Ses performances sur des problèmes de mathématiques et de programmation complexes surpassent GPT-4o.',
        'date'     => '2024-09-12',
    ],
    [
        'title'    => 'Llama 3.1 : Meta open-source un modèle de 405 milliards de paramètres',
        'url'      => 'https://ai.meta.com/blog/meta-llama-3-1/',
        'source'   => 'Meta AI Blog',
        'category' => 'Modèles & recherche IA',
        'excerpt'  => 'Meta publie Llama 3.1 en open-source avec un modèle de 405B paramètres qui rivalise avec GPT-4o. Les développeurs peuvent désormais auto-héberger un LLM de classe frontier.',
        'date'     => '2024-07-23',
    ],
    [
        'title'    => 'Mistral Large 2 : le champion européen des LLMs pour développeurs',
        'url'      => 'https://mistral.ai/news/mistral-large-2407/',
        'source'   => 'Mistral AI Blog',
        'category' => 'Modèles & recherche IA',
        'excerpt'  => 'Mistral AI lance Large 2 avec 123B paramètres, d\'excellentes capacités de coding multi-langages et un support natif de 80 langues, se positionnant comme alternative souveraine aux modèles américains.',
        'date'     => '2024-07-24',
    ],
    [
        'title'    => 'Claude 3.5 Haiku : un modèle rapide et abordable pour l\'autocomplétion',
        'url'      => 'https://www.anthropic.com/news/claude-3-5-haiku',
        'source'   => 'Anthropic Blog',
        'category' => 'Modèles & recherche IA',
        'excerpt'  => 'Anthropic sort Claude 3.5 Haiku, conçu pour les cas d\'usage à haute fréquence comme l\'autocomplétion de code : vitesse d\'inférence maximale à un coût API minimal.',
        'date'     => '2024-11-04',
    ],
    [
        'title'    => 'DeepSeek-R1 : la percée open-source qui bouscule les LLMs',
        'url'      => 'https://github.com/deepseek-ai/DeepSeek-R1',
        'source'   => 'DeepSeek AI',
        'category' => 'Modèles & recherche IA',
        'excerpt'  => 'DeepSeek publie R1, un modèle de raisonnement open-source qui atteint les performances de o1 à une fraction du coût d\'entraînement, provoquant une réévaluation des stratégies LLM dans l\'industrie.',
        'date'     => '2025-01-20',
    ],

    // ══════════════════════════════════════════════════════
    //  Impact & pratiques dev — 2024 / 2025
    // ══════════════════════════════════════════════════════

    [
        'title'    => 'Stack Overflow Developer Survey 2024 : l\'IA s\'impose dans les workflows',
        'url'      => 'https://survey.stackoverflow.co/2024/ai/',
        'source'   => 'Stack Overflow Blog',
        'category' => 'Impact & pratiques dev',
        'excerpt'  => 'L\'enquête annuelle de Stack Overflow révèle que 62 % des développeurs utilisent désormais des outils IA dans leur travail quotidien, contre 44 % l\'année précédente. GitHub Copilot reste le leader.',
        'date'     => '2024-06-11',
    ],
    [
        'title'    => 'L\'IA génère-t-elle vraiment du code de qualité ? Une étude empirique',
        'url'      => 'https://www.infoq.com/articles/ai-code-quality-study-2024/',
        'source'   => 'InfoQ – AI/ML',
        'category' => 'Impact & pratiques dev',
        'excerpt'  => 'Des chercheurs analysent la qualité du code produit par les assistants IA sur 10 000 contributions GitHub. Verdict nuancé : la productivité augmente mais la dette technique aussi.',
        'date'     => '2024-08-07',
    ],
    [
        'title'    => 'Comment les développeurs seniors utilisent vraiment Copilot',
        'url'      => 'https://stackoverflow.blog/2024/09/how-senior-devs-use-copilot/',
        'source'   => 'Stack Overflow Blog',
        'category' => 'Impact & pratiques dev',
        'excerpt'  => 'Témoignages de développeurs expérimentés sur leur usage réel de GitHub Copilot : pour quelles tâches ils s\'y fient, quand ils ignorent ses suggestions et comment ils ont adapté leur workflow.',
        'date'     => '2024-09-18',
    ],
    [
        'title'    => 'Génération automatique de tests : les outils IA passés au crible',
        'url'      => 'https://www.smashingmagazine.com/2024/10/ai-test-generation-tools-review/',
        'source'   => 'Smashing Magazine',
        'category' => 'Impact & pratiques dev',
        'excerpt'  => 'Comparaison de Copilot, CodiumAI et Diffblue pour la génération automatique de tests unitaires. Quels outils produisent des tests pertinents, et lesquels ne font que remplir des tableaux de bord de couverture ?',
        'date'     => '2024-10-14',
    ],
    [
        'title'    => 'IA et développement front-end : de la maquette au composant React',
        'url'      => 'https://css-tricks.com/ai-frontend-design-to-code-2024/',
        'source'   => 'CSS-Tricks',
        'category' => 'Impact & pratiques dev',
        'excerpt'  => 'Les outils design-to-code comme v0 de Vercel, Locofy et Builder.io transforment les maquettes Figma en composants React. État des lieux des capacités et des limites actuelles.',
        'date'     => '2024-11-05',
    ],
    [
        'title'    => 'Le pair programming avec l\'IA : retour d\'expérience sur un an',
        'url'      => 'https://github.blog/2025-01-22-one-year-ai-pair-programming/',
        'source'   => 'GitHub Blog',
        'category' => 'Impact & pratiques dev',
        'excerpt'  => 'GitHub partage les données d\'utilisation d\'un an de Copilot : temps économisé par langage, taux d\'acceptation des suggestions, types de tâches où l\'IA aide le plus et celles où elle ralentit.',
        'date'     => '2025-01-22',
    ],
    [
        'title'    => 'Vibe coding : coder à l\'instinct avec l\'IA, bonne ou mauvaise idée ?',
        'url'      => 'https://stackoverflow.blog/2025/02/vibe-coding-ai-risks/',
        'source'   => 'Stack Overflow Blog',
        'category' => 'Impact & pratiques dev',
        'excerpt'  => 'Le "vibe coding" consiste à décrire ce qu\'on veut et laisser l\'IA écrire tout le code. Stack Overflow analyse les risques : dette technique, code illisible et compétences qui s\'atrophient.',
        'date'     => '2025-02-14',
    ],

    // ══════════════════════════════════════════════════════
    //  Sécurité & limites de l'IA — 2024 / 2025
    // ══════════════════════════════════════════════════════

    [
        'title'    => 'Hallucinations de code : quand Copilot invente des packages npm',
        'url'      => 'https://www.infoq.com/articles/llm-package-hallucination-security/',
        'source'   => 'InfoQ – AI/ML',
        'category' => 'Sécurité & limites de l\'IA',
        'excerpt'  => 'Des chercheurs démontrent que les LLMs inventent régulièrement des noms de packages npm et PyPI inexistants. Des attaquants publient ces faux packages en avance pour piéger les développeurs.',
        'date'     => '2024-06-04',
    ],
    [
        'title'    => 'CWE Top 25 : les vulnérabilités que le code IA reproduit le plus souvent',
        'url'      => 'https://www.infoq.com/articles/ai-generated-code-vulnerabilities-2024/',
        'source'   => 'InfoQ – AI/ML',
        'category' => 'Sécurité & limites de l\'IA',
        'excerpt'  => 'Une analyse de 2,4 millions de suggestions Copilot identifie les types de vulnérabilités les plus fréquemment introduites par le code IA : injections SQL, mauvaise gestion des secrets et XSS.',
        'date'     => '2024-07-18',
    ],
    [
        'title'    => 'Stanford : les développeurs utilisant Copilot écrivent du code moins sécurisé',
        'url'      => 'https://www.technologyreview.com/2024/08/stanford-copilot-security-study/',
        'source'   => 'MIT Technology Review',
        'category' => 'Sécurité & limites de l\'IA',
        'excerpt'  => 'Une étude de Stanford montre que les développeurs qui utilisent Copilot produisent en moyenne un code plus vulnérable, possiblement parce qu\'ils font trop confiance aux suggestions sans les auditer.',
        'date'     => '2024-08-22',
    ],
    [
        'title'    => 'Prompt injection dans les agents IA : un nouveau vecteur d\'attaque',
        'url'      => 'https://www.infoq.com/articles/prompt-injection-ai-agents-security/',
        'source'   => 'InfoQ – AI/ML',
        'category' => 'Sécurité & limites de l\'IA',
        'excerpt'  => 'Les agents IA capables d\'exécuter du code sont vulnérables aux attaques par injection de prompt dans les données qu\'ils lisent. Des chercheurs démontrent des attaques sur des agents de développement réels.',
        'date'     => '2024-10-01',
    ],
    [
        'title'    => 'Le Copyright du code généré par IA : état du droit en 2024',
        'url'      => 'https://www.technologyreview.com/2024/11/ai-code-copyright-legal-status/',
        'source'   => 'MIT Technology Review',
        'category' => 'Sécurité & limites de l\'IA',
        'excerpt'  => 'Peut-on revendiquer le copyright d\'un code entièrement écrit par une IA ? Les tribunaux américains et européens commencent à trancher des premiers cas qui vont redéfinir la propriété intellectuelle du code.',
        'date'     => '2024-11-19',
    ],
    [
        'title'    => 'L\'IA va-t-elle supprimer des emplois de développeurs ? La réponse en chiffres',
        'url'      => 'https://www.technologyreview.com/2025/01/ai-developer-jobs-impact-study/',
        'source'   => 'MIT Technology Review',
        'category' => 'Sécurité & limites de l\'IA',
        'excerpt'  => 'Une étude économique portant sur 50 000 offres d\'emploi mesure l\'impact réel de l\'IA sur le marché des développeurs : quels profils recrutent encore, lesquels voient leur demande baisser.',
        'date'     => '2025-01-29',
    ],
    [
        'title'    => 'Limites des LLMs pour le code legacy : pourquoi les grands projets résistent',
        'url'      => 'https://stackoverflow.blog/2025/02/llm-limits-legacy-codebase/',
        'source'   => 'Stack Overflow Blog',
        'category' => 'Sécurité & limites de l\'IA',
        'excerpt'  => 'Les assistants IA peinent encore à comprendre les grandes bases de code legacy. Stack Overflow analyse les limites de contexte, de compréhension architecturale et de mémoire à long terme des LLMs actuels.',
        'date'     => '2025-02-28',
    ],
];

// ── Chargement de l'existant pour ne pas écraser ──────────────────────────────
$existing = [];
if (file_exists(ARTICLES_FILE)) {
    $decoded = json_decode(file_get_contents(ARTICLES_FILE), true);
    if (isset($decoded['articles']) && is_array($decoded['articles'])) {
        foreach ($decoded['articles'] as $art) {
            $existing[$art['id']] = $art;
        }
    }
}

// ── Injection des articles de seed ────────────────────────────────────────────
$added = 0;
foreach ($seedArticles as $art) {
    $id = md5($art['url']);
    if (isset($existing[$id])) continue;

    $ts = strtotime($art['date']);
    $existing[$id] = [
        'id'        => $id,
        'title'     => $art['title'],
        'url'       => $art['url'],
        'source'    => $art['source'],
        'category'  => $art['category'],
        'excerpt'   => $art['excerpt'],
        'timestamp' => $ts,
        'date'      => $art['date'],
        'isNew'     => false,
    ];
    $added++;
}

// ── Tri par date décroissante ─────────────────────────────────────────────────
$articles = array_values($existing);
usort($articles, function($a, $b) { return $b['timestamp'] - $a['timestamp']; });

// ── Sauvegarde ────────────────────────────────────────────────────────────────
$data = [
    'lastUpdate' => date('c'),
    'count'      => count($articles),
    'newCount'   => 0,
    'articles'   => $articles,
];

file_put_contents(
    ARTICLES_FILE,
    json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
);

if (php_sapi_name() === 'cli') {
    echo "Seed terminé : {$added} articles ajoutés. Total en archive : " . count($articles) . "\n";
} else {
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'added' => $added, 'total' => count($articles)]);
}
