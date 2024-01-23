<?php

include_once 'modules/mod_scoresMondiaux/cont_scoresMondiaux.php';


class ModScoresMondiaux{
	private $action;
	private $controleur;
	public function __construct() {
		$this->controleur = new ContScoresMondiaux();
	}
	
	public function affiche(){return $this->controleur->getAffichageScoresMondiaux();}
	

}

?>