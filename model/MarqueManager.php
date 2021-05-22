<?php
/**
 * ./model/RoleManager.php
 * Définition de la class RoleManager
 * Class qui gère les interactions entre les rôles de l'application et les rôles de la bdd
 *
 * @author E. Gilles & L. Boullee & A. Cerro
 * @date: 04/2021
 */
// inclus les fichiers
require_once './model/DbManager.php';
require_once './class/Voiture.php';
require_once './model/VoitureManager.php';
require_once './class/Marque.php';
class MarqueManager {
    // attributs techniques
    private static $cnx = null;

    // attributs métier
    private static $uneMarque;
    private static $lesMarques = array();


    /**
     * Obtient par requête SQL tous les rôles de la BDD
     * en utilisant la méthode fetch( ) et en remplissant un tableau d'objets
     * @return array
     */
    public static function getLesMarques(): array
    {
        try{
            self::$cnx = DbManager::getConnection();
            $sql = "select id_marque, marque";
            $sql .= " FROM Marques";
            $sql .= " ORDER BY marque";
            //var_dump($sql);
            $result = self::$cnx->query($sql); 
            $result->setFetchMode(PDO::FETCH_CLASS, 'Marque');
            while (self::$uneMarque = $result->fetch()) {
                self::$lesMarques[] = self::$uneMarque;
            }
            return self::$lesMarques;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public static function getMarqueByid($id_marque): array
    {
        try{
            self::$cnx = DbManager::getConnection();
            
            $sql = 'select id_marque, marque';
            $sql .= ' from marques';
            $sql .= ' where id_marque= :id_marque';
            //var_dump($sql);
            $result = self::$cnx->prepare($sql);
            
            // lie les valeurs reçues en paramètres aux étiquettes de la requête préparée   
            $result->bindParam('id_marque', $id_marque, PDO::PARAM_INT);
            
            $result->execute();
            //var_dump($result->rowCount());
             
            $result->setFetchMode(PDO::FETCH_CLASS, 'Marque');
            if($result->rowCount() > 0)
            {
                while (self::$uneMarque = $result->fetch()) {
                    return self::$uneMarque;
                }
            } else {
                return null;
            } 
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        } 
    }
}
?>