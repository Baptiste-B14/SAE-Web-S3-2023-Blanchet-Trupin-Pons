<?php

class VueMenus {
	private $affichageMenuUtilisateur;
  private $affichageMenuAdministrateur;
  private $affichageMenuUtilisateurNonConnecte;
	public function __construct() {
    $this->affichageMenuUtilisateurNonConnecte = '<div class="section nav">
    <div class="container nav">
    <a href="#Home" class="logo-linkblock w-inline-block"><img src="images/logo_1.png" loading="lazy" width="72" alt="" class="logo"></a>
    <div class="menu-link">
      <a href="index.php?module=mod_jeu" class="nav-links">LE JEU</a>
      <a href="index.php?module=mod_statistiques" class="nav-links">LES TOURS</a>
      <a href="index.php?module=mod_scores" class="nav-links">SCORES MONDIAUX</a>
      <a href="index.php?module=mod_connexion&action=formCreation" class="nav-links hover cta">CREATION</a>
      <a href="index.php?module=mod_connexion&action=formConnexion" class="nav-links hover cta">CONNEXION</a>
      </div>
      <div data-w-id="459bebdb-edfb-018a-84a6-5afc80cd01ae" data-is-ix2-target="1" class="hamburger" data-animation-type="lottie" data-src="C:\wamp64\www\Site-Javaski\Javaski\documents\lottieflow-menu-nav-04-ffffff-easey.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="2.5833333333333335" data-duration="0"></div>
      </div>
      </div>';
		$this->affichageMenuUtilisateur = '
    <div class="section nav">
    <div class="container nav">
    <a href="#Home" class="logo-linkblock w-inline-block"><img src="images/logo_1.png" loading="lazy" width="72" alt="" class="logo"></a>
    <div class="menu-link">
      <a href="index.php?module=mod_jeu" class="nav-links">LE JEU</a>
      <a href="index.php?module=mod_statistiques" class="nav-links">LES TOURS</a>
      <a href="index.php?module=mod_scores" class="nav-links">SCORES MONDIAUX</a>
      <a href="index.php?module=mod_profil" class="nav-links">MON PROFIL</a>
      <a href="index.php?module=mod_connexion&action=deconnexion" class="nav-links hover cta">DECONNEXION</a>
      </div>
      <div data-w-id="459bebdb-edfb-018a-84a6-5afc80cd01ae" data-is-ix2-target="1" class="hamburger" data-animation-type="lottie" data-src="C:\wamp64\www\Site-Javaski\Javaski\documents\lottieflow-menu-nav-04-ffffff-easey.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="2.5833333333333335" data-duration="0"></div>
        
      </div>
      </div>';

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
