<?php
/**
 * /model/Marque.php
 * Définition de la class Marque
 * 
 * @author E. Gilles & L. Boullee & A. Cerro
 * @date 05/2021
 */
// inclus les fichiers
require_once './model/DbManager.php';
require_once './class/Voiture.php';
require_once './model/VoitureManager.php';
require_once './model/MarqueManager.php';
class Marque
{
	/*
     * Attributs :
     * - ils sont en visibilité private pour respecter le principe d'encapsulation
     * - le typage des attributs n'est valable que les versions les plus récentes de PHP
     */
	private $id;
	private $marque;

	/*
     * Constructeur: 1 seul constructeur en PHP
     */
    public function __construct()
    {
        
    }
    /*
     * Accesseurs : méthodes permettant d'avoir accès aux valeurs des attributs des objets (car les attributs sont privés)
     * - get... permet d'obtenir (récupérer) la valeur de l'attribut
     * - set... permet d'affecter une valeur à un attribut
     * 
     * Il est possible fonctionnellement d'utiliser les méthodes magiques __get et __set
     * mais cela ne s'est fait plus car cela pose problème pour des outils comme les ORM
     */

	//GETTER
	
    /**
     * @return $id
     */
    public function getId()
    {
        return $this->id;
    }
	/**
	 * @return $marque
	 */
	public function getMarque()
	{
	    return $this->marque;
	}

	//SETTER

	/**
	 * @param $id
	 */
	public function setId($id)
	{
	    $this->id = $id;
	    return $this;
	}

	/**
	 * @param $marque
	 */
	public function setMarque($marque)
	{
	    $this->marque = $marque;
	}
}


?>
