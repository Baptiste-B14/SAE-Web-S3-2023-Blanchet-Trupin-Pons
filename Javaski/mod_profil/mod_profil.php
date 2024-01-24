<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    include_once 'cont_profil.php';
    include_once 'connexion.php';

    class ModProfil {
        private $controleur;

        public function __construct(){
            $this->controleur = new ContProfil();
            $this->vue = new VueProfil();
        }

        public function exec(){
            $this->controleur->exec();
        }


        // ne pas utiliser normalement 
        public function affiche(){
            return $this->vue->menu();
        }
    }

            
?>