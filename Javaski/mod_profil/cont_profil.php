<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    
    include_once 'vue_profil.php';
    include_once 'modele_profil.php';

    class ContProfil{
        private $vue;
        private $modele;
        private $action;

        public function __construct (){
            $this->vue = new VueProfil();
            $this->modele = new ModeleProfil();
        }

        public function exec (){
            // si $a est vide alors 'profilGeneral', sinon il prend la valeur de $a
            $this->action = isset($_GET['action']) ? $_GET['action'] : 'affichage profil';

            switch ($this->action){  
                case "accepterCommeAmi" :
                    $this->accepterCommeAmi();
                    break;
                case "refuserCommeAmi" :
                    $this->refuserCommeAmi();
                    break;
                case "RechercheAmi" :
                    $this->recherche();
                    break;
                case "affichage profil":
                    break;
                default :
                    die ("action inexistante");           
            }
        }

        public function getAction() {
            return $this->action;
        }

        public function accepterCommeAmi(){
            $idAmi = isset($_GET['idAmi']) ? $_GET['idAmi'] : 0 ;   
            $this->modele->accepterDemandeAmi($idAmi);               
        }

        public function recherche(){
            $this->modele->envoiDemande();
        }

        public function refuserCommeAmi(){
            $idAmi = isset($_GET['idAmi']) ? $_GET['idAmi'] : 0 ;
            $this->modele->refuserDemandeAmi($idAmi);
        }

        public function getAffichage(){
            $profil = $this->modele->get_profil($_SESSION["id"]);
            $demandes = $this->modele->get_demandes();
            $amis = $this->modele->get_listeAmis();
            //return $this->vue->afficherProfil($profil, $demande);
            return $this->vue->afficheProfil($profil, $demandes, $amis, $this->modele->get_historiqueParties(), $this->modele->getbdd());
        
        }

    }
    
?>