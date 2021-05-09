<?php
/**
 * ./model/VoitureManager.php
 * Définition de la class VoitureManager
 * Class qui gère les interactions entre les voitures de l'application et les voitures de la bdd
 *
 * @author E.gilles
 */
// inclus les fichiers
require_once './model/DbManager.php';
require_once './class/Voiture.php';
require_once './class/Marque.php';
require_once './model/MarqueManager.php';

class VoitureManager
{
    private static $uneVoiture;
    private static $lesVoitures = array();

     /**
     * Obtient par requête SQL toutes les voitures de la BDD
     * en utilisant la méthode fetch( ) et en remplissant un tableau
     * @return array
     */
    public static function getallVoitures(){
        try {
            $pdo = DbManager::getConnection();
            $rep = "SELECT id, immatriculation, marque, modele, couleur FROM voiture";
            $pdo = $pdo->query($rep);
            $pdo->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
            while (self::$uneVoiture = $pdo->fetch()) {
                self::$lesVoitures[] = self::$uneVoiture;
            }
            return self::$lesVoitures;
        } catch (Exception $e) {
             die("Erreur : ".$e->getMessage());
        }
    }
}
?>