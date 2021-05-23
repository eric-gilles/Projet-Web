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
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta name="description" content="Site de vente de Voitures d'occasions">
    <meta name="author" content="AS Web">

    <title>Accueil</title>
    
    <!-- Logo -->
    <link rel="icon" type="image/jpeg" href="./img/logo.jpeg"/>
    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Fin Bootstrap & CSS -->
</head>
<body class="background-color-grey">
    <div class="container-fluid h-100">
        <!-- barre de navigation + jumbotron -->
        <?php
            //barre de navigation
            require_once './inc/navbar.php';
            echo '<div style="padding: 30px;"></div>';
            //jumbotron
            require_once './inc/jumbotron.php';
        ?>
        <!-- Fin jumbotron+bar de navigation -->
        
        <!-- Carroussel marque -->

    <div class="carousel mx-auto container" data-ride="carousel" style="width:70%">
        <h1>Les marques de Voitures : </h1>
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

    <!-- Contrôles du carrousel -->
        <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>

    <div style="padding: 10px;"></div>

    <label>Les Marques francaises de voitures qui nous font confiance.</label>

    </div>
    
    <div style="padding: 50px;"></div>

        <!-- Petit résumé -->
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <h1>Qui sommes nous ?</h1>

                    <p  style="text-indent: 30px">Passionnés de l'automobile française l'équipe de FrancAuto dédie leurs temps à trouver les meilleures voitures issues de l'industrie française allant de la voiture la plus commune comme une Peugeot 206 à des modèles plus rare comme le Renault Avantime. 
                    Nous nous engageons à trouver la voiture de vos rêves. Vous ne trouvez pas l'automobile que vous désirez sur notre site n'hésitez pas à contacter un de nos conseillers pour que celui-ci vous aide dans vos recherches.</p>
                </div>  
            </div>
        </div>


        <!-- petit texte -->

        <div class="container">
            <div class="row">
                <div class="col">

                    <h1>Une excellence garantie</h1>

                    <p style="text-indent: 30px">Nous nous engageons à vous fournir le véhicule de vos rêves dans un état proche du neuf. Peur que votre nouvelle voiture arrête de fonctionner, pas d'inquiétude tous nos produits sont garantie au moins un an. Pas satisfait de votre véhicule acheter chez nous profiter du renvoi gratuit sous 14 jours. Alors vous attendez quoi pour acheter une voiture française sur Francauto.</p>
                </div>
            </div>
        </div>

        <div style="padding: 50px;"></div>

        
    </div>
    <!-- Affichage du footer -->
    <?php
        //Affichage de ./footer.php
        require_once './inc/footer.php';
    ?>
    <!-- Fin d'affichage du footer -->

    <!-- Chargement Script -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
</html>