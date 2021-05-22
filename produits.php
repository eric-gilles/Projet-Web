<?php

/** 
 * /produit.php
 * Page qui liste tous les produits
 * @author E. Gilles & L. Boullee & A. Cerro
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
  	<!-- Fin Bootstrap & CSS -->
</head>
<body>
	<div class="container-fluid h-100">
	<?php
		if (isset($_GET['search']) && !empty($_GET['search'])) {
			$recherche = $_GET['search'];
			$voitures = VoitureManager::getLesVoituresByName($recherche);
		}
		else if (isset($_GET['marque']) && !empty($_GET['marque'])) {
			$marque_recherche = $_GET['marque'];
			$marque = MarqueManager::getMarqueByMarque($marque_recherche);
			$voitures = VoitureManager::getLesVoituresByMarque($marque->getIdMarque());
		}
		else {
			$voitures = VoitureManager::getallVoitures();
		}

		require_once './model/DbManager.php';
		//require_once './inc/banner.php';
		require_once './inc/navbar.php';		
		echo "<div style='padding: 50px;'></div>\n<div class='row h-100'>";
	?>
	<!-- Barre de Recherche -->

	<div class="container">
	    <div class="row mb-5">
	        <div class="col-lg-9 mx-auto">
	            <div class="bg-white p-5 rounded shadow">
	                <!-- Filtres de recherche -->
	                    <div class="container">
	                        <div class="row">
	                        	<div class="col">
	                            	<h6 class="text-info">Marques</h6>
	                            	
	                            		<ul class="list-group list-group-horizontal-sm">
	                                
	                                    <?php
	                                    	$marques = MarqueManager::getLesMarques();
	        								//var_dump($marques);

	                                        foreach ($marques as $value) {
	                                        	echo "<li class='list-group-item mr-3 border-left'>\n";
	                                        	echo "<div class='pl-2'>\n";
	                                    		echo "\t<input type='checkbox' class='form-check-input product_check pr-2' name='marque' value='".$value->getMarque()."' id='".$value->getMarque()."' onclick='filtrer(this)'>\n</div>\n";
	                                    		echo "\t<label class='form-chek-label pl-2'>".$value->getMarque()."</label>\n";
	                                    		echo "</li>\n";
	                                        }

	                                        echo "<li class='list-group-item mr-3 border-left'>\n";
	                                        echo "<div class='pl-2'>\n";
	                                        echo "\t<input type='checkbox' class='form-check-input product_check pr-2' name='marque' value='all_marques' id='all_marques' onclick='filtrer(this)'>\n</div>\n";
	                                    	echo "\t<label class='form-chek-label pl-2'>Toutes Marques</label>\n";
	                                    	echo "</li>\n";
	                                    ?>
	                                    </ul>

	                            </div>
	                        </div>
	                    </div>
	                    <div style="padding: 15px;"></div>
	                    <!-- Fin Filtres de recherche-->
                    <form method="GET" action="">    	
	                        <!-- Input Champ de recherche -->
	                        <div class="form-group col-md-11">
	                            <input id="exampleFormControlInput5" type="search" placeholder="Rechercher une voiture" name="search"class="form-control form-control-underlined">
	                        </div>

	                        <!-- Bouton  envoyer -->
	                        <div class="form-group col-md-11">
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
	<br>
	<div class="container">
	 	<div class="row">
	 	<?php
	 		$compteur = 1;
	 		if (isset($voitures)) {
	 			foreach ($voitures as $value) {
		 			$card = '';
		 			$card .= '<div class="col-sm">';
					$card .= '<!-- Début Card Bootstrap -->';
					$card .= '<div class="card" style="width: 18rem;">';
					$card .= '<img class="card-img-top" src="./img/imgtest.png" alt="'.$value->getMarque().' '.$value->getModele().'">';
					$card .= '<div class="card-body">';
					$card .= '<h5 class="card-title">'.$value->getMarque().' '.$value->getModele().'</h5>';
					$card .= '<p class="card-text">'.$value->getDescription1().'</p>';
					$card .= "<a href='fiche_produit.php?voiture='".$value->getModele()."' class='btn btn-primary'>Descriptif</a>";
					$card .= '<button type="button" class="btn btn-light mr-1 mb-2">';
		            $card .= '<i class="fas fa-shopping-cart pr-2"></i>Ajouter au Panier';
		            $card .= '</button>';
					$card .= '</div>';
					$card .= '</div>';
					$card .= '<!-- Fin Card Bootstrap -->';
					$card .= '</div>';
					echo $card;
					$compteur++;
					if ($compteur % 3 == 0) {
						echo "</div><br><div class='row'>";
					}
	 			}
	 			echo '</div>';
	 		}
	 		
			
			?>
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
			<!-- Fin Card Bootstrap -->
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
	<div style="padding: 50px;"></div>
	<!-- Affichage du footer -->
    <?php
        //Affichage de ./footer.php
        require_once './inc/footer.php';
    ?>
    <!-- Fin d'affichage du footer -->


	<!-- Chargement JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    	//fonction qui permet de filter en changant l'URL si une checkbox est cochée
    	function filtrer(input) {
    		adresse = window.location.toString();
    		if (input.checked) {
    			if (input.id='all_marques') {
    				window.location.replace(window.location.pathname);
    			}
    			if (adresse.includes('?')) {
    				adresse = window.location.pathname;
    				adresse += '?'+ input.name+"="+input.value;
    			}
    			else{
    				adresse += '?'+ input.name+"="+input.value;
    			}

    		}
    		
    		window.location.replace(adresse);
    	}

    	//A chaque chargement de page, on vérifie si la marque est dans l'URL est on coche la checkbox
    	window.onload = function onPageLoad() {
            if (window.location.toString().includes('Citroen')) {
                document.getElementById('Citroen').checked = true;
            }
            if (window.location.toString().includes('Renault')) {
                document.getElementById('Renault').checked = true;
            }
            if (window.location.toString().includes('Peugeot')) {
                document.getElementById('Peugeot').checked = true;
            }
            if (window.location.toString().includes('Bugatti')) {
                document.getElementById('Bugatti').checked = true;
            }
            if (window.location.toString().includes('all_marques')) {
                document.getElementById('all_marques').checked = true;
            }
            if (!window.location.toString().includes('?') && document.getElementById("search") == null) {
                document.getElementById('all_marques').checked = true;
            }
        }
    	
    </script>
</body>
</html>