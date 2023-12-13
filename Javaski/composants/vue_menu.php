<?php

class VueMenus {
	private $affichageMenu;
	public function __construct() {
		$this->affichageMenu = '
		<ul>
			<a href="index.php?module=leJeu">Le Jeu</a>
		</ul>
		<ul>
			<a href="index.php?module=scoresMondiaux">Scores Mondiaux</a>
		</ul>
		<ul>
			<a href="index.php?module=lesTours">Les Tours</a>
		</ul> 
		<ul>
			<a href="index.php?module=monProfil">Mon Profil</a>
		</ul> 
		<ul>
			<a href="index.php?module=inscription">Inscription</a>
		</ul> 
		<ul>
			<a href="index.php?module=connexion">Connexion</a>
		</ul> 
		<br>';
	}

	public function getAffichageMenu(){
		return $this->affichageMenu;
	}

	
}




?>
