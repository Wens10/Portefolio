# 🛰️ Veille Technologique Dynamique — Guide d'installation

## Architecture des fichiers

```
/votre-portfolio/
├── veille.php              ← Page principale (remplace l'ancienne)
├── fetch_articles.php      ← Script qui fetch les flux RSS
├── api_articles.php        ← API AJAX pour le front
└── data/
    └── articles.json       ← Base de données des articles (auto-créé)
```

---

## ① Installation rapide

1. **Copiez les 3 fichiers** (`veille.php`, `fetch_articles.php`, `api_articles.php`)
   à la racine de votre portfolio (là où se trouve l'ancien `veille.php`).

2. **Créez le dossier `data/`** et donnez-lui les droits en écriture :
   ```bash
   mkdir data
   chmod 755 data
   ```

3. **Premier fetch** — lancez manuellement le script une première fois :
   ```bash
   php fetch_articles.php
   ```
   Vous devriez voir : `✅ N nouveaux articles ajoutés. Total : N`

4. **Ouvrez `veille.php`** dans votre navigateur. Les articles apparaissent !

---

## ② Mise à jour automatique (Cron)

Pour que la veille se mette à jour toutes les 6 heures sans intervention :

```bash
crontab -e
```

Ajoutez cette ligne (adaptez le chemin) :
```
0 */6 * * * php /var/www/html/fetch_articles.php >> /var/www/html/data/cron.log 2>&1
```

Fréquences alternatives :
```
0 * * * *     # toutes les heures
0 */3 * * *   # toutes les 3 heures
0 8,20 * * *  # à 8h et 20h
```

---

## ③ Ajouter / modifier des sources RSS

Dans `fetch_articles.php`, modifiez le tableau `$feeds` :

```php
$feeds = [
    [
        'url'      => 'https://hacks.mozilla.org/category/webassembly/feed/',
        'source'   => 'Mozilla Hacks',
        'category' => 'WebAssembly & WASI',  // ← doit correspondre à un filtre
    ],
    // Ajoutez autant de sources que vous voulez :
    [
        'url'      => 'https://votre-nouveau-flux.com/rss',
        'source'   => 'Nom affiché',
        'category' => 'Edge Computing',
    ],
];
```

> ⚠️ Les valeurs de `category` doivent correspondre aux boutons de filtre dans `veille.php`.
> Pour ajouter une catégorie, ajoutez un bouton `.filter-pill` dans la section VEILLE DYNAMIQUE.

---

## ④ Sources RSS incluses par défaut

| Source | Catégorie | URL |
|--------|-----------|-----|
| Mozilla Hacks | WebAssembly & WASI | hacks.mozilla.org/category/webassembly/feed/ |
| Cloudflare Blog | Edge Computing | blog.cloudflare.com/rss/ |
| Deno Blog | Edge Computing | deno.com/feed |
| InfoQ WebAssembly | WebAssembly & WASI | infoq.com/webassembly/rss/ |
| InfoQ Serverless | Edge Computing | infoq.com/serverless/rss/ |
| Bytecode Alliance | WebAssembly & WASI | bytecodealliance.org/feed.xml |

---

## ⑤ Fonctionnement du système

```
Visiteur → veille.php
               │
               ▼
         api_articles.php?action=list
               │
               ▼
         data/articles.json  ← lit l'historique complet
               │
               ▼
         Affichage filtré + recherche (côté JS)

Bouton "Actualiser" → api_articles.php?action=refresh
               │
               ▼
         fetch_articles.php (exécuté côté serveur)
               │
               ├─ Lit les flux RSS des sources configurées
               ├─ Fusionne avec articles.json existant
               ├─ Déduplique par URL (MD5)
               ├─ Trie par date décroissante
               └─ Sauvegarde (max 120 articles en archive)
```

---

## ⑥ Personnalisation

### Changer le nombre max d'articles conservés
Dans `fetch_articles.php` :
```php
define('MAX_ARTICLES', 120);  // augmentez selon vos besoins
```

### Désactiver l'exécution via le bouton du front
Commentez le bloc `if ($action === 'refresh')` dans `api_articles.php`
et n'utilisez que le cron pour fetcher.

### Sécuriser l'endpoint refresh
Ajoutez une vérification de token dans `api_articles.php` :
```php
if ($action === 'refresh') {
    if (($_POST['token'] ?? '') !== 'votre_token_secret') {
        echo json_encode(['success' => false, 'error' => 'Non autorisé']);
        exit;
    }
    // ... reste du code
}
```
