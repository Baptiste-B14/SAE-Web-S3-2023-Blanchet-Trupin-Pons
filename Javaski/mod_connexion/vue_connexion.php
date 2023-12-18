<?php
    include_once '/home/etudiants/info/gpons/local_html/MVC3/module/vue_generique.php';
    class VueConnexion /*extends VueGenerique*/{
        //le constructeur
        public function __construct (){
            parent::__construct();
        }
        
        public function co(){
            // inclure le formulaire de connexion
        }

        public function formCrea(){
            include_once '..\Form\Form_Creation.html';
        }

        public function menu(){
            // menu
        }

        public function VueDeco(){
            // vue deco
        }

    }








?>