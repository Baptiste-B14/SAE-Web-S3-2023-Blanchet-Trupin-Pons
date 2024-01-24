<?php
    if (!MY_APP){
        die("Fichier externe détecté");
    }
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\connexion.php';

    class ModeleScore extends Connexion{
        public function __construct(){
            parent::initConnexion();
            // vide actuellement
        }

        public function getMap(){
            
        }

        public function get_meilleursUtilisateurs($map){  

            // code php pour recup les utilisateurs qui otn bon score dans la map selectionnée
            // le trie des utilisateurs se fera dans la requete 
        }
    }
?>