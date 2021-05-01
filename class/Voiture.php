<?php
/**
 * /model/Voiture.php
 * Définition de la class Voiture
 * 
 * @author E.Gilles & L.Boullee
 * @date 04/2021
 */
class Voiture
{
	/*
     * Attributs :
     * - ils sont en visibilité private pour respecter le principe d'encapsulation
     * - le typage des attributs n'est valable que les versions les plus récentes de PHP
     */
	private $immatriculation;
	private $marque;
	private $modele;
	private $couleur;
	private $kilometrage;
	private $description1;
	private $description2;

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
	 * @return $immatriculation
	 */
	public function getImmatriculation($immatriculation)
	{
	    return $this->immatriculation;
	}

	/**
	 * @return $marque
	 */
	public function getMarque()
	{
	    return $this->marque;
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
	
	//SETTER
	/**
	 * @param $immatriculation
	 */
	public function setImmatriculation($immatriculation)
	{
		if (strlen($attribut) == 9) {
	    	$this->immatriculation = $immatriculation;
		}
	}
	
	/**
	 * @param $marque
	 */
	public function setMarque($marque)
	{
	    $this->marque = $marque;
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
     * Teste le nombre de caractères de la plaque d'immatriculation
     * @return boolean
     */
    public function isValide(): bool{
        $nbCaracteresImmat = strlen($this->immatriculation);
        if($nbCaracteresImmat >= 9)
            return true;
        else
            return false;
    }
}


?>
