<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    include_once 'cont_score.php';
    include_once 'connexion.php';

    class ModScore {
        private $controleur;

        public function __construct(){
            $this->controleur = new ContScore();
        }

        public function exec(){
            $this->controleur->exec();
        }


        public function affiche(){
            return $this->controleur->getAffichage();
        }
    }

            
?>