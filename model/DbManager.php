<?php

/**
* Description de la class DbManager
* Class qui implémente toutes les fonctions d'accès à la base de données
*
* @author E. Gilles & L. Boullee & A. Cerro
*/
class DbManager
{
  

  //attributs liés à la connexion avec la base de données à changer en fonction de la base de données
  private const HOST = 'localhost';
  private const PORT = '3306';
  private const DBNAME = 'projetweb';
  private const LOGIN = 'root';
  private const MDP = '';
  private static $cnx = null;

  public static function getConnection()
    {
           if (self::$cnx == null) {
               try {
                  self::$cnx = new PDO('mysql:host='.self::HOST.';port='.self::PORT.';dbname='.self::DBNAME.';charset=utf8', self::LOGIN,self::MDP, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                  self::$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               } catch (Exception $e) {
                   die('Erreur : '.$e->getMessage());
               }
           }
           return self::$cnx;
    }
}
?>