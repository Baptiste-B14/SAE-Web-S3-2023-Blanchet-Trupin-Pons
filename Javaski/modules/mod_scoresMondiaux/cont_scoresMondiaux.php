<?php

include_once 'modules/mod_scoresMondiaux/vue_scoresMondiaux.php';
include_once 'modules/mod_scoresMondiaux/modele_scoresMondiaux.php';


class ContScoresMondiaux{
	private $vue;
	private $modele;

	public function __construct() {
		$this->vue=new VueScoresMondiaux();
		$this->modele=new ModeleScoresMondiaux();
	}

	public function getAffichageScoresMondiaux(){
		return $this->vue->getAffichageScoresMondiaux();
	}
}


?>