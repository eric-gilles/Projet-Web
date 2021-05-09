<?php 
/* 
 * /inc/navbar.php
 * Barre de navigation pour le site
 * Fichier à appeler au début des page du site internet
 * Code à utiliser : "require_once './inc/navbar.php';"
 * @author : AS Web Voiture
 * @date : 04/2021
*/
?>
<!-- Barre de navigation avec logo -->  
<nav style="background-color: #23272b;" class="navbar navbar-expand-md navbar-light fixed-top">
    <a class="navbar-brand" id='logo' href="index.php">
        <img src="./img/logo.jpeg" width="50" height="50" alt="Logo">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a style="color: #005cbf;" class="nav-link"  href="./index.php">Accueil</a>
        </li>
        <li class="nav-item">
            <a style="color:white;" class="nav-link" href="./produits.php">Les produits</a>
        </li>
        <li class="nav-item"> 
            <a style="color: #bd2130;"class="nav-link" href="./contact.php">Nous Contacter</a>
        </li>
    </ul>
    <!-- ALIGNER PANIER ET LE RESTE DE LA NAVBAR A FAIRE -->

    <div class="my-2 my-lg-2 ">
    <p class="nav-item text-white navbar-text navbar-right">Mon Panier</p>
    <div class="text-white navbar-right" style="display: inline;">
        <i class="fas fa-shopping-cart pl-0"></i>
    </div>
</div>
    
</nav>
<!-- Fin barre de navigation avec logo -->