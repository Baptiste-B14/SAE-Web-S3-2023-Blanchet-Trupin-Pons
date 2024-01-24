<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    include_once 'cont_connexion.php';
    include_once 'connexion.php';

    class ModConnexion {
        private $controleur;

        public function __construct(){
            $this->controleur = new ContConnexion();
            $this->vue = new VueConnexion();
        }

        public function exec(){
            $this->controleur->exec();
        }
        // a revoir si ne marche pas : est normalement uitilisé par le tampon pour afficher le menu de co/deco/inscription
        public function affiche(){
            return $this->cont->getAffichage();
        }
    }

            
?>