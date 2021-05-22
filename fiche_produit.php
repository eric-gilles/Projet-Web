<?php

/** 
 * fiche_produit.php
 * Page detaillé de chaque produit
 * @author E. Gilles & L. Boullee & A. Cerro
 * @date 04/2021
 */
// inclus les fichiers
require_once './model/DbManager.php';
require_once './model/MarqueManager.php';
require_once './class/Voiture.php';
require_once './class/Marque.php';

	if (isset($_GET['voiture']) && !empty($_GET['voiture'])) {
		$idVoiture = $_GET['voiture'];
		$voiture = VoitureManager::getVoituresById($idVoiture);
		//var_dump($voiture);
		//var_dump($marque);
		$voiture = $voiture[0];
		$marque = MarqueManager::getMarqueByIdMarque($voiture->getIdMarque());
	}
	else {
		//header('Location: produits.php');
	}
	
	
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta name="description" content="Site de vente de Voitures d'occasions">
    <meta name="author" content="AS Web">

	<title>Fiche_produit</title>

	<!-- Bootstrap & CSS -->
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
 	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
	<link rel="stylesheet" href="./css/mdb-pro.min.css">
	<link rel="stylesheet" href="./css/mdb.min.css">
</head>
<body class="skin-light">
    <!--Navbar and jumbotron-->
    <?php require_once './inc/navbar.php';?>
    <header>
        <div class="jumbotron gray-700 mt-70">
            <div class="d-flex align-items-center h-100">
                <div class="container text-center py-5">
                     <h2 class="mb-0"><?php echo $marque->getMarque().' '.$voiture->getModele() ?></h2>
                </div>
            </div>
        </div>
	</header>
	<!--Navbar and jumbotron-->

	<!--Main Body-->
	<main>
	<div class="container">

	<!--Section: Images & Info Achat-->
	<section class="mb-5">

		<div class="row">
			<div class="col-md-6 mb-4 mb-md-0">

				<div id="mdb-lightbox-ui"></div>

				<div class="mdb-lightbox">

					<div class="row product-gallery mx-1">

						<div class="col-12 mb-0">
							<div class="view rounded z-depth-1 main-img">
								<?php
									$html = " ";
									$html .= "<a href='./img/img-voiture/".$voiture->getIdVoiture().".jpg' data-size='710x823'>";
				                    $html .= "<img src='./img/img-voiture/".$voiture->getIdVoiture().".jpg' style='margin-top: -90px' width='550' height='450';>";
				                    $html .= "</a>\n";
									echo $html;
			                    ?>
                  			</div>
                		</div>
        			</div>
   				</div>
          </div>
          <div class="col-md-6">

			<h5><?php echo $marque->getMarque()." ".$voiture->getModele();?></h5>
			<p><span class="mr-1"><strong><?php echo $voiture->getPrix();?> €</strong></span></p>
            <p class="pt-1"><?php echo $voiture->getDescription1(); ?></p>
            <div class="table-responsive">
				<table class="table table-sm table-borderless mb-0">
                	<tbody>
                		<tr>
                    		<th class="pl-0 w-25" scope="row"><strong>Modèle</strong></th>
                    		<td><?php echo $marque->getMarque()." ".$voiture->getModele(); ?></td>
                  		</tr>
		                <tr>
		                	<th class="pl-0 w-25" scope="row"><strong>Couleur</strong></th>
		                	<td><?php echo $voiture->getCouleur(); ?></td>
		                </tr>
		                <tr>
		                	<th class="pl-0 w-25" scope="row"><strong>Immatriculation</strong></th>
		                	<td><?php echo $voiture->getImmatriculation(); ?></td>
		                </tr>
		                <tr>
		                	<th class="pl-0 w-25" scope="row"><strong>Kilométrage</strong></th>
		                	<td><?php echo $voiture->getKilometrage(); ?> km</td>
		                </tr>
                	</tbody>
              	</table>
            </div>
            <hr>
            <button type="button" class="btn btn-large btn-primary mr-1 mb-2">Acheter maintenant</button>
            <button type="button" class="btn btn-large btn-light mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Ajouter au Panier</button>
        </div>
    </div>

    </section>
    <!--Section: Images & Info Achat-->

    <!-- Informations -->
    <div class="classic-tabs">

    	<ul class="nav tabs-primary nav-justified" id="advancedTab" role="tablist">
        	<li class="nav-item">
            	<a class="nav-link active show" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
          	</li>
	        <li class="nav-item">
	        	<a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Informations</a>
	        </li>
        </ul>

        <div class="tab-content" id="advancedTabContent">
        	<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
            	<h5><?php echo $marque->getMarque()." ".$voiture->getModele(); ?></h5>
            	<p class="text-muted mb-2">Année : <?php echo $voiture->getAnnee(); ?></p>
            	<h6>Prix : <?php echo $voiture->getPrix();?> €</h6>
            	<p class="pt-1"><?php echo $voiture->getDescription2(); ?></p>
          	</div>
          	<div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
            	<h5>Informations Supplémentaires</h5>
            	<table class="table table-striped table-bordered mt-3">
              		<thead>
                		<tr>
		                	<th scope="row" class="w-150 dark-grey-text h6">Poids</th>
		                	<td><em><?php echo $voiture->getPoids(); ?> kg</em></td>
                		</tr>
              		</thead>
              		<tbody>
		            	<tr>
		                	<th scope="row" class="w-150 dark-grey-text h6">Réservoir</th>
		                	<td><em><?php echo $voiture->getReservoir(); ?> litres</em></td>
		                </tr>
		                <tr>
		                	<th scope="row" class="w-150 dark-grey-text h6">Nombre de portes</th>
		                	<td><em><?php echo $voiture->getNombrePortes(); ?></em></td>
		                </tr>
              		</tbody>
            	</table>
          	</div>
        </div>
    </div>
    </div>
	<!-- Informations -->

	</main>
	<!--Main Body-->
	
	<div style="padding: 30px;"></div>

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