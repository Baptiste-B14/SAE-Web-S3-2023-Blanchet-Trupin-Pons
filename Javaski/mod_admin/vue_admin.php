<?php

class VueAdmin {
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
        <p class="paragraph-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
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
  public function getAffichageMenuUtilisateurNonConnecte(){
    return $this->affichageMenuUtilisateurNonConnecte;
  }
	public function getAffichageMenuUtilisateur(){
		return $this->affichageMenuUtilisateur;
	}
  public function getAffichageMenuAdministrateur(){
    return $this->affichageMenuAdministrateur;
  }

	
}




?>
