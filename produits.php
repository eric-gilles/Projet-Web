<?php

/** 
 * /produit.php
 * Page qui liste tous les produits
 * @author E.Gilles & L.Boullee AS Web Voiture
 * @date 04/2021
 */


// inclus les fichiers
require_once './model/DbManager.php';
require_once './class/Voiture.php';
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Les produits</title>

	<!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>
	<?php
		require_once './inc/banner.php';
		require_once './inc/barre_de_recherche.php';


		if (isset($_POST)) {
			DbManager::getConnection();
		}
	?>
	<br>
	<div class="container">
	 	<div class="row">

		    <div class="col-sm">
			<!-- 1ère Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Go somewhere</a>
			  		</div>
				</div>
			<!-- Fin 1ère Card Bootstrap -->
		    </div>

	    	<div class="col-sm">
			<!-- 2e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Go somewhere</a>
			  		</div>
				</div>
			<!-- Fin 2e Card Bootstrap -->
		    </div>

		    <div class="col-sm">
			<!-- 3e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Go somewhere</a>
			  		</div>
				</div>
			<!-- Fin 3e Card Bootstrap -->
		    </div>

		</div>
		<br>
		<div class="row">

		    <div class="col-sm">
			<!-- 4e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Go somewhere</a>
			  		</div>
				</div>
			<!-- Fin 4e Card Bootstrap -->
		    </div>

	    	<div class="col-sm">
			<!-- 5e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Go somewhere</a>
			  		</div>
				</div>
			<!-- Fin 5e Card Bootstrap -->
		    </div>

		    <div class="col-sm">
			<!-- 6e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Go somewhere</a>
			  		</div>
				</div>
			<!-- Fin 6e Card Bootstrap -->
		    </div>
		    
		</div>
		<br>
		<div class="row">

		    <div class="col-sm">
			<!-- 7e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Go somewhere</a>
			  		</div>
				</div>
			<!-- Fin 7e Card Bootstrap -->
		    </div>

	    	<div class="col-sm">
			<!-- 8e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Go somewhere</a>
			  		</div>
				</div>
			<!-- Fin 8e Card Bootstrap -->
		    </div>

		    <div class="col-sm">
			<!-- 9e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Go somewhere</a>
			  		</div>
				</div>
			<!-- Fin 9e Card Bootstrap -->
		    </div>
		    
		</div>
	  </div>

	<!-- Chargement JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>