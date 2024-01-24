<?php

include_once 'composants/cont_menu.php';


class ModMenus{
	private $action;
	private $controleur;
	public function __construct() {
		$this->controleur = new ContMenus();
	}
	
	public function affiche(){return $this->controleur->getAffichageMenu();}
	
	public function userAdministrateur() {
		return $this->controleur->getModele()->userAdministrateur();
	}
}

?>