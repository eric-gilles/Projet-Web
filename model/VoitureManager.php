<?php
/**
 * ./model/VoitureManager.php
 * Définition de la class VoitureManager
 * Class qui gère les interactions entre les voitures de l'application et les voitures de la bdd
 *
 * @author E. Gilles & L. Boullee & A. Cerro
 */
// inclus les fichiers
require_once './model/DbManager.php';
require_once './class/Voiture.php';
require_once './class/Marque.php';
require_once './model/MarqueManager.php';

class VoitureManager
{
     // attributs techniques
    private static ?\PDO $cnx = null;

    // attributs métier
    private static $uneVoiture;
    private static $lesVoitures = array();

     /**
     * Obtient par requête SQL toutes les voitures de la BDD
     * en utilisant la méthode fetch( ) et en remplissant un tableau
     * @return array
     */
    public static function getallVoitures(){
        try {
            self::$cnx = DbManager::getConnection();
            $sql ='select id, immatriculation, marque, modele, couleur, kilometrage, prix, poids, reservoir, annee, nombrePortes, description1, description2, description3';
            $sql.= ' from voiture';
            //var_dump($sql);
            $result = self::$cnx->query($sql);
            $result->setFetchMode(PDO::FETCH_OBJ);
            self::$uneVoiture = new Voiture();
            self::$uneVoiture->setIdVoiture($result->id);
            self::$uneVoiture->setImmatriculation($result->immatriculation);
            self::$uneVoiture->setMarque($result->marque);
            self::$uneVoiture->setModele($result->modele);
            self::$uneVoiture->setCouleur($result->couleur);
            self::$uneVoiture->setKilometrage($result->kilometrage);
            self::$uneVoiture->setPrix($result->prix);
            self::$uneVoiture->setPoids($result->poids);
            self::$uneVoiture->setReservoir($result->reservoir);
            self::$uneVoiture->setAnnee($result->annee);
            self::$uneVoiture->setNombrePortes($result->nombrePortes);
            self::$uneVoiture->setDescription1($result->description1);
            self::$uneVoiture->setDescription2($result->description2);
            self::$uneVoiture->setDescription3($result->description3);
            while (self::$uneVoiture = $pdo->fetch()) {
                self::$lesVoitures[] = self::$uneVoiture;
            }
            return self::$lesVoitures;
        } catch (Exception $e) {
             die("Erreur : ".$e->getMessage());
        }
    }

    public static function getLesVoituresByName($recherche){
       try {
            self::$cnx = DbManager::getConnection();
            $sql ='select id, immatriculation, marque, modele, couleur, kilometrage, prix, poids, reservoir, annee, nombrePortes, description1, description';
            $sql .= ' from voiture';
            $sql .= ' where modele =:recherche';
            //var_dump($sql);
            $result = self::$cnx->prepare($sql);

            // lie les valeurs reçues en paramètres aux étiquettes de la requête préparée
            $result->bindParam('recherche', $recherche, PDO::PARAM_STR);
            
            $result->execute();
            //var_dump($result->rowCount());
             
            $result->setFetchMode(PDO::FETCH_OBJ);
            if($result->rowCount() > 0)
            {
                while ($unResultat = $result->fetch()) {
                    self::$uneVoiture = new Voiture();
                    self::$uneVoiture->setIdVoiture($result->id);
                    self::$uneVoiture->setImmatriculation($result->immatriculation);
                    self::$uneVoiture->setMarque($result->marque);
                    self::$uneVoiture->setModele($result->modele);
                    self::$uneVoiture->setCouleur($result->couleur);
                    self::$uneVoiture->setKilometrage($result->kilometrage);
                    self::$uneVoiture->setPrix($result->prix);
                    self::$uneVoiture->setPoids($result->poids);
                    self::$uneVoiture->setReservoir($result->reservoir);
                    self::$uneVoiture->setAnnee($result->annee);
                    self::$uneVoiture->setNombrePortes($result->nombrePortes);
                    self::$uneVoiture->setDescription1($result->description1);
                    self::$uneVoiture->setDescription2($result->description2);
                    self::$uneVoiture->setDescription3($result->description3);
                    self::$lesVoitures[] = self::$uneVoiture;
                }
            } else {
                return null;
            } 
            return self::$lesVoitures;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }

    public static function getLesVoituresByMarques($marque){
        try {
            self::$cnx = DbManager::getConnection();
            $sql ='select id, immatriculation, marque, modele, couleur, kilometrage, prix, poids, reservoir, annee, nombrePortes, description1, description';
            $sql .= ' from voiture';
            $sql .= 'where marque = :marque';
            //var_dump($sql);
            $result = self::$cnx->prepare($sql);

            //lie les valeurs reçues en paramètres aux étiquettes de la requête préparée
            $result->bindParam('marque', $marque, PDO::PARAM_STR);
            
            $result->execute();
            //var_dump($result->rowCount());
             
            $result->setFetchMode(PDO::FETCH_OBJ);
            if($result->rowCount() > 0)
            {
                while ($unResultat = $result->fetch()) {
                    self::$uneVoiture = new Voiture();
                    self::$uneVoiture->setIdVoiture($result->id);
                    self::$uneVoiture->setImmatriculation($result->immatriculation);
                    self::$uneVoiture->setMarque($result->marque);
                    self::$uneVoiture->setModele($result->modele);
                    self::$uneVoiture->setCouleur($result->couleur);
                    self::$uneVoiture->setKilometrage($result->kilometrage);
                    self::$uneVoiture->setPrix($result->prix);
                    self::$uneVoiture->setPoids($result->poids);
                    self::$uneVoiture->setReservoir($result->reservoir);
                    self::$uneVoiture->setAnnee($result->annee);
                    self::$uneVoiture->setNombrePortes($result->nombrePortes);
                    self::$uneVoiture->setDescription1($result->description1);
                    self::$uneVoiture->setDescription2($result->description2);
                    self::$uneVoiture->setDescription3($result->description3);
                    self::$lesVoitures[] = self::$uneVoiture;
                }
            } else {
                return null;
            } 
            return self::$lesVoitures;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
}
?>