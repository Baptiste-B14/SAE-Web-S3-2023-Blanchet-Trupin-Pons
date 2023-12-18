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
            $this->controleur->exec();
        }

        public function affichage(){
            return $this->controleur->affichage();
        }
    }

            
?>