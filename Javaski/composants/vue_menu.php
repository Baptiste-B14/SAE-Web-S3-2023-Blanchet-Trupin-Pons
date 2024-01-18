<?php

class VueMenus {
	private $affichageMenu;
	public function __construct() {
		$this->affichageMenu = '
		<div data-animation="default" data-collapse="all" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-logo-left-container shadow-three w-nav">
      <div class="w-layout-blockcontainer w-container">
        <div class="columns w-row">
          <div class="w-col w-col-2">
            <a href="index.php" class="navbar-brand w-nav-brand"><img src="images/Logo.png" loading="lazy" width="115" sizes="(max-width: 767px) 100vw, (max-width: 991px) 98px, 115px" alt="" srcset="images/Logo-p-500.png 500w, images/Logo-p-800.png 800w, images/Logo.png 907w"></a>
          </div>
          <div class="w-col w-col-2">
            <a href="#" class="button-2 w-button">Le Jeu</a>
          </div>
          <div class="column-3 w-col w-col-2">
            <a href="#" class="button-2 w-button">Le Jeu</a>
          </div>
          <div class="w-col w-col-2">
            <a href="#" class="button-2 w-button">Les Tours</a>
          </div>
          <div class="w-col w-col-2">
            <a href="#" class="button-2 w-button">Mon Profil</a>
          </div>
          <div class="w-col w-col-2">
            <a href="#" class="button-2 w-button">Connexion</a>
          </div>
        </div>
      </div>
    </div>';
	}

	public function getAffichageMenu(){
		return $this->affichageMenu;
	}

	
}




?>
