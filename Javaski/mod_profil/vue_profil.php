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

        public function afficherProfil($cheminVers){

           /* <div class="containerField">
                <div class="divLabel" id="labelPP">
                    <label for="pp">Photo de Profil : </label> 
                </div>
                <!--cette div sert à stocker l'img quand selectionnée-->
                <div id="pppreview" class="pp-preview"></div> 
                <input type="file" id="pp" name="pp" accept="image/*"> 
                
            </div>*/

            $image = $profil["cheminVersPhoto"];
            echo "<div class='containerField'>"
            echo '<img src="' . $image . '" alt="PP">';
            echo "identifiant : ", $profil["identifiant"], " Mail : ", $profil["courriel"];
            echo "</div>";
            
        }



    }
?>