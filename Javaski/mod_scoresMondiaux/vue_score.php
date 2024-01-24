<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';
    class VueScore extends VueGenerique{
        //le constructeur
        public function __construct (){
            parent::__construct();
        }
        
        public function formCo(){

        }

        public function formCrea(){

        }

        // ce menu s'affiche en haut à droite du site 
        public function menu(){

        }


    }
?>