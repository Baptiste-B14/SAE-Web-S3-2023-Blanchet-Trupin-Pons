<?php

include_once 'composants/vue_menu.php';
include_once 'composants/modele_menu.php';


class ContMenus{
	private $vue;
	private $modele;

	public function __construct() {
		$this->vue=new VueMenus();
		$this->modele=new ModeleMenus();
	}

	public function getAffichageMenu(){
		return $this->vue->getAffichageMenu();
	}
}




?>