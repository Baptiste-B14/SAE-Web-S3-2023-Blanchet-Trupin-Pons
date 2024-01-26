<?php
if (!MY_APP){
    die("Fichier externe détécté");
}
include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';

class VueTours extends VueGenerique{
  private $vueTours;
	public function __construct() {
        parent::__construct();
        $this->vueTours = '<section class="section-6">
        <div class="div-block-6">
          <div>
            <div>
              <h1 class="heading-5">Tours</h1>
            </div>
          </div>
          <div class="div-block-2">
            <div class="w-layout-hflex flex-block-2">
              <h1 class="heading-7">Tour</h1>
              <div data-hover="false" data-delay="0" class="dropdown w-dropdown">
                <div class="dropdown-toggle w-dropdown-toggle">
                  <div class="w-icon-dropdown-toggle"></div>
                  <div>Selectionner</div>
                </div>
                <nav class="w-dropdown-list">
                  <a href="#" class="w-dropdown-link">Link 1</a>
                  <a href="#" class="w-dropdown-link">Link 2</a>
                  <a href="#" class="w-dropdown-link">Link 3</a>
                  <a href="#" class="w-dropdown-link">Link 4</a>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="statistiques"><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="">';
	}
    // Adapter cette fonction pour afficher dynamiquement les tours
    // dans la fonction initialiserVueTours
    /**
    public function afficheAllTours($listeTours){
        ?><ul><?php
        foreach($listeTours as $Tour){
            ?><li><div><p>Nom : <?=$Tour["nomTour"]?> Winrate : <?=$Tour["pourcentageVictoire"]?> </p></div></li><?php
        }
        ?></ul><?php

    }
    **/
    public function initialiserVueTours($tours, $bdd){
        foreach ($tours as $tour){

            $req1 =  'SELECT count(idTour) as nombreDeSelection FROM a_été_posé_dans WHERE idTour=:idT GROUP BY idTour';
            $pdo_req1 = $bdd->prepare($req1);
            $pdo_req1->execute([ 'idT'=>htmlspecialchars($tour["idTour"])]);
            $nbSelection = $pdo_req1->fetchAll() ;

            $req = "SELECT SUM(nombreKills) as nombreDeKills FROM a_été_posé_dans WHERE idTour=:idT GROUP BY idTour";
            $pdo_req = $bdd->prepare($req);
            $pdo_req->execute([ 'idT'=>htmlspecialchars($tour["idTour"])]);
            $nbKills = $pdo_req->fetchAll() ;
            
            $tauxDeVictoire = $tour["pourcentageVictoire"];


            $this->vueTours .= '
            <div class="div-block-5">
              <div class="infoscore">
                <p class="infos">Nombre de Selection : '.$nbSelection[0]["nombreDeSelection"].'</p>
              </div>
              <div class="infoscore">
                <p class="infos">Nombre de Kill : '.$nbKills[0]["nombreDeKills"].'</p>
              </div>
              <div class="infoscore">
                <p class="infos">Nombre de Destruction</p>
              </div>
              <p class="infos">WinRate : '.$tauxDeVictoire.'</p>
            </div>
            ';
        }
        $this->vueTours .='</div></section>';
    }
	public function getAffichage(){
        return $this->vueTours;
    }
}




?>