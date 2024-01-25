<?php
include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';
class VueJeu extends VueGenerique{
	private $affichageJeu;
	public function __construct() {
		parent::__construct(); 
		
	}

	public function getAffichage(){
		return '<section class="section-4">
    <div class="div-block-3">
      <h1 class="heading">JAVASKI</h1><img src="images/Logo.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 86vw, (max-width: 991px) 907px, (max-width: 1079px) 84vw, 907px" srcset="images/Logo-p-500.png 500w, images/Logo-p-800.png 800w, images/Logo.png 907w" alt="" class="image">
      <div class="text-block">Presentation générale du jeu<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.<br>‍</div>
    </div>
    <div class="columns-6 w-row">
      <div class="column-2 w-col w-col-6"><img src="images/bobsleigh.png" loading="lazy" width="157" sizes="(max-width: 479px) 33vw, 157px" alt="" srcset="images/bobsleigh-p-500.png 500w, images/bobsleigh.png 527w"></div>
      <div class="w-col w-col-6">
        <h1 class="heading-2">Les Ennemis</h1>
        <p class="paragraph-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      </div>
    </div>
    <div class="columns-5 w-row">
      <div class="w-col w-col-6">
        <h1 class="heading-2">LesTours</h1>
        <p class="paragraph-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      </div>
      <div class="column w-col w-col-6"><img src="images/teleski.png" loading="lazy" width="84" alt=""></div>
    </div>
</section>
';
  }


	
}




?>
