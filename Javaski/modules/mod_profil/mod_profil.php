<?php

include_once 'modules/mod_profil/cont_profil.php';


class ModProfil{
	private $action;
	private $controleur;
	public function __construct() {
		$this->controleur = new ContProfil();
	}
	
	public function affiche(){return $this->controleur->getAffichageProfil();}
	

}

?>