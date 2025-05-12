Projet Laravel – Gestion de Livres et d’Avis

Bienvenue dans ce projet Laravel réalisé dans le cadre d’un TP. L’objectif est de créer une application simple permettant de gérer une liste de livres, et de permettre à des utilisateurs de laisser des avis. Ce projet met en pratique les migrations, les modèles Eloquent, les relations entre tables, les vues Blade, et l’utilisation de formulaires.



 Ce que le projet contient

 Une liste de livres avec leurs auteurs et descriptions. Une page de détails pour chaque livre**, affichant :
  Les informations du livre.
   Les avis liés.
   Un formulaire d’ajout d’avis**.
 Un système de relation entre livres, avis et utilisateurs** (sans authentification).
 Bonus :
  Note moyenne automatique
  Page 404 personnalisée.
  Pagination sur la liste des livres.
Structure du projet

Voici les fichiers et dossiers principaux :


app/Models/
├── Book.php
├── Review.php

resources/views/books/
├── index.blade.php
├── show.blade.php

routes/
└── web.php

database/migrations/
└── (migrations des tables books, reviews, users)

 Comment j’ai créé ce projet

 Création du projet :
   composer create-project laravel/laravel livre-projet


2 Création des modèles avec migration :
     php artisan make:model Book -m
   php artisan make:model Review -m
Création des contrôleurs :
 
   php artisan make:controller BookController
   php artisan make:controller ReviewController
   Ajout des routes dans `web.php`.

 Création des vues Blade dans `resources/views/books`.

 Comment exécuter le projet

 Cloner le projet

git clone https://github.com/joyboy224/livre-projet.git


 Dézippe-le quelque part.
 Ouvre un terminal dans le dossier du projet.

. Installer les dépendances

composer install

 4. Lancer les migrations


php artisan migrate
 Lancer le serveur de développement


php artisan serve


Accède ensuite à 
http://127.0.0.1:8000/books




## 👤 Réalisé par

Abdoul Salam Diallo  
Projet Laravel pédagogique – 2025

---

## 📄 Licence

Ce projet est partagé à des fins pédagogiques uniquement. Libre à toi de le réutiliser ou de l’adapter.
