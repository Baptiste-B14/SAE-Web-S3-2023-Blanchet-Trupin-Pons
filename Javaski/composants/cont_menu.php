<?php

include_once 'composants/vue_menu.php';
include_once 'composants/modele_menu.php';


class ContMenus{
	private $vue;
	private $modele;

	public function __construct() {
		$this->modele=new ModeleMenus();
		if ($this->modele->userAdministrateur()){
			$this->vue=new VueMenus();
		}
	}

	public function getAffichageMenu(){
		if(isset($_SESSION["login"]) && $this->modele->userAdministrateur()){
			return $this->vue->getAffichageMenuAdministrateur();
		}else{
			return $this->vue->getAffichageMenuUtilisateur();
		}
	}
}




?>