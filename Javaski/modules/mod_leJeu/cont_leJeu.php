<?php

include_once 'modules/mod_leJeu/vue_leJeu.php';
include_once 'modules/mod_leJeu/modele_leJeu.php';


class ContJeu{
	private $vue;
	private $modele;

	public function __construct() {
		$this->vue=new VueJeu();
		$this->modele=new ModeleJeu();
	}

	public function getAffichageJeu(){
		return $this->vue->getAffichageJeu();
	}
}


?>