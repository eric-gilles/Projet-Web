<?php

/* ./jumbotron
 * 
 * Jumbotron pour l'index
 * code : require_once = './inc/jumbotron'
 * @date 05/2021
 * @author E. Gilles & L. Boullee & A. Cerro
 */

?>

<div class="jumbotron jumbotron-background text-color-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Trouve ta voiture patriote dès maintenant :</h1>    
            </div>
                <!-- appel de rechercher -->
                
        </div>
        <form method="POST" action="./produits.php">
            <div class="input-group">
                <div class="form-outline w-25 pl-2">
                    <input type="search" id="form1" class="form-control" placeholder="Rechercher une voiture"/>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>