<?php

    include_once 'cont_connexion.php';
    include_once 'connexion.php';

    class ModConnexion {
        private $controleur;

        public function __construct(){
            $this->controleur = new ContConnexion();
            $this->exec();
        }

        public function exec (){
            $action = $this->controleur->getAction();
            switch ($this->action){
                case "creation" :
                    $this->controleur->creation();
                    break;  
                case "connexion" :
                    $this->controleur->connexion();
                    break;
                // pas utilisé actuellement    
                case "deconnexion" :
                    $this->controleur->deconnexion();
                    break;             
               
            }
        }

        public function affichage(){
            return $this->controleur->affichage();
        }
    }

            
?>