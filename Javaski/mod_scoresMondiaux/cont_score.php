<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    
    include_once 'vue_score.php';
    include_once 'modele_score.php';

    class ContScore{
        private $vue;
        private $modele;
        private $action;

        public function __construct (){
            $this->vue = new VueScore();
            $this->modele = new ModeleScore();
        }

        public function exec (){
            // si $a est vide alors 'bienvenue', sinon il prend la valeur de $a
            $this->action = isset($_GET['action']) ? $_GET['action'] : 'bienvenue';

            switch ($this->action){
                case "creation" :
                    break;  
                case "connexion" :                    
                    break;
                case "deconnexion" :
                    break;    
                case "bienvenue" : 
                    break;
                case "creerUser";
                    break;
                case "connectUser";
                    break;               
            }
        }

        public function getAction() {
            return $this->action;
        }

        public function bienvenue(){
            // mettre un msg de bienvenue quand SESSION validée 
        }

        



    }
    
?>