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

        public function pp($image){
            
            return'<img src="'.$image.'"';
        }

        public function afficheProfil($profil){
            $image = $profil[0]["cheminVersPhoto"];
            //
                return '<div class="w-layout-blockcontainer container-2 w-container">
                <h1 class="heading-3">Mon Profil</h1>
                <section>
                  <div class="columns-2 w-row">
                    <div class="column-4 w-col w-col-4"> <img src="'.$image.'" alt="PP" class="image-2"></div>
                        <div class="column-5 w-col w-col-4">
                            <div class="text-block-2"><strong>Pseudo du Joueur</strong></div>
                        </div>
                        <div class="w-col w-col-4"></div>
                    </div>
                </section>

                <section class="config">
                  <a href="#" class="boutonconfig w-button">Button Text</a>
                  <a href="#" class="boutonconfig w-button">Button Text</a>
                </section>
                <section class="config">
                  <a href="#" class="boutonconfig w-button">Button Text</a>
                  <a href="#" class="boutonconfig w-button">Button Text</a>
                </section>
                <div class="amis">
                  <section class="section">
                    <h1>Mes Amis</h1>
                    <a href="#" class="button-7 w-button">Demander un ami</a>
                  </section>
                  <section class="section-2">
                    <div class="w-layout-blockcontainer container-3 w-container">
                      <div>
                        <div class="w-row">
                          <div class="w-col w-col-4">
                            <p class="paragraph-5"><strong>Username</strong></p>
                          </div>
                          <div class="w-col w-col-4">
                            <p class="paragraph-6"><strong>Dernière connexion</strong><br></p>
                          </div>
                          <div class="w-col w-col-4">
                            <p class="paragraph-5"><strong>Score</strong></p>
                          </div>
                        </div>
                        <div class="w-layout-vflex flex-block">
                          <div class="w-row">
                            <div class="w-col w-col-4">
                              <div class="tabinfo">username</div>
                            </div>
                            <div class="w-col w-col-4">
                              <div class="tabinfo">
                                <div class="tabinfo">score random<br><br><br>‍</div>
                              </div>
                            </div>
                            <div class="w-col w-col-4">
                              <div class="tabinfo">score random</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="section-2">
                    <div class="w-layout-blockcontainer container-3 w-container">
                      <div>
                        <div class="columns-3 w-row">
                          <div class="w-col w-col-6">
                            <p class="paragraph-5"><strong>Map</strong></p>
                          </div>
                          <div class="w-col w-col-6">
                            <p class="paragraph-5"><strong>Score</strong></p>
                          </div>
                        </div>
                        <div class="w-layout-vflex flex-block">
                          <div class="w-row">
                            <div class="w-col w-col-6">
                              <div class="tabinfo">This is some text inside of a div block.<br><br><br>‍</div>
                            </div>
                            <div class="w-col w-col-6">
                              <div class="tabinfo">This is some text inside of a div block.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>';
        }

        



    }
?>