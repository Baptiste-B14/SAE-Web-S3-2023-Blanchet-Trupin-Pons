<?php

    include_once 'cont_connexion.php';
    include_once 'connexion.php';

    class ModConnexion {
        private $controleur;

        public function __construct(){
            $this->controleur = new ContConnexion();
            $this->vue = new VueConnexion();
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

        // a revoir si ne marche pas : est normalement uitilisé par le tampon pour afficher le menu de co/deco/inscription
        public function affichage(){
            return $this->vue->affichage();
        }
    }

            
?>