<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    
    include_once 'vue_connexion.php';
    include_once 'modele_connexion.php';

    class ContConnexion{
        private $vue;
        private $modele;
        private $action;

        public function __construct (){
            $this->vue = new VueConnexion();
            $this->modele = new ModeleConnexion();
        }

        public function exec (){
            // si $a est vide alors 'bienvenue', sinon il prend la valeur de $a
            $this->action = isset($_GET['action']) ? $_GET['action'] : 'bienvenue';

            switch ($this->action){
                case "formCreation" :
                    $this->vue->afficherCreation();
                    break;  
                case "formConnexion" :
                    $this->vue->afficherConnexion();
                    break;
                // pas utilisé actuellement    
                case "deconnexion" :
                    $this->deconnexion();
                    break;  
                case "creation"  :
                    $this->creation();
                    break;
                case "connexion" :
                    $this->connexion();
                    break;
                case "bienvenue" : 
                    echo "bienvenue";
                    break;        
            }
        }

        public function getAction() {
            return $this->action;
        }

        
        public function creation(){
            $this->modele->CreerUser();
        }

        public function connexion(){
            $this->modele->Connexion();
        }

        public function deconnexion(){
            $this->modele->Deconnexion();
        }

        public function getAffichage(){
            return $this->vue->getAffichage();
        }



    }
    
?>