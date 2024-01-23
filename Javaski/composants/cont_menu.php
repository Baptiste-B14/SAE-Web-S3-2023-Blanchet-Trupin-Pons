<?php

include_once 'composants/vue_menu.php';
include_once 'composants/modele_menu.php';


class ContMenus{
	private $vue;
	private $modele;

	public function __construct() {
		$this->modele=new ModeleMenus();
		$this->vue= new VueMenus();
	}

	public function getAffichageMenu(){
		if(isset($_SESSION["login"]) && $this->modele->userAdministrateur()){
			return $this->vue->getAffichageMenuAdministrateur();
		}else{
			return $this->vue->getAffichageMenuUtilisateur();
		}
	}
	public function getModele(){
		return $this->modele;
	}
}




?>