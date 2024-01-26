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
      <div class="text-block">Presentation générale du jeu<br>"Javaski" est un captivant jeu de tower defense conçu avec passion pour marquer la fin d\'année du cursus universitaire de première année (BUT 1). Plongez dans l\'univers passionnant du ski tout en relevant des défis stratégiques passionnants. Dans ce jeu innovant, les joueurs sont invités à protéger leur station de ski bien-aimée contre des envahisseurs en déployant des tours de défense stratégiquement le long des pistes enneigées. Les tours, chacune avec ses propres capacités spéciales, ajoutent une dimension stratégique, obligeant les joueurs à réfléchir rapidement et à anticiper les mouvements de leurs adversaires. Avec des graphismes saisissants et une bande-son immersive, "Javaski" offre une expérience de jeu hivernale unique et mémorable, soulignant les compétences acquises tout au long de cette première année universitaire. Préparez-vous à dévaler les pentes, à élaborer des stratégies ingénieuses et à défendre votre station dans ce jeu captivant de tower defense qui marque la conclusion d\'une année académique exceptionnelle.<br>‍</div>
    </div>
    <div class="columns-6 w-row">
      <div class="column-2 w-col w-col-6"><img src="images/bobsleigh.png" loading="lazy" width="157" sizes="(max-width: 479px) 33vw, 157px" alt="" srcset="images/bobsleigh-p-500.png 500w, images/bobsleigh.png 527w"></div>
      <div class="w-col w-col-6">
        <h1 class="heading-2">Les Ennemis</h1>
        <p class="paragraph-4">Les ennemis redoutables de "Javaski" ne sont autres que des skieurs audacieux, déterminés à dévaler les pentes de la station coûte que coûte. Munis de leur équipement de ski et de snowboard, ces intrépides adversaires cherchent à échapper à la vigilance des joueurs en dévalant les pistes de manière effrénée. Chacun de ces skieurs représente un défi unique, avec des compétences et des capacités différentes qui mettront à l\'épreuve la stratégie défensive des joueurs. Certains peuvent être extrêmement rapides, tandis que d\'autres pourraient manœuvrer habilement à travers les obstacles. Leur objectif est simple, mais leur exécution est tout sauf facile : s\'échapper de la station de ski à tout prix. Les joueurs devront faire preuve de ruse, de rapidité et d\'une planification minutieuse pour contrer ces skieurs aventureux et les empecher de s\'échapper de leur refuge montagnard dans "Javaski"</p>
      </div>
    </div>
    <div class="columns-5 w-row">
      <div class="w-col w-col-6">
        <h1 class="heading-2">LesTours</h1>
        <p class="paragraph-4">Les tours de défense dans "Javaski" sont bien plus que de simples infrastructures de la station de ski, elles sont les gardiennes intrépides qui veillent sur les pentes enneigées. Ces structures, initialement conçues pour le confort et la sécurité des skieurs, ont été ingénieusement détournées pour repousser les assauts des skieurs tentant de s\'échapper. Les canons à neige, autrefois chargés de créer des descentes parfaites, se transforment en redoutables armes glaciales, ralentissant et immobilisant les skieurs. Les chalets de montagne, d\'ordinaire des lieux chaleureux de repos, abritent désormais des tireurs d\'élite qui ciblent les intrus avec une précision déconcertante. Chaque tour possède ses propres caractéristiques, de la télécabine utilisée pour transporter des troupes de renforts à la patinoire piégée qui immobilise momentanément les skieurs. Dans "Javaski", les joueurs devront exploiter judicieusement ces tours détournées pour défendre leur station contre la frénésie des skieurs en quête d\'évasion.</p>
      </div>
      <div class="column w-col w-col-6"><img src="images/teleski.png" loading="lazy" width="84" alt=""></div>
    </div>
</section>
';
  }


	
}




?>
