<?php

include_once 'modules/mod_profil/vue_profil.php';
include_once 'modules/mod_profil/modele_profil.php';


class ContProfil{
	private $vue;
	private $modele;

	public function __construct() {
		$this->vue=new VueProfil();
		$this->modele=new ModeleProfil();
	}

	public function getAffichageProfil(){
		return $this->vue->getAffichageProfil();
	}
}


?>