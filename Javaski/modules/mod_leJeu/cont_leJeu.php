<?php

include_once 'modules/mod_leJeu/vue_leJeu.php';
include_once 'modules/mod_leJeu/modele_leJeu.php';


class ContJeu{
	private $vue;
	private $modele;

	public function __construct() {
		$this->vue=new VueJeu();
	}

	public function getAffichage(){
		return $this->vue->getAffichage();
	}
}


?>