<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';
    class VueConnexion extends VueGenerique{
        //le constructeur
        public function __construct (){
            parent::__construct();
        }
        
        public function formCo(){
            // Securite : generation token 
            if(!isset($_SESSION['csrf_token'])){
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // generation token aléatoire 
            }
            $csrfToken = $_SESSION['csrf_token'];

            include_once '..\Form\Form_Connexion.html';
        }

        public function formCrea(){
            // Securite : generation token
            if(!isset($_SESSION['csrf_token'])){
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // generation token aléatoire 
            }
            $csrfToken = $_SESSION['csrf_token'];

            include_once '..\Form\Form_Creation.html';
        }

        // ce menu s'affiche en haut à droite du site 
        public function menu(){
            echo "<a href='index.php?module=mod_connexion&action=connexion'>Se connecter</a>";
            echo "<a href='index.php?module=mod_connexion&action=creation'>Creer un Compte</a>";
        }

        public function VueDeco(){
            echo "<a href='index.php?module=mod_connexion&action=deconnexion'>Deconnexion</a>";
        }

    }








?>