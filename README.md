# Projet Laravel - Gestion de Films

Bienvenue dans le projet Laravel de gestion de films ! Ce projet vise à créer une application permettant d'ajouter et de gérer des films en utilisant le framework Laravel. Le système inclut des migrations et des seeders essentiels pour faciliter la création de la base de données.

## Installation

1. Clonez le repository :
   ```bash
   git clone https://github.com/votre-utilisateur/projet-laravel-films.git




   composer install


   Configurez votre fichier .env avec les informations de votre base de données.

Effectuez les migrations pour créer les tables de la base de données :


php artisan migrate

Remplissez la base de données avec des données de test en utilisant les seeders :

php artisan db:seed --class=CategorySeeder
php artisan db:seed --class=DirectorSeeder
php artisan db:seed --class=TagSeeder


Relations dans le Projet
Film - Directeur (1 à 1)
Le modèle de film est associé au modèle de directeur avec une relation "1 à 1". Chaque film a un directeur, et chaque directeur est associé à un seul film.

Film - Tags (N à N)
La relation "N à N" entre les films et les tags permet à un film d'avoir plusieurs tags, et un tag peut être associé à plusieurs films.

Film - Catégorie (1 à N)
Chaque film appartient à une catégorie, tandis qu'une catégorie peut contenir plusieurs films. Cette relation est de "1 à N", ce qui signifie qu'une catégorie peut être associée à plusieurs films, mais chaque film appartient à une seule catégorie.

Utilisation des Seeders
Le projet comprend trois seeders essentiels pour pré-remplir votre base de données avec des données de base :

CategorySeeder: Remplit la table des catégories avec des exemples de catégories de films.
DirectorSeeder: Ajoute des réalisateurs à la table des réalisateurs pour une démo rapide.
TagSeeder: Crée des tags pour les films, utiles pour la gestion des tags.
Utilisez ces seeders pour faciliter le développement et les tests.

N'oubliez pas de consulter la documentation Laravel officielle pour plus d'informations sur l'utilisation des migrations, des seeders et des relations dans Eloquent : Documentation Laravel.

Bonne exploration et développement !
