<?php

class VueProfil {
	private $affichageProfil;
	public function __construct() {
		$this->affichageProfil = '
		<div class="w-layout-blockcontainer container-2 w-container">
    <div data-animation="default" data-collapse="all" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-logo-left-container shadow-three w-nav">
      <div class="w-layout-blockcontainer w-container">
        <div class="columns w-row">
          <div class="w-col w-col-2">
            <a href="#" class="navbar-brand w-nav-brand"><img src="images/Logo.png" loading="lazy" width="115" sizes="(max-width: 767px) 100vw, (max-width: 991px) 98px, 115px" alt="" srcset="images/Logo-p-500.png 500w, images/Logo-p-800.png 800w, images/Logo.png 907w"></a>
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
    </div>
    <section class="section">
      <h1 class="heading">JAVASKI</h1><img src="images/Logo.png" loading="lazy" sizes="(max-width: 767px) 100vw, (max-width: 991px) 727.984375px, 907px" srcset="images/Logo-p-500.png 500w, images/Logo-p-800.png 800w, images/Logo.png 907w" alt="" class="image">
      <div class="text-block">Presentation générale du jeu<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.<br>‍</div>
    </section>
    <div class="w-row">
      <div class="column-2 w-col w-col-6"><img src="images/bobsleigh.png" loading="lazy" width="157" sizes="157px" alt="" srcset="images/bobsleigh-p-500.png 500w, images/bobsleigh.png 527w"></div>
      <div class="w-col w-col-6">
        <h1 class="heading-2">Les Ennemis</h1>
        <p class="paragraph-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      </div>
    </div>
    <div class="w-row">
      <div class="w-col w-col-6">
        <h1 class="heading-2">LesTours</h1>
        <p class="paragraph-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      </div>
      <div class="column w-col w-col-6"><img src="images/teleski.png" loading="lazy" width="84" alt=""></div>
    </div>
	<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=659eab658144ac62b3d366af" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  	<script src="js/webflow.js" type="text/javascript"></script>
';
	}

	public function getAffichageProfil(){
		return $this->affichageProfil;
	}

	
}




?>
