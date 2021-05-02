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
        <img src="./img/logo.jpg" width="100" height="100" alt="Logo">
    </a>
    <ul class="navbar-nav mr-auto">
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
</nav>
<!-- Fin barre de navigation avec logo -->