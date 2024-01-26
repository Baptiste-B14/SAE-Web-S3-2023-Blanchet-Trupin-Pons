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

        public function afficheProfil($profil, $demandes,  $amis, $parties, $bdd){
            $image = $profil[0]["cheminVersPhoto"];
            //
            $vueProfil = '
          
            <div class="w-layout-blockcontainer container-2 w-container">
              <h1 class="heading-3">Mon Profil</h1>
              <section>
                <div class="columns-2 w-row">
                  <div class="column-4 w-col w-col-4"><img src="'.$image.'" alt="" class="image-2"></div>
                  <div class="column-5 w-col w-col-4">
                    <div class="text-block-2"><strong>'.$profil[0]["identifiant"].'</strong></div>
                  </div>
                  <div class="w-col w-col-4"></div>
                </div>
              </section>';
            $vueProfil = $vueProfil.'<section class="config">
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
            <section class="sectioninfos">
              <div class="w-layout-blockcontainer container-3 w-container">
                <div class="divinfos">
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
                  <div class="w-layout-vflex boxinfos">';
                  foreach($amis as $ami){
                    $vueProfil= $vueProfil.'
                      <div class="w-layout-hflex flex-block-4">
                        <div class="tabinfo">'.$ami["identifiant"].'</div>
                        <div class="tabinfo">'.$ami["experience"].'<br><br><br>‍</div>
                        <div class="tabinfo">'.$ami["courriel"].'</div>
                      </div>';
                  }
            
                  $vueProfil = $vueProfil.'</div>
                  </div>
                </div>
              </section>
              <section class="sectioninfos">
                <div class="w-layout-blockcontainer container-3 w-container">
                  <div class="divinfos">
                    <div class="w-row">
                      <div class="w-col w-col-4">
                        <p class="paragraph-5"><strong>Username</strong></p>
                      </div>
                      <div class="w-col w-col-4">
                        <p class="paragraph-6"><strong>Accepter</strong></p>
                      </div>
                      <div class="w-col w-col-4">
                        <p class="paragraph-5"><strong>Refuser</strong></p>
                      </div>
                    </div>
                    <div class="w-layout-vflex boxinfos">';
                      foreach($demandes as $demande){
                        $req3='
                        SELECT identifiant, idUtilisateur FROM demande_ami WHERE idUtilisateur1=:idU
                        ';
                        $prepare1 = $bdd->prepare($req3);
                        $prepare1->execute(['idU'=>htmlspecialchars($demande["idUtilisateur1"])]);
                        $identifiantUtilisateur= $prepare1->fetchAll(); 
                        $vueProfil = $vueProfil.'
                        <div class="w-layout-hflex flex-block-4">
                          <div class="tabinfo">'.$identifiantUtilisateur["identifiant"].'</div>
                          <a href="index.php?module=mod_profil&action=accepterCommeAmi&idAmi='.$identifiantUtilisateur["idUtilisateur"].'" class="logo-linkblock w-inline-block"><img src="images/case-a-cocher.png" loading="lazy" width="72" sizes="(max-width: 479px) 80vw, (max-width: 991px) 13vw, 32px" alt="" srcset="images/case-a-cocher-p-500.png 500w, images/case-a-cocher.png 512w" class="logo"></a>
                          <a href="index.php?module=mod_profil&action=refuserCommeAmi&idAmi='.$identifiantUtilisateur["idUtilisateur"].'" class="logo-linkblock w-inline-block"><img src="images/annuler.png" loading="lazy" width="72" alt="" class="logo"></a>
                        </div>';
                      }
                        
                      $vueProfil = $vueProfil.'</div>
                      </div>
                    </div>
                  </section>';
            
                        
            $vueProfil = $vueProfil.'
            <section class="sectioninfos">
              <div class="w-layout-blockcontainer container-3 w-container">
                <div class="divinfos">
                  <div class="columns-3 w-row">
                    <div class="w-col w-col-6">
                      <p class="paragraph-5"><strong>Map</strong></p>
                    </div>
                    <div class="w-col w-col-6">
                      <p class="paragraph-5"><strong>Score</strong></p>
                    </div>
                  </div>
                  <div class="w-layout-vflex boxinfos">';
            
                    foreach($parties as $partie){
                      $nomsCartes = '';
                        $req='
                        SELECT map.nom FROM a_eu_lieu_dans natural join map WHERE idPartie=:idP limit 10
                        ';
                        $prepare = $bdd->prepare($req);
                        $prepare->execute(['idP'=>htmlspecialchars($partie["idPartie"])]);
                        $maps= $prepare->fetchAll();
                        
                        foreach ($maps as $map) {
                          $nomsCartes .= $map['nom'] . '<br><br>‍';
                        }
                        // Ajouter les informations de la partie à la variable $vueProfil
                              $vueProfil .= '
                              <div class="w-layout-hflex flex-block-4">
                                <div class="tabinfo">' . $nomsCartes . '</div>
                                <div class="tabinfo">' . htmlspecialchars($partie["score"]) . '<br>‍</div>
                              </div>';
                    }
          
          
                    $vueProfil = $vueProfil.'
                          </div>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>';
                return $vueProfil;

        }
    }
?>