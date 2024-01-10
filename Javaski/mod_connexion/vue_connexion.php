<?php
    include_once '/home/etudiants/info/gpons/local_html/MVC3/module/vue_generique.php';
    class VueConnexion /*extends VueGenerique*/{
        //le constructeur
        public function __construct (){
            parent::__construct();
        }
        
        public function formCo(){
            include_once '..\Form\Form_Connexion.html';
        }

        public function formCrea(){
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