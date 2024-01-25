<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    
    include_once 'vue_score.php';
    include_once 'modele_score.php';

    class ContScore{
        private $vue;
        private $modele;
        private $action;

        public function __construct (){
            $this->vue = new VueScore();
            $this->modele = new ModeleScore();
            
        }

        public function exec (){
            // si $a est vide alors 'meilleursU', sinon il prend la valeur de $a
            $this->action = isset($_GET['action']) ? $_GET['action'] : 'corpsPage';

            switch ($this->action){
                case "meilleursU" :
                    $this->meilleursU();
                    break;  
                case "form_XLS" :   
                    $this->formMap();                 
                    break; 
                case "post_XLS" : 
                    $this->post();
                    break;
                case "corpsPage":
                    break;
                default :
                    die ("action inexistante");           
            }
        }

        public function getAction() {
            return $this->action;
        }

        public function meilleursU(){
            echo'méthode actuellement en full commentaire';
            // $this->vue->lienMenu();
            // $map = $this->vue->menu();
            
            // // récup dans BD les meilleurs utilisateurs 
            // $listeMU = $this->modele->get_meilleursUtilisateurs($map);
            // // affiche la liste
            // $this->vue->afficherMU($listeMU);
        }

        public function meilleursUGlobal(){
            $listeMUG = $this->modele->get_meilleursUtilisateursGlobal();
            $this->vue->affiche_MUG($listeMUG);
        }

        public function formMap(){
            $this->vue->afficherFormXLS();
        }

        public function post(){
            $this->modele->post_BD();
        }

        public function getAffichage(){
            return $this->vue->getAffichage();
        }
        



    }
    
?>