<?php

/** 
 * /index.php
 * Page d'accueil du Projet
 * @author E.Gilles & L.Boullee
 * @date 04/2021
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Accueil</title>

    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
</head>
<body class="background-color-grey">
    
    <!-- barre de naviguation + jumbotron -->
    <?php
    //barre de navigation
    require_once './inc/navbar.php';
    //jumbotron
    require_once './inc/jumbotron.php';
    ?>
    <!-- Fin jumbotron+bar de naviguation -->
    
    
    <div style="background-color: #062c33;">
        
        <!-- Petit résumé -->
        <h1>Qui somme nous ?</h1>
        <p>Passionés de l'automobile française l'équipe de FrancAuto dédie leurs temps à trouver les meilleurs
            voitures issue de l'industrie française allant de la voiture la plus commune comme une Peugeot 206
            à des modèles plus rare comme le Renault Avantime. Nous nous engageons à trouver la voiture de vos rêve
            . Vous ne trouvez pas l'automobile que vous désirez sur notre site n'hésitez pas à contacter un de nos conseillers
            pour que celui-ci vous aide dans vos recherche.
        </p>    
    </div>
    
    <!-- Affichage de ./footer.php -->
    <?php
    //footer
    require_once './inc/footer.php';
    ?>
    <!-- Fin affichage -->

    <!-- Chargement Script -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>