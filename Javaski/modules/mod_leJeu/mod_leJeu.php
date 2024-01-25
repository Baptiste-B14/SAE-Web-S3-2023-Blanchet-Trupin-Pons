<?php

include_once 'modules/mod_leJeu/cont_leJeu.php';


class ModJeu{
	private $action;
	private $controleur;
	public function __construct() {
		$this->controleur = new ContJeu();
	}
	
	public function affiche(){return $this->controleur->getAffichage();}
	
	public function exec(){
		
	}
}

?>