<?php
if (!MY_APP){
    die("Fichier externe détécté");
}

include_once 'vue_lesTours.php';
include_once 'modele_lesTours.php';


class ContTours{
	private $vue;
	private $modele;
    private $action;

	public function __construct() {
		$this->vue=new VueTours();
		$this->modele=new ModeleTours();
	}

    public function exec (){
        // si $a est vide alors 'profilGeneral', sinon il prend la valeur de $a
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'toutesTours';

        switch ($this->action){
            case "toutesTours" :
                $this->allTours();
                break;  
            case "" :                   
                break; 
            default :
                die ("action inexistante");           
        }
    }

    public function allTours(){
        $listeTours = $this->modele->getAllTours();
        $this->vue->initialiserVueTours($listeTours);
        
    }

	public function getAffichage(){
		return $this->vue->getAffichage();
	}
}


?>