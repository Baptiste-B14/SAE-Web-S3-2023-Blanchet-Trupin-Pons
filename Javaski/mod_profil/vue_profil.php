<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';
    class VueProfil extends VueGenerique{
        //le constructeur
        public function __construct (){
            parent::__construct();
        }
        
        public function menu(){
           
        }

        public function afficherProfil($profil){

            $image = $profil["cheminVersPhoto"];
            $affichageprofil = "<div class='containerField'>";
            $affichageprofil = $affichageprofil.'<img src="' . $image . '" alt="PP">';
            $affichageprofil = $affichageprofil."identifiant : ", $profil["identifiant"], " Mail : ", $profil["courriel"];
            if($profil["droit"] == true){
                $affichageprofil = $affichageprofil."Vous etes modérateur !";
            }
            else {
                $affichageprofil = $affichageprofil."Vous n'etes pas modérateur ";
            }
            $affichageprofil = $affichageprofil."</div>";
            return $affichageprofil;
        }

        public function afficherDemandes($demandes){
            echo"<div>";
            foreach($demandes as $demande){
                echo"<div><p> demande d'ami de ".$demande["identififant"]."</p> <a href='index.php?module=mod_connexion&action=accepterCommeAmi&idAmi=".$demande["identifiant"]."'>Accepter</a> <a href='index.php?module=mod_connexion&action=refuserCommeAmi&idAmi=".$demande["identifiant"]."'>Refuser</a></div>";
            }
            echo"</div>";
        }



    }
?>