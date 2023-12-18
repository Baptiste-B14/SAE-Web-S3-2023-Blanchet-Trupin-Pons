<?php

include_once 'modules/mod_lesTours/vue_lesTours.php';
include_once 'modules/mod_lesTours/modele_lesTours.php';


class ContTours{
	private $vue;
	private $modele;

	public function __construct() {
		$this->vue=new VueTours();
		$this->modele=new ModeleTours();
	}

	public function getAffichageTours(){
		return $this->vue->getAffichageTours();
	}
}


?>