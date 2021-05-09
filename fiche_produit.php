<?php

/** 
 * fiche_produit.php
 * Page detaillé de chaque produit
 * @author E.Gilles & L.Boullee
 * @date 04/2021
 */
?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Accueil</title>

	<!-- Bootstrap & CSS -->
	<link rel="stylesheet" href="./css/style.css">
<<<<<<< HEAD
        <link rel="stylesheet" href="./css/bootstrap.min.css">
=======
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb-pro.min.css">
  <!-- Material Design Bootstrap Ecommerce -->
  <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb.ecommerce.min.css">
>>>>>>> d52d5a945a5a2060454b5bf63e3209088f7eb5b8
</head>
<body class="skin-light">
    <!--Navbar and jumbotron-->
    <?php require_once './inc/navbar.php';?>
    <header>
        <div class="jumbotron gray-700 mt-70">
            <div class="d-flex align-items-center h-100">
                <div class="container text-center py-5">
                     <h2 class="mb-0">Renault Clio</h2>
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
                    <a href="./img/imgtest.png" data-size="710x823">
                      <img src="./img/imgtest.png" style="margin-top: -90px"  width="550" height="400";>
                    </a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="row">
                    <div class="col-3">
                      <div class="view rounded z-depth-1 gallery-item hoverable">
                        <img src="./img/imgtest1.jpg" class="img-fluid">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="view rounded z-depth-1 gallery-item hoverable">
                        <img src="./img/imgtest.png" class="img-fluid">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="view rounded z-depth-1 gallery-item hoverable">
                        <img src="./img/imgtest.png" class="img-fluid">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="view rounded z-depth-1 gallery-item hoverable">
                        <img src="./img/imgtest.png" class="img-fluid">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
          <div class="col-md-6">

            <h5>Renault Clio</h5>
            <p class="mb-2 text-muted text-uppercase small">Citadine</p>
            <p><span class="mr-1"><strong>8790 €</strong></span></p>
            <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
              error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
              officia quis dolore quos sapiente tempore alias.</p>
            <div class="table-responsive">
              <table class="table table-sm table-borderless mb-0">
                <tbody>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Modèle</strong></th>
                    <td>Renault Clio</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Couleur</strong></th>
                    <td>Bleu</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Localisation</strong></th>
                    <td>Montpellier, France</td>
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
            <h5>Product Description</h5>
            <p class="small text-muted text-uppercase mb-2">Citadine</p>
            <h6>8790 €</h6>
            <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
              error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
              officia quis dolore quos sapiente tempore alias.</p>
          </div>
          <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
            <h5>Informations Supplémentaires</h5>
            <table class="table table-striped table-bordered mt-3">
              <thead>
                <tr>
                  <th scope="row" class="w-150 dark-grey-text h6">Poids</th>
                  <td><em>1.240 kg</em></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="w-150 dark-grey-text h6">Dimensions</th>
                  <td><em>4.05 × 1.79 x 1.44 m</em></td>
                </tr>
              </tbody>
            </table>
          </div>
            </div>
          </div>
        </div>

      </div>
      <!-- Informations -->
    </div>
  </main>
  <!--Main Body-->

    
    
    <!-- Chargement Script -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>