<?php

/** 
 * /produit.php
 * Page qui liste tous les produits
 * @author E.Gilles & L.Boullee & Adrien CerroAS Web Voiture
 * @date 04/2021
 */


// inclus les fichiers
	require_once './model/DbManager.php';
	require_once './model/MarqueManager.php';
	require_once './class/Voiture.php';
	require_once './class/Marque.php';
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
  	<link rel="stylesheet" href="./css/mdb.min.css">
</head>
<body>
	<div class="container-fluid h-100">
	<?php
		require_once './model/DbManager.php';
		//require_once './inc/banner.php';
		require_once './inc/navbar.php';
		
		echo "<br><br>\n<div class='row h-100'>";

?>
	<!-- Barre de Recherche -->
	<div class="container">
	    <div class="row mb-5">
	        <div class="col-lg-7 mx-auto">
	            <div class="bg-white p-5 rounded shadow">
	                                    <!-- Filtres de recherche -->
	                    <div class="container-fluid">
	                        <div class="row">
	                            <h6 class="text-info">Marque</h6>
	                            <div class="col-4">
	                            	<br>
	                                
	                                    <?php 
	                                        $marques = MarqueManager::getLesMarques();
	                                        //var_dump($marques);
	                                        echo '<ul class="list-group list-group-horizontal-sm">';
	                                        $i = 0;
	                                        foreach ($marques as $value) {
	                                        	echo '<li class="list-group-item flex-fill">';
	                                    	echo '<div class="form-check">';
	                                    		echo '<label class="form-chek-label">';
	                                    			echo '<input type="checkbox" class="form-check-input product_check" value="'.$value->getMarque().'" id="marque">'.$value->getMarque().'</label>';
	                                    	echo "\n</li>\n<div>";
	                                    	$i++;
	                                    	if ($i == 2) {
	                                    		echo "</ul><ul class='list-group list-group-horizontal-sm'>";
	                                    	}
	                                    	if ($i == 4) {
	                                    		echo "</ul>";
	                                    	}
	                                        }
	                                        
	                                    ?>
	                                    


	                            </div>
	                            <div class="col-lg-9">
	                                
	                            </div>
	                        </div>
	                    </div>
	                    <!-- Fin Filtres de recherche-->



	                        <!-- Input Champ de recherche -->
	                        <div class="form-group col-md-9">
	                            <input id="exampleFormControlInput5" type="search" placeholder="Rechercher une voiture" name="search"class="form-control form-control-underlined">
	                        </div>

	                        <!-- Bouton  envoyer -->
	                        <div class="form-group col-md-9">
	                            <button type="submit" class="btn btn-primary rounded-pill btn-block shadow-sm">Rechercher</button>
	                        </div>

	                    </div>
	                </form>
	                <!-- Fin du Formulaire de recherche produit -->

	            </div>
	        </div>
	    </div>
	</div>
	<!-- Fin de la Barre de Recherche -->
<?php

		


		if (isset($_POST['search']) && !is_null($_POST['search'])) {
			DbManager::getConnection();
			$search = $_POST['search'];
			echo "$search";
			$sql = "SELECT * FROM Voitures WHERE modele LIKE '%$search%' OR marque LIKE '%$search%'";
		}

	?>
	<br>
	<div class="container">
	 	<div class="row">		
			<div class="col-sm">
			<!-- 1ère Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="./img/imgtest.png" alt="Card image cap">
					<div class="card-body">
				    	<h5 class="card-title">Card title</h5>
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    	<a href="fiche_produit.php" class="btn btn-primary">Descriptif</a>
				    	<button type="button" class="btn btn-light mr-1 mb-2">
	            			<i class="fas fa-shopping-cart pr-2"></i>Ajouter au Panier
	            		</button>
				  	</div>
				</div>
			<!-- Fin 1ère Card Bootstrap -->
			</div>

	    	<div class="col-sm">
			<!-- 2e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="./img/imgtest.png" alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary mr-1 mb-2">Descriptif</a>
            			<button type="button" class="btn btn-light mr-1 mb-2">
            				<i class="fas fa-shopping-cart pr-2"></i>Ajouter au Panier
            			</button>
			  		</div>
				</div>
			<!-- Fin 2e Card Bootstrap -->
		    </div>

		    <div class="col-sm">
			<!-- 3e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="./img/imgtest.png" alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Descriptif</a>
			    		<button type="button" class="btn btn-light mr-1 mb-2">
            				<i class="fas fa-shopping-cart pr-2"></i>Ajouter au Panier
            			</button>
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
					<img class="card-img-top" src="./img/imgtest.png" alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Descriptif</a>
			    		<button type="button" class="btn btn-light mr-1 mb-2">
            				<i class="fas fa-shopping-cart pr-2"></i>Ajouter au Panier
            			</button>
			  		</div>
				</div>
			<!-- Fin 4e Card Bootstrap -->
		    </div>

	    	<div class="col-sm">
			<!-- 5e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="./img/imgtest.png" alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Descriptif</a>
			    		<button type="button" class="btn btn-light mr-1 mb-2">
            				<i class="fas fa-shopping-cart pr-2"></i>Ajouter au Panier
            			</button>
			  		</div>
				</div>
			<!-- Fin 5e Card Bootstrap -->
		    </div>

		    <div class="col-sm">
			<!-- 6e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="./img/imgtest.png" alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Descriptif</a>
			    		<button type="button" class="btn btn-light mr-1 mb-2">
            				<i class="fas fa-shopping-cart pr-2"></i>Ajouter au Panier
            			</button>
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
					<img class="card-img-top" src="./img/imgtest.png" alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Descriptif</a>
			    		<button type="button" class="btn btn-light mr-1 mb-2">
            				<i class="fas fa-shopping-cart pr-2"></i>Ajouter au Panier
            			</button>
			  		</div>
				</div>
			<!-- Fin 7e Card Bootstrap -->
		    </div>

	    	<div class="col-sm">
			<!-- 8e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="./img/imgtest.png" alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Descriptif</a>
			    		<button type="button" class="btn btn-light mr-1 mb-2">
            				<i class="fas fa-shopping-cart pr-2"></i>Ajouter au Panier
            			</button>
			  		</div>
				</div>
			<!-- Fin 8e Card Bootstrap -->
		    </div>

		    <div class="col-sm">
			<!-- 9e Card Bootstrap -->
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="./img/imgtest.png" alt="Card image cap">
					<div class="card-body">
			    		<h5 class="card-title">Card title</h5>
			    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    		<a href="fiche_produit.php" class="btn btn-primary">Descriptif</a>
			    		<button type="button" class="btn btn-light mr-1 mb-2">
            				<i class="fas fa-shopping-cart pr-2"></i>Ajouter au Panier
            			</button>
			  		</div>
				</div>
			<!-- Fin 9e Card Bootstrap -->
		    </div>
		    
		</div>
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