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
            <a class="nav-link text-primary"  href="./index.php">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="./produits.php">Les produits</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link text-danger" href="./contact.php">Nous Contacter</a>
        </li>
    </ul>

    <a class="nav-item text-light nav-link navbar-right" href="#">Mon Panier</a>
    <div class="text-white navbar-right" style="display: inline;">
        <i class="fas fa-shopping-cart"></i>
    </div>
    
</nav>
<!-- Fin barre de navigation avec logo -->