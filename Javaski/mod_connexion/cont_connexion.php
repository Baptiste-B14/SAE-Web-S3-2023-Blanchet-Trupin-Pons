<?php
    
    include_once 'vue_connexion.php';
    include_once 'modele_connexion.php';

    class ContConnexion{
        private $vue;
        private $modele;
        private $action;

        public function __construct (){
            $this->vue = new VueConnexion();
            $this->modele = new ModeleConnexion();
            // si $a est vide alors 'bienvenue', sinon il prend la valeur de $a
            $this->action = !isset($_GET['action']) ? 'bienvenue' : $_GET['action'];
        }

        public function formulaire_creation(){
            $this->vue->formCrea(); 
            $this->modele->CreerUser();
        }

        public function bienvenue(){
            // mettre un msg de bienvenue quand SESSION validée 
        }

        public function connexion(){
            // lacer formulaire de connexion
        }

        public function deconnexion(){
            // formulaire de deconnexion
        }

        public function exec(){
            switch ($this->action){
                case "formulaire" :
                    $this->formulaire_creation();
                    break;
                case "bienvenue" :
                    $this->bienvenue();
                    break;  
                case "connexion" :
                    $this->connexion();
                    break;
                case "deconnexion" :
                    $this->deconnexion();
                    break;             
               
            }
            
        }

        



    }
    
?>