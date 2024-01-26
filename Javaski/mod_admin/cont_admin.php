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
		$this->action = isset($_GET['action']) ? $_GET['action'] : 'affichage outils';

            switch ($this->action){  
                case "accepterUser" :
                    $this->accepterUser();
                    break;
                case "refuserUser" :
                    $this->refuserUser();
                    break;
                case "affichage outils":
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
		$this->modele->accepterDemandeAmi($idUser);               
	}

	public function refuserUser(){
		$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : 0 ;
		$this->modele->refuserDemandeAmi($idUser);
	}
	
	public function getAffichage(){
		$profil = $this->modele->get_profil($_SESSION["id"]);
		$demandes = $this->modele->get_demandes();
		$amis = $this->modele->get_listeAmis();
		//return $this->vue->afficherProfil($profil, $demande);
		return $this->vue->afficheProfil($profil, $demandes, $amis, $this->modele->get_historiqueParties(), $this->modele->getbdd());
	
	}
}




?>