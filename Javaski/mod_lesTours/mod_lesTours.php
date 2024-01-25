<?php
if (!MY_APP){
    die("Fichier externe détécté");
}

include_once 'cont_lesTours.php';


class ModTours{
	private $action;
	private $controleur;
	public function __construct() {
		$this->controleur = new ContTours();
	}
	
	public function affiche(){return $this->controleur->getAffichage();}
	

}

?>