<?php

include_once 'modules/mod_lesTours/cont_lesTours.php';


class ModTours{
	private $action;
	private $controleur;
	public function __construct() {
		$this->controleur = new ContTours();
	}
	
	public function affiche(){return $this->controleur->getAffichageTours();}
	

}

?>