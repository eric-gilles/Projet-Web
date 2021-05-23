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
require_once './model/VoitureManager.php';
require_once './class/Voiture.php';
require_once './class/Marque.php';

	//réceptionne les valeurs du formulaire et les traites
	if (isset($_GET['search']) && !empty($_GET['search'])) {
		$recherche = $_GET['search'];
		$recherche = nettoyer($recherche);
		$voitures = VoitureManager::getVoituresByName($recherche);
		//var_dump($voitures);
	}
	else if (isset($_GET['marque']) && !empty($_GET['marque'])) {
		$marque_recherche = $_GET['marque'];
		$marque_recherche = nettoyer($marque_recherche);
		if ($marque_recherche == 'all_marques') {
			header('Location: ./produits.php');
		}
		try {
			$marque = MarqueManager::getMarqueByMarque($marque_recherche);
			//var_dump($marque);
			$voitures = VoitureManager::getVoituresByMarque($marque->getIdMarque());
			//var_dump($voitures);
		} catch (Exception $e) {
			//die($e->getMessage());
			header('Location: ./produits.php');
		}
		
	}
	else {
		$voitures = VoitureManager::getallVoitures();
	}

	//Fonction permettant de nettoyer les données envoyées au travers du formulaire
	function nettoyer($data){
	    // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
	    $data = trim($data);
	    // Supprime les antislashs d'une chaîne
	    $data = stripslashes($data);
	    // Convertit les caractères spéciaux en entités HTML
	    $data = htmlspecialchars($data);
	    return $data;
	}

?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Site de vente de Voitures d'occasions">
    <meta name="author" content="AS Web">

	<title>Les produits</title>

	<!-- Logo -->
	<link rel="icon" type="image/jpeg" href="./img/logo.jpeg"/>
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
		require_once './model/DbManager.php';
		//require_once './inc/banner.php';
		require_once './inc/navbar.php';
	?>
	<!-- Barre de Recherche -->
	<div style='padding: 50px;'></div>
	<div class='row h-100'>
	<div class="container">
	    <div class="row mb-5">
	        <div class="col-lg-9 mx-auto">
	            <div class="bg-white p-5 rounded shadow">
	                <!-- Filtres de recherche -->
	                    <div class="container">
	                        <div class="row">
	                        	<div class="col">
	                            	<h5 class="text-info">Marques :</h5>
	                            		<ul class="list-group list-group-horizontal-sm">
	                                    <?php
	                                    	//Affichages des toutes les marques de la base de données pour les filtres

	                                    	$marques = MarqueManager::getLesMarques();
	        								//var_dump($marques);

	                                    	//Affichages des checkbox et des marques et si elle sont cliqués lancement fonction javascript
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
	 		//Affichage Card Bootstrap en fonction des réquêtes
	 		$compteur = 0;
	 		//var_dump($voitures);
	 		if (isset($voitures) && !empty($voitures)) {
	 			foreach ($voitures as $value) {
	 				$id_marque = $value->getIdMarque();
	 				//var_dump($id_marque);
	 				$marque = MarqueManager::getMarqueByIdMarque($id_marque);
		 			$card = '';
		 			$card .= "<div class='col-sm'>\n";
					$card .= "<!-- Début Card Bootstrap -->\n";
					$card .= "<div class='card' style='width: 18rem;'>\n";
					$card .= "<img class='card-img-top' src='./img/img-voiture/".$value->getIdVoiture().".jpg' alt='".$marque->getMarque()." ".$value->getModele()."' width='300' height='200'>\n";
					$card .= "<div class='card-body'>\n";
					$card .= "<h5 class='card-title'>".$marque->getMarque()." ".$value->getModele()."</h5>\n";
					$card .= "<p class='card-text'>".$value->getDescription3()."</p>\n";
					$card .= "<a href='fiche_produit.php?voiture=".$value->getIdVoiture()."' class='btn btn-primary'>Descriptif</a>\n";
					$card .= "<button type='button' class='btn btn-light mr-1 mb-2'>\n";
		            $card .= "<i class='fas fa-shopping-cart pr-2'></i>Ajouter au Panier\n";
		            $card .= "</button>\n";
					$card .= "</div>\n";
					$card .= "</div>\n";
					$card .= "<!-- Fin Card Bootstrap -->\n";
					$card .= "</div>\n";
					echo $card;
					$compteur++;
					if ($compteur % 3 == 0) {
						echo "</div>\n<br><div class='row'>\n";
					}
	 			}
	 			echo "</div>\n";
	 		}
		?>
		    
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

    	//A chaque chargement de page, on vérifie si la marque est dans l'URL est on coche la checkbox en fonction
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