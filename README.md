# Mini Blog Laravel

Un projet Laravel simple qui permet de gérer des articles avec un CRUD complet (Create, Read, Update, Delete).  
Ce projet est destiné à l’apprentissage des bases de Laravel : routes, contrôleurs, modèles, migrations, Blade, validation et pagination.

## Fonctionnalités

- Création d’un article (titre et contenu)
- Affichage de la liste des articles avec pagination
- Recherche d’articles par titre ou contenu
- Modification d’un article
- Suppression d’un article
- Affichage des détails d’un article
- Messages de confirmation après chaque action (succès / info)

## Structure du projet

- `app/Models/Article.php` : modèle Eloquent représentant un article
- `app/Http/Controllers/ArticleController.php` : logique du CRUD
- `resources/views/layouts/app.blade.php` : layout principal
- `resources/views/articles/index.blade.php` : liste des articles + recherche
- `resources/views/articles/create.blade.php` : formulaire de création
- `resources/views/articles/edit.blade.php` : formulaire de modification
- `resources/views/articles/show.blade.php` : affichage détaillé
- `database/migrations/..._create_articles_table.php` : migration pour la table `articles`
- `routes/web.php` : définition des routes

## Installation

1. Cloner le projet :
   ```bash
   git clone https://github.com/votre-nom/mini-blog-laravel.git
   cd mini-blog-laravel
2. Installer les dépendances :
    composer install
    npm install && npm run dev

3. Générer la clé de l’application :
    php artisan key:generate

4. Lancer les migrations :
    php artisan migrate
5. Démarrer le serveur :
    php artisan serve


**Routes principales :**

/ : liste des articles
/articles : liste des articles
/articles/create : formulaire de création
/articles/{id} : afficher un article
/articles/{id}/edit : modifier un article
(DELETE) /articles/{id} : supprimer un article


**Technologies utilisées :**

Laravel 11
MySQL
Bootstrap 5
Blade





##Aperçu

**Page d’accueil / liste des articles**  
![Page d’accueil / liste des articles](public/screenshots/page_index)

**Création d’un article**  
![Création d’un article](public/screenshots/creation_article)

**Modification d’un article**  
![Modification d’un article](public/screenshots/modification_article)

**Détails d’un article**  
![Détails d’un article](public/screenshots/detail_article)



**Auteur**
Auteur : Iliass Gzouli
