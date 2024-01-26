<?php

class VueAdmin {
  private $affichageAdmin;
	private $affichageOutilsAdmin;
  private $affichageValidationComptes;
  
	public function __construct() {
    
		$this->affichageOutilsAdmin = '
      <section class="section-7">
      <h1 class="heading-8">Outils administrateurs</h1>
      <div class="div-block-7">
        <div class="redirect validation">
          <h3>Validation des <br>nouveaux comptes</h3>
        </div>
        <div class="redirect moderation">
          <h3 class="heading-9">Outils de <br>modération</h3>
        </div>
      </div>
      <div>
        <p class="paragraph-8">En tant que modérateur du site de "Javaski", votre rôle est essentiel pour créer et maintenir une communauté de jeu en ligne positive, engageante et respectueuse. Votre principale mission est de veiller à ce que les interactions au sein de la plateforme restent agréables, sécurisées et conformes aux règles établies. Cela implique la surveillance régulière des discussions sur le forum, des commentaires et des messages, ainsi que la réaction rapide aux comportements inappropriés. En encourageant un langage courtois, une communication constructive et en intervenant lorsqu\'il est nécessaire, vous contribuez à établir un environnement accueillant pour les joueurs. De plus, en signalant et en traitant efficacement les comportements abusifs, vous aidez à préserver l\'intégrité du jeu et à protéger la satisfaction de la communauté. Restez attentif, impartial et coopérez avec l\'équipe de modération pour garantir que chaque joueur puisse profiter pleinement de l\'expérience de "Javaski" dans un cadre sain et respectueux. Merci de votre dévouement envers notre communauté de jeu !</p>
      </div>
      <br><br><br><br><br>
    </section>
    ';

    $this->affichageValidationComptes = '
          <div class="w-col w-col-2">
            <a href="index.php" class="navbar-brand w-nav-brand"><img src="images/Logo.png" loading="lazy" width="115" sizes="(max-width: 767px) 100vw, (max-width: 991px) 98px, 115px" alt="" srcset="images/Logo-p-500.png 500w, images/Logo-p-800.png 800w, images/Logo.png 907w"></a>
          </div>
          <div class="w-col w-col-2">
            <a href="index.php?module=mod_leJeu" class="button-2 w-button">Le Jeu</a>
          </div>
          <div class="column-3 w-col w-col-2">
            <a href="index.php?module=mod_leJeu" class="button-2 w-button">Le Jeu</a>
          </div>
          <div class="w-col w-col-2">
            <a href="index.php?module=mod_tours" class="button-2 w-button">Les Tours</a>
          </div>
          <div class="w-col w-col-2">
            <a href="index.php?module=mod_profil" class="button-2 w-button">Mon Profil</a>
          </div>
          <div class="w-col w-col-2">
            <a href="index.php?module=mod_connexion&action=deconnexion" class="button-2 w-button">Deconnexion</a>
          </div>';
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
	public function getAffichageValidationComptes(){
		return $this->affichageValidationComptes;
	}

	
}




?>
