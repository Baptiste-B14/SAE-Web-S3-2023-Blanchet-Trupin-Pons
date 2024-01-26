<?php

include_once 'mod_admin/cont_admin.php';


class ModAdmin{
	
	private $controleur;
	public function __construct() {
		$this->controleur = new ContAdmin();
	}
	
	public function exec(){
		$this->controleur->exec();
	}


	public function affiche(){
		return $this->controleur->getAffichage();
	}
}

?>