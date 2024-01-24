<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    
    include_once 'vue_profil.php';
    include_once 'modele_profil.php';

    class ContProfil{
        private $vue;
        private $modele;
        private $action;

        public function __construct (){
            $this->vue = new VueProfil();
            $this->modele = new ModeleProfil();
        }

        public function exec (){
            // si $a est vide alors 'profilGeneral', sinon il prend la valeur de $a
            $this->action = isset($_GET['action']) ? $_GET['action'] : 'profilGeneral';

            switch ($this->action){
                case "profilGeneral" :
                    $this->profilG();
                    break;  
                case "" :                   
                    break; 
                default :
                    die ("action inexistante");           
            }
        }

        public function getAction() {
            return $this->action;
        }

        public function profilG(){
            $profil = $this->modele->get_profil($_SESSION["id"]);
            $this->vue->afficherProfil($profil);
        }


    }
    
?>