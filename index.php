<?php

/** 
 * /index.php
 * Page d'accueil du Projet
 * @author E.Gilles & L.Boullee & Adrien Cerro
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
    
    

        
        <!-- Petit résumé -->
        <h1>Qui sommes nous ?</h1>
        <p>Passionés de l'automobile française l'équipe de FrancAuto dédie leurs temps à trouver les meilleurs
            voitures issue de l'industrie française allant de la voiture la plus commune comme une Peugeot 206
            à des modèles plus rare comme le Renault Avantime. Nous nous engageons à trouver la voiture de vos rêve
            . Vous ne trouvez pas l'automobile que vous désirez sur notre site n'hésitez pas à contacter un de nos conseillers
            pour que celui-ci vous aide dans vos recherche.
        </p>    

    
        <!-- Carroussel marque -->



 
      <h1>Les marques : </h1>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicateurs -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
          <li data-target="#demo" data-slide-to="4"></li>
          <li data-target="#demo" data-slide-to="5"></li>
        </ul>

        <!-- Carrousel -->
    <div class ="rounded" style="background-color: #002752 ">    
        <div class="carousel-marque carousel-inner mx-auto"style="width:40%">
            <div class="carousel-item active">
                <img src="./img/marque/Bugatti.png" alt="Bugatti" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./img/marque/Citroen.png" alt="Citroen" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./img/marque/Peugeot.png" alt="Peugeot" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./img/marque/DS.png" alt="DS" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./img/marque/Alpine.png" alt="Alpine" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./img/marque/Renault.png" alt="Renault" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
        </div>
    </div>

    <!-- Contrôles -->
            <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Suivant</span>
            </a>
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