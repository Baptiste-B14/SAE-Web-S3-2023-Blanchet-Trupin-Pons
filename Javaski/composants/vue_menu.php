<?php

class VueMenus {
	private $affichageMenu;
	public function __construct() {
		$this->affichageMenu = '
		<ul>
			<a href="index.php?module=1">Le Jeu</a>
		</ul>
		<ul>
			<a href="index.php?module=2">Scores Mondiaux</a>
		</ul>
		<ul>
			<a href="index.php?module=3">Les Tours</a>
		</ul> 
		<ul>
			<a href="index.php?module=3">Mon Profil</a>
		</ul> 
		<ul>
			<a href="index.php?module=3">Inscription</a>
		</ul> 
		<ul>
			<a href="index.php?module=3">Connexion</a>
		</ul> 
		<br>';
	}

	public function getAffichageMenu(){
		return $this->affichageMenu;
	}

	
}




?>
