# Plateforme de micro-blogging pour carcajous

[![made-with](https://img.shields.io/badge/Made_with-Docker-0a1153.svg)](https://www.docker.com)
[![made-with](https://img.shields.io/badge/Made_with-PHP-7a86b8.svg)](https://www.php.net)
[![made-with](https://img.shields.io/badge/Made_with-Laravel-f6352d.svg)](https://laravel.com)
[![made-with](https://img.shields.io/badge/Made_with-PostgreSQL-6497c1.svg)](https://www.postgresql.org/)


Ce projet à pour but de réaliser une plateforme de micro-blogging. Il a été réalisé en 7 jours par une équipe de 3 personnes en contexte agile (daily, mob programming).

/capture/

# Installation

## [Windows] Pré-requis : installer WSL 2

🟡 il est conseillé d’installer WSL 2. Voir la [doc officielle de WSL 2](https://learn.microsoft.com/fr-fr/windows/wsl/install).

##  [Windows / Mac / Linux] Pré-requis : installer Docker 

🟡 Installer Docker via le [site officiel de Docker](https://docs.docker.com/get-docker/). (Pour les Windows, choisir l'option d'installation de Docker **avec WSL 2**).

##  [Windows / Mac / Linux] Pré-requis : configurer l'environnement de développement du projet

Ce projet a été pré-configuré pour permettre une installation rapide et automatique de toutes ses dépendances (outils de ligne de commandes PHP, Laravel et ses librairies, des extensions VSCode adaptées au développement PHP). Pour cela utiliser la fonctionnalité de ["Dev Containers" de VSCode](https://code.visualstudio.com/docs/devcontainers/containers).

🟡 Ouvrir le projet dans VSCode. Les fichiers et dossiers du repo doivent constituer **la racine** de l'arborescence du projet sous VS Code (l'extension Dev Container ne fonctionne pas depuis un "workspace").

🟡 Copier le fichier `.env.example` vers `.env`

```
cp .env.example .env
```

🟡 Installer l'extension VSCode "Dev Containers"

🟡 Ré-ouvrir le projet dans VSCode **dans Docker** avec la commande "Reopen in Container"

Le projet s'ouvre dans une nouvelle fenêtre VSCode, et démarre le téléchargement des images Docker, puis la construction et l'exécution des containers associés.

## Démarrer l'application Laravel

🟡 Ouvrir le terminal de VSCode.

🟡 Installer les dépendances PHP via `composer`

```
composer install
```

🟡 Générer votre "application encryption key" (nécessaire à toute application Laravel)

```
php artisan key:generate
```

🟡 Lancer le serveur web interne à Laravel

```
php artisan serve --port=8080
```

## Gestion de la base de données (PostgreSQL)

🟡 Accéder à l'interface d'admin "pgAdmin"

identifiant, mot de passe et port de connexion par défaut se trouve dans le fichier `.env`

🟡 Une fois connecté à "pgAdmin", configurer la connexion à votre base de données locale, en ajoutant un nouveau "server" (les identifiants de connexion sont les mêmes que ceux configurés dans le fichier `.env`).

🟡 Initialiser la base de données, en effectuant les migrations Laravel existantes par défaut.

```
php artisan migrate
```

## À propos de Laravel

<p><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo"></a></p>

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

### Se familiariser avec Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
