<?php

include_once 'mod_admin/vue_admin.php';
include_once 'mod_admin/modele_admin.php';


class ContAdmin{
	private $vue;
	private $modele;

	public function __construct() {
		$this->modele=new ModeleAdmin();
		$this->vue= new VueAdmin();
	}

	public function getAffichageAdmin(){
		$this->action = isset($_GET['action']) ? $_GET['action'] : 'affichageOutils';
            switch ($this->action){  
				case "validationComptes" :
					$this->vue->setAffichage($this->vue->getAffichageValidationComptes($this->modele->get_listeDemandeurs()));
					break;
                case "accepterUser" :
                    $this->accepterUser();
                    break;
                case "refuserUser" :
                    $this->refuserUser();
                    break;
                case "affichageOutils":
					$this->vue->setAffichage($this->vue->getAffichageOutilsAdmin());
                    break;
                default :
                    die ("action inexistante");           
            }
	}
	public function getModele(){
		return $this->modele;
	}


	public function accepterUser(){
		$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : 0 ;   
		$this->modele->accepterUser($idUser);               
	}

	public function refuserUser(){
		$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : 0 ;
		$this->modele->refuserUser($idUser);
	}
	
	public function getAffichage(){
		$demandesCreationComptes = $this->modele->get_listeDemandeurs();
		return $this->vue->afficheProfil($demandesCreationComptes);
	
	}
}




?>