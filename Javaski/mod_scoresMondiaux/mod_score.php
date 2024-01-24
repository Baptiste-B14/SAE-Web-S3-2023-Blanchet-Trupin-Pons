<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    include_once 'cont_score.php';
    include_once 'connexion.php';

    class ModScore {
        private $controleur;

        public function __construct(){
            $this->controleur = new ContConnexion();
            $this->vue = new VueConnexion();
        }

        public function exec(){
            $this->controleur->exec();
        }


        // a revoir si ne marche pas : est normalement uitilisé par le tampon pour afficher le menu
        public function affiche(){
            return $this->vue->menu();
        }
    }

            
?>