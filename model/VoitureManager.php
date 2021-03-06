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
    private static $cnx = null;

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
            $sql ='select id, immatriculation, id_marque, modele, couleur, kilometrage, prix, poids, reservoir, annee, nombrePortes, description1, description2, description3 from voitures';
            //var_dump($sql);
            $result = self::$cnx->query($sql);

            $result->setFetchMode(PDO::FETCH_OBJ);
            while ($resultat = $result->fetch()) {
                self::$uneVoiture = new Voiture();
                self::$uneVoiture->setIdVoiture($resultat->id);
                self::$uneVoiture->setImmatriculation($resultat->immatriculation);
                self::$uneVoiture->setIdMarque($resultat->id_marque);
                self::$uneVoiture->setModele($resultat->modele);
                self::$uneVoiture->setCouleur($resultat->couleur);
                self::$uneVoiture->setKilometrage($resultat->kilometrage);
                self::$uneVoiture->setPrix($resultat->prix);
                self::$uneVoiture->setPoids($resultat->poids);
                self::$uneVoiture->setReservoir($resultat->reservoir);
                self::$uneVoiture->setAnnee($resultat->annee);
                self::$uneVoiture->setNombrePortes($resultat->nombrePortes);
                self::$uneVoiture->setDescription1($resultat->description1);
                self::$uneVoiture->setDescription2($resultat->description2);
                self::$uneVoiture->setDescription3($resultat->description3);
                self::$lesVoitures[] = self::$uneVoiture;
            }
            return self::$lesVoitures;
        } catch (Exception $e) {
             die("Erreur : ".$e->getMessage());
        }
    }

    public static function getVoituresByName($recherche){
       try {
            self::$cnx = DbManager::getConnection();
            $sql ="select id, immatriculation, id_marque, modele, couleur, kilometrage, prix, poids, reservoir, annee, nombrePortes, description1, description2, description3";
            $sql .= " from voitures";
            $sql .= " where modele LIKE '%".$recherche."%'";
            //var_dump($sql);
            $result = self::$cnx->prepare($sql);
            
            $result->execute();
            //var_dump($result->rowCount());
             
            $result->setFetchMode(PDO::FETCH_OBJ);
            if($result->rowCount() > 0)
            {
                while ($resultat = $result->fetch()) {
                    self::$uneVoiture = new Voiture();
                    self::$uneVoiture->setIdVoiture($resultat->id);
                    self::$uneVoiture->setImmatriculation($resultat->immatriculation);
                    self::$uneVoiture->setIdMarque($resultat->id_marque);
                    self::$uneVoiture->setModele($resultat->modele);
                    self::$uneVoiture->setCouleur($resultat->couleur);
                    self::$uneVoiture->setKilometrage($resultat->kilometrage);
                    self::$uneVoiture->setPrix($resultat->prix);
                    self::$uneVoiture->setPoids($resultat->poids);
                    self::$uneVoiture->setReservoir($resultat->reservoir);
                    self::$uneVoiture->setAnnee($resultat->annee);
                    self::$uneVoiture->setNombrePortes($resultat->nombrePortes);
                    self::$uneVoiture->setDescription1($resultat->description1);
                    self::$uneVoiture->setDescription2($resultat->description2);
                    self::$uneVoiture->setDescription3($resultat->description3);
                    self::$lesVoitures[] = self::$uneVoiture;
                    }
            } else {
                return null;
            }
            //var_dump(self::$lesVoitures);
            return self::$lesVoitures;
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }

    public static function getVoituresByMarque($id_marque){
        try {
            self::$cnx = DbManager::getConnection();
            $sql ='select id, immatriculation, id_marque, modele, couleur, kilometrage, prix, poids, reservoir, annee, nombrePortes, description1, description2, description3';
            $sql .= ' from voitures';
            $sql .= ' where id_marque = :id_marque';
            //var_dump($sql);
            $result = self::$cnx->prepare($sql);

            //lie les valeurs reçues en paramètres aux étiquettes de la requête préparée
            $result->bindParam('id_marque', $id_marque, PDO::PARAM_STR);
            
            $result->execute();
            //var_dump($result->rowCount());
             
            $result->setFetchMode(PDO::FETCH_OBJ);
            if($result->rowCount() > 0)
            {
                while ($resultat = $result->fetch()) {
                    self::$uneVoiture = new Voiture();
                    self::$uneVoiture->setIdVoiture($resultat->id);
                    self::$uneVoiture->setImmatriculation($resultat->immatriculation);
                    self::$uneVoiture->setIdMarque($resultat->id_marque);
                    self::$uneVoiture->setModele($resultat->modele);
                    self::$uneVoiture->setCouleur($resultat->couleur);
                    self::$uneVoiture->setKilometrage($resultat->kilometrage);
                    self::$uneVoiture->setPrix($resultat->prix);
                    self::$uneVoiture->setPoids($resultat->poids);
                    self::$uneVoiture->setReservoir($resultat->reservoir);
                    self::$uneVoiture->setAnnee($resultat->annee);
                    self::$uneVoiture->setNombrePortes($resultat->nombrePortes);
                    self::$uneVoiture->setDescription1($resultat->description1);
                    self::$uneVoiture->setDescription2($resultat->description2);
                    self::$uneVoiture->setDescription3($resultat->description3);
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

    public static function getVoituresById($id){
        try {
            self::$cnx = DbManager::getConnection();
            $sql ='select id, immatriculation, id_marque, modele, couleur, kilometrage, prix, poids, reservoir, annee, nombrePortes, description1, description2, description3';
            $sql .= ' from voitures';
            $sql .= ' where id = :id';
            //var_dump($sql);
            $result = self::$cnx->prepare($sql);

            //lie les valeurs reçues en paramètres aux étiquettes de la requête préparée
            $result->bindParam('id', $id, PDO::PARAM_STR);
            
            $result->execute();
            //var_dump($result->rowCount());
             
            $result->setFetchMode(PDO::FETCH_OBJ);
            if($result->rowCount() > 0)
            {
                while ($resultat = $result->fetch()) {
                    self::$uneVoiture = new Voiture();
                    self::$uneVoiture->setIdVoiture($resultat->id);
                    self::$uneVoiture->setImmatriculation($resultat->immatriculation);
                    self::$uneVoiture->setIdMarque($resultat->id_marque);
                    self::$uneVoiture->setModele($resultat->modele);
                    self::$uneVoiture->setCouleur($resultat->couleur);
                    self::$uneVoiture->setKilometrage($resultat->kilometrage);
                    self::$uneVoiture->setPrix($resultat->prix);
                    self::$uneVoiture->setPoids($resultat->poids);
                    self::$uneVoiture->setReservoir($resultat->reservoir);
                    self::$uneVoiture->setAnnee($resultat->annee);
                    self::$uneVoiture->setNombrePortes($resultat->nombrePortes);
                    self::$uneVoiture->setDescription1($resultat->description1);
                    self::$uneVoiture->setDescription2($resultat->description2);
                    self::$uneVoiture->setDescription3($resultat->description3);
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

    public static function getnbVoitures()
    {
        self::$cnx = DbManager::getConnection();
        $sql ='select COUNT(*)';
        $sql .= ' from voitures';
        //var_dump($sql);
        $result = self::$cnx->prepare($sql);   
        $result->execute();
        $resultat = $result->fetch();
        return $resultat[0];
    }
}
?>