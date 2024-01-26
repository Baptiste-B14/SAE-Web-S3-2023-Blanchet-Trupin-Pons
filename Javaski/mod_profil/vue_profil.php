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
                <div class="columns-2 w-row" >
                  <div class="column-4 w-col w-col-4"><img src="'.$image.'" width="96px" alt="" class="image-2"></div>
                  <div class="column-5 w-col w-col-4">
                    <div class="text-block-2"><h2 ><strong>'.$profil[0]["identifiant"].'</strong></h2></div>
                  </div>
                
                </div>
              </section>';
            $vueProfil = $vueProfil.'
          <div class="amis">
            <section class="section">
              <h1>Mes Amis</h1>
              <div class="form-block w-form">
                <form action="index.php?module=mod_profil&action=RechercheAmi" id="email-form" name="email-form" Form" method="get" class="form"><input type="text" class="text-field w-input" maxlength="256" name="nomUti" data-name="Email" placeholder="username" required=""><input type="submit" class="submit-button w-button" value="Demande Ami"></form>
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
                      <p class="paragraph-6"><strong>Points d\'experience</strong><br></p>
                    </div>
                    <div class="w-col w-col-4">
                      <p class="paragraph-5"><strong>Courriel</strong></p>
                    </div>
                  </div>
                  <div class="w-layout-vflex boxinfos">';
                  foreach($amis as $ami){
                    $vueProfil= $vueProfil.'
                      <div class="w-layout-hflex flex-block-4">
                        <div class="tabinfo">'.$ami["identifiant"].'</div>
                        <div class="tabinfo">'.$ami["pointsExperience"].'<br><br><br>‍</div>
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
                        SELECT identifiant, idUtilisateur1 FROM demande_ami inner join utilisateur on (idUtilisateur1 = idUtilisateur) WHERE idUtilisateur2=:idU
                        ';
                        $prepare1 = $bdd->prepare($req3);
                        $prepare1->execute(['idU'=>htmlspecialchars($demande["idUtilisateur2"])]);
                        $identifiantUtilisateur= $prepare1->fetchAll(); 
                        if (!empty($identifiantUtilisateur)){
                          $vueProfil = $vueProfil.'
                          <div class="w-layout-hflex flex-block-4">
                            <div class="tabinfo">'.$identifiantUtilisateur[0]["identifiant"].'</div>
                            <a href="index.php?module=mod_profil&action=accepterCommeAmi&idAmi='.$identifiantUtilisateur[0]["idUtilisateur1"].'" class="logo-linkblock w-inline-block"><img src="images/case-a-cocher.png" loading="lazy" width="64"  class="logo"></a>
                            <a href="index.php?module=mod_profil&action=refuserCommeAmi&idAmi='.$identifiantUtilisateur[0]["idUtilisateur1"].'" class="logo-linkblock w-inline-block"><img src="images/annuler.png" loading="lazy" width="64" alt="" class="logo"></a>
                          </div>';
                        }
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