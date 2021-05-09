<?php

/* 
 * /contact.php
 * Page de type HTML contenant les différentes informations
 * pour contacter un vendeur par mail ou par téléphone
 * 
 * 
 * @author : Lilian Boullée
 * @date : 04/2021
 */
?><!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Fin CSS -->
</head>
<body class='background-color-grey'>
    
    <!-- Affichage NavBar-->
    <?php
        require_once './inc/navbar.php';
    ?>
    <!-- Fin affichage NavBar -->
    <div class="container">
        <div class="row pt-5">
            <div class="col">
        <h2 class='padding-left-10'>Nos informations de Contact :</h2>
        <ul>
            <ol>Par téléphone : 06 06 06 06 06 06</ol>
            <ol>Par mail : <a href="mailto:contact@francauto.fr">contact@francauto.fr</a></ol>
            <ol>Ou directement en agence à  l'adresse : 
                <ul>
                    <li>66 avenue des enfer</li>
                    <li>7777 Le tartarosse</li>
                </ul>  
            </ol>
        </ul>
    </div>
    <div class="col">
        <h2 class='padding-left-10'>Ou contacte nous directement :</h2>
        <form class="padding-left-30" method="post">
            <input type="email" name="email" required placeholder="exemple@gmail.com"><br>
            <textarea rows="10" cols="50" name="message" placeholder="Votre message ici"></textarea><br>
            <input type="submit" value="Envoyer"/>
            
        </form>
    </div>
    </div>

        </ol>
    </ul> 
    </form>
            <!-- Envoie de l'email au contact de l'entreprise -->         
    <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter une arobase.</p>';
        else {
            $retour = mail('contact@francauto.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a bien été envoyé, nous vous répondrons dans les plus brefs délais.</p>';
            else
                echo "<p>Erreur lors de l'envoi de votre message</p>";
        }
    }
    ?>
    <!-- Affichage footer -->
    <?php
        require_once 'inc/footer.php';
    ?>
    <!-- Fin affichage footer -->
            
            
</body>
</html>
