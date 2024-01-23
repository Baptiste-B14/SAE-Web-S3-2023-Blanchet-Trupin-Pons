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
            // si $a est vide alors 'bienvenue', sinon il prend la valeur de $a
            $this->action = !isset($_GET['action']) ? $_GET['action'] : 'bienvenue';
        }

        public function getAction() {
            return $this->action;
        }

        public function creation(){
            $this->vue->formCrea(); 
            $this->modele->CreerUser();
        }

        public function bienvenue(){
            // mettre un msg de bienvenue quand SESSION validée 
        }

        public function connexion(){
            $this->vue->formCo(); 
            $this->modele->Connexion();
        }

        public function deconnexion(){
            $this->modele->Deconnexion();
        }

        



    }
    
?>