<?php

class VueMenus {
	private $affichageMenuUtilisateur;
  private $affichageMenuAdministrateur;
	public function __construct() {
		$this->affichageMenuUtilisateur = '
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
            <a href="index.php?module=mod_lesTours" class="button-2 w-button">Les Tours</a>
          </div>
          <div class="w-col w-col-2">
            <a href="index.php?module=mod_profil" class="button-2 w-button">Mon Profil</a>
          </div>
          <div class="w-col w-col-2">
            <a href="index.php?module=mod_connexion&action=connexion" class="button-2 w-button">Connexion</a>
          </div>
        ';

    $this->affichageMenuAdministrateur = '
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
            <a href="index.php?module=mod_lesTours" class="button-2 w-button">Les Tours</a>
          </div>
          <div class="w-col w-col-2">
            <a href="index.php?module=mod_profil" class="button-2 w-button">Mon Profil</a>
          </div>
          <div class="w-col w-col-2">
            <a href="index.php?module=mod_connexion&action=connexion" class="button-2 w-button">Connexion</a>
          </div>';
	}

	public function getAffichageMenuUtilisateur(){
		return $this->affichageMenuUtilisateur;
	}
  public function getAffichageMenuAdministrateur(){
    return $this->affichageMenuAdministrateur;
  }

	
}




?>
