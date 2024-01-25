<?php
    if (!MY_APP){
        die("Fichier externe détecté");
    }
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';
    class VueProfil extends VueGenerique{
        //le constructeur
        public function __construct (){
            parent::__construct();
        }
        
        public function afficherProfil($profil, $demandes){
            
            $image = $profil[0]["cheminVersPhoto"];
            $affichageprofil = "<div class='containerField'>";
            $affichageprofil = $affichageprofil.'<img src="' . $image . '" alt="PP">';
            $affichageprofil = $affichageprofil."identifiant : ". $profil[0]["identifiant"]. " Mail : ". $profil[0]["courriel"];
            if($profil[0]["droits"] == true){
                $affichageprofil = $affichageprofil."Vous etes modérateur !";
            }
            else {
                $affichageprofil = $affichageprofil."Vous n'etes pas modérateur ";
            }
            $affichageprofil = $affichageprofil."</div><div>";
            foreach($demandes as $demande){
                $affichageprofil= $affichageprofil."<div><p> demande d'ami de ".$demande["identififant"]."</p> <a href='index.php?module=mod_connexion&action=accepterCommeAmi&idAmi=".$demande["idUtilisateur"]."'>Accepter</a> <a href='index.php?module=mod_connexion&action=refuserCommeAmi&idAmi=".$demande["idUtilisateur"]."'>Refuser</a></div>";
            }
            $affichageprofil = $affichageprofil."</div>";
            return $affichageprofil;
        }

        



    }
?>