# Documentation du blog PHP

# Toutes les fonctionnalites du blog :

    - Création de compte
    - Connexion au blog avec un compte
    - Dashboard administration complet
    - Listing d'articles
    - Page d'article
    - Redirection dans le dashboard si l'utilisateur est administrateur

# Administration dashboard :

    - Création d'article :
        Crud complet (Create, edit, update , delete)
        https://i.imgur.com/Reap8fa.png
    - Création de compte administrateur dans le dashboard :
        https://i.imgur.com/6lYuULD.png
    - Création de catégories :
        Crud complet dans la partie catégorie
        https://i.imgur.com/g80Mn4B.png

# Utilisation du blog en mode "classique"

    - Listing de tous les articles du blog
        Si l'utilisateur n'est pas connecter/n'a pas créer de compte il ne pourra pas accéder à l'article en question
        https://i.imgur.com/qVyFPgD.png
        Une fois l'utilisateur connecter avec un compte il pourra bien évidement accéder à l'article
        https://i.imgur.com/MRKnbfo.png

# Alerts sur le blog :

    - Afficher une erreur si le compte n'est pas correct dans la page `/login`
        https://i.imgur.com/GtlWkSq.png
    - Même chose avec la partie création de compte `/registration`
        https://i.imgur.com/PVpPx5W.png
    - Même chose dans la partie administration chaque chanps qui n'est pas correct/pas renseigné va "display" une erreur
        https://i.imgur.com/gmaHn1K.png

# Installation du blog :

    - Télécharger le repo sur mon git à l'adresse suivante :
        https://github.com/LasCC/Creative-blog.git
    - Dans le repo il y a un fichier appeler `blog-2.sql`
        Aller sur phpMyAdmin est importer ce fichier.
        https://i.imgur.com/mPkRvTC.png
    - Une fois la base de donnée importer aller dans le ficher suivant :
        `/app/db/connect.php`
        Modifier le fichier si vous avez la moindre erreur
         ```
        <?php
          $host = "localhost"; // url
          $username = "root"; // nom d'utilisateur
          $password = "root"; // mot de passe de la base
          $db_name = "blog"; // nom de la base de donnée
          $conn = new MySQLi($host, $username, $password, $db_name);
          if ($conn->connect_error) {
              die("Db connection error :  " .$conn->connect_error);
          } else {
              // echo "bd ok";
          }
        ?>
        ```

# Système de recherche d'articles

    - La barre de recherche est uniquement accésible depuis un compte utilisateur
    - La page de recherche est accésible depuis la page d'accueil dans la navbar (en étant connecter biensur)
