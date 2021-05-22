<?php
/**
 * /model/Voiture.php
 * Définition de la class Voiture
 * 
 * @author E. Gilles & L. Boullee & A. Cerro
 * @date 04/2021
 */
// inclus les fichiers
require_once './model/DbManager.php';
require_once './model/VoitureManager.php';
require_once './class/Marque.php';
require_once './model/MarqueManager.php';
class Voiture
{
	/*
     * Attributs :
     * - ils sont en visibilité private pour respecter le principe d'encapsulation
     * - le typage des attributs n'est valable que les versions les plus récentes de PHP
     */
	private $id;
	private $immatriculation;
	private $id_marque;
	private $modele;
	private $couleur;
	private $kilometrage;
	private $prix;
	private $poids;
	private $reservoir;
	private $annee;
	private $nombrePortes;
	private $description1;
	private $description2;
	private $description3;

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
     * @return type
     */
    public function getIdVoiture()
    {
        return $this->id;
    }
	/**
	 * @return $immatriculation
	 */
	public function getImmatriculation()
	{
	    return $this->immatriculation;
	}

	/**
	 * @return $marque
	 */
	public function getIdMarque()
	{
	    return $this->id_marque;
	}

	/**
	 * @return $modele
	 */
	public function getModele()
	{
	    return $this->modele;
	}

	/**
	 * @return $couleur
	 */
	public function getCouleur()
	{
	    return $this->couleur;
	}

	/**
	 * @return $kilometrage
	 */
	public function getKilometrage()
	{
	    return $this->kilometrage;
	}

	/**
	 * @return $prix
	 */
	public function getPrix()
	{
	    return $this->prix;
	}

	/**
	 * @return $poids
	 */
	public function getPoids()
	{
	    return $this->poids;
	}

	/**
	 * @return $reservoir
	 */
	public function getReservoir()
	{
	    return $this->reservoir;
	}

	/**
	 * @return $annee
	 */
	public function getAnnee()
	{
	    return $this->annee;
	}

	/**
	 * @return $nombrePortes
	 */
	public function getNombrePortes()
	{
	    return $this->nombrePortes;
	}

	/**
	 * @return $description1
	 */
	public function getDescription1()
	{
	    return $this->description1;
	}

	/**
	 * @return $description2
	 */
	public function getDescription2()
	{
	    return $this->description2;
	}
	
	/**
	 * @return $description3
	 */
	public function getDescription3()
	{
	    return $this->description3;
	}

	//SETTER
	/**
	 * @param $id
	 */
	public function setIdVoiture($id)
	{
	    $this->id = $id;
	}

	/**
	 * @param $immatriculation
	 */
	public function setImmatriculation($immatriculation)
	{
		if (strlen($immatriculation) == 6) {
	    	$this->immatriculation = $immatriculation;
		}
	}
	
	/**
	 * @param $marque
	 */
	public function setIdMarque($id_marque)
	{
	    $this->id_marque = $id_marque;
	}

	/**
	 * @param $modele
	 */
	public function setModele($modele)
	{
	    $this->modele = $modele;

	}

	/**
	 * @param $couleur
	 */
	public function setCouleur($couleur)
	{
	    $this->couleur = $couleur;
	}

	/**
	 * @param $kilometrage
	 */
	public function setKilometrage($kilometrage)
	{
	    $this->kilometrage = $kilometrage;
	}

	/**
	 * @param $prix
	 */
	public function setPrix($prix)
	{
	    $this->prix = $prix;
	}

	/**
	 * @param type $poids
	 */
	public function setPoids($poids)
	{
	    $this->poids = $poids;
	}

	/**
	 * @param type $reservoir
	 */
	public function setReservoir($reservoir)
	{
	    $this->reservoir = $reservoir;
	}

	/**
	 * @param type $annee
	 */
	public function setAnnee($annee)
	{
	    $this->annee = $annee;
	}

	/**
	 * @param type $nombrePortes
	 */
	public function setNombrePortes($nombrePortes)
	{
	    $this->nombrePortes = $nombrePortes;
	    return $this;
	}

	/**
	 * @param $description1
	 */
	public function setDescription1($description1)
	{
	    $this->description1 = $description1;
	}

	/**
	 * @param $description2
	 */
	public function setDescription2($description2)
	{
	    $this->description2 = $description2;
	}
	
	/**
	 * @param $description3
	 */
	public function setDescription3($description3)
	{
	    $this->description3 = $description3;
	}

}


?>