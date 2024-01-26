<?php

class VueAdmin extends VueGenerique{
  private $affichageAdmin;
	private $affichageOutilsAdmin;
  
  
	public function __construct() {
    parent::__construct();
    
		$this->affichageOutilsAdmin = '
      <section class="section-7">
      <h1 class="heading-8">Outils administrateurs</h1>
      <div class="div-block-7">
        <div class="redirect validation">
        
          <h3><a href="index.php?module=mod_admin&action=validationComptes">Validation des <br>nouveaux comptes</a></h3>
        </div>
        <div class="redirect moderation">
          <h3> <a href="index.php?module=mod_admin&action=affichageOutils">Outils de <br>modération</a></h3>
        </div>
      </div>
      <div>
        <p class="paragraph-8">En tant que modérateur du site de "Javaski", votre rôle est essentiel pour créer et maintenir une communauté de jeu en ligne positive, engageante et respectueuse. Votre principale mission est de veiller à ce que les interactions au sein de la plateforme restent agréables, sécurisées et conformes aux règles établies. Cela implique la surveillance régulière des discussions sur le forum, des commentaires et des messages, ainsi que la réaction rapide aux comportements inappropriés. En encourageant un langage courtois, une communication constructive et en intervenant lorsqu\'il est nécessaire, vous contribuez à établir un environnement accueillant pour les joueurs. De plus, en signalant et en traitant efficacement les comportements abusifs, vous aidez à préserver l\'intégrité du jeu et à protéger la satisfaction de la communauté. Restez attentif, impartial et coopérez avec l\'équipe de modération pour garantir que chaque joueur puisse profiter pleinement de l\'expérience de "Javaski" dans un cadre sain et respectueux. Merci de votre dévouement envers notre communauté de jeu !</p>
      </div>
      <br><br><br><br><br>
    </section>
    ';

	}
  public function setAffichage($affichage){
    $this->affichageAdmin = $affichage;
  }
  public function getAffichage(){
    return $this->affichageAdmin;
  }
  public function getAffichageOutilsAdmin(){
    return $this->affichageOutilsAdmin;
  }
	public function getAffichageValidationComptes($demandes){
    $affichageValidation = '<section class="section-8">
    <h1 class="heading-10">Demande de création <br>de comptes</h1>
    <div class="div-block-8">
      <p>Photo de profil</p>
      <p>Username</p>
      <p>Adresse mail</p>
      <p class="paragraph-9">Valider</p>
      <p class="paragraph-10">Refuser</p>
    </div>';
    foreach($demandes as $demande){
      $affichageValidation.= '
        <div class="div-block-9"><img src="'.$demande["cheminVersPhoto"].'" loading="lazy" width="94" alt="" class="image-4">
        <p>'.$demande["identifiant"].'</p>
        <p>'.$demande["courriel"].'</p>
        <a href="index.php?module=mod_admin&action=accepterUser&idUser='.$demande["idDemandeur"].'" class="logo-linkblock w-inline-block"><img src="images/case-a-cocher.png" loading="lazy" width="72" sizes="(max-width: 479px) 20vw, (max-width: 991px) 13vw, 32px" alt="" class="logo"></a>
        <a href="index.php?module=mod_admin&action=refuserUser&idUser='.$demande["idDemandeur"].'" class="logo-linkblock w-inline-block"><img src="images/annuler.png" loading="lazy" width="72" alt="" class="logo"></a>
      </div>';
    }
    $affichageValidation.='</section>';
    return $affichageValidation;
	}

	
}




?>
