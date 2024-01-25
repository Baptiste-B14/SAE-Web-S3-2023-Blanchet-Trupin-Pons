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
            echo "<div class='containerField'>"
            echo '<img src="' . $image . '" alt="PP">';
            echo "identifiant : ", $profil["identifiant"], " Mail : ", $profil["courriel"];
            if($profil["droit"] == true){
                echo "Vous etes modérateur !";
            }
            else {
                echo "Vous n'etes pas modérateur ";
            }
            echo "</div>";
            
        }

        public function afficherDemandes($demandes){
            echo"<div>";
            foreach($demandes as $demande){
                echo"<div><p> demande d'amis de ".$demande["identififant"]."</p> <a href='index.php?module=mod_connexion&action=???'>Accepter</a> <a href='index.php?module=mod_connexion&action=???'>Refuser</a></div>";
            }
            echo"</div>";
        }



    }
?>