<?php

/* ./jumbotron
 * 
 * Jumbotron pour l'indexe
 * code : require_once = './inc/jumbotron'
 * @date 05/2021
 * @author Lilian Boullée
 */

?>
<div class="jumbotron  jumbotron-background text-color-white">
    <h1 class="display-4">FrancAuto des voitures 100% française</h1>
    <p>Trouve ta voiture patriote des maintenant :</p>

    <!-- appelle de rechercher -->
<form method="POST" action="./produits.php">
    <div class="input-group">
        <div class="form-outline">
            <input type="search" id="form1" class="form-control" placeholder="Rechercher une voiture" />

        </div>
        <button type="submit" class="btn btn-primary">
        <i class="fas fa-search"></i>
        </button>
    </div>
</form>
 
</div>
