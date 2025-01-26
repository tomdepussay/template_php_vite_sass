# Template PHP Vite Sass

Template pour une application PHP MVC vanilla avec des modules déjà préconçu.

Liste des modules : 
- PDO/Base de données
- Router avec fichier de route
- Autoloader personnalisé
- Les vues

Ce template emparque SASS qui permet de générer des fichiers CSS personnalisés, ainsi que ViteJS.

## Prérequis

- Docker
- Git

## Comment l'installer ?

Pour l'installer il suffit de faire un clone du projet

```bash
git clone https://github.com/tomdepussay/template_php_vite_sass.git
cd template_php_vite_sass
```

Ensuite, supprimer le dossier **.git**
```bash
rm -rf .git
```

Vous avez un nouveau projet vierge pour lequel vous pouvez ajouter un nouveau lien git avec
```bash
git init
git remote add origin <URL>
```

## Migration automatique

Avant le démarrage de votre projet, tous les fichiers de migration en .sql seront automatiquement exécuté dans la base de données.
Ils seront exécutés dans l'ordre. (001 -> 999)

## Comment démarrer le projet ?

Le projet fonctionne avec Docker, il montera automatique :
- PHP
- MariaDB
- NodeJS
- phpMyAdmin

Vérifier bien que les ports suivants ne sont pas déjà utilisés sur votre machine : 
- 80    (PHP)
- 8080  (phpMyAdmin)
- 3306  (MariaDB)

```bash
docker-compose up -d --build
```

Pour arrêter l'application sans supprimer les données de la table
```bash
docker-compose down
```

Pour arrêter l'application tout en supprimant les données de la table
```bash
docker-compose down -v
```

## Crédit

[Tom DEPUSSAY](https://github.com/tomdepussay)