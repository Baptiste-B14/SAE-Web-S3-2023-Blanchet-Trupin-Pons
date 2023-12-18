<?php

class VueScoresMondiaux {
	private $affichageScoresMondiaux;
	public function __construct() {
		$this->affichageScoresMondiaux = '
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

	public function getAffichageScoresMondiaux(){
		return $this->affichageScoresMondiaux;
	}

	
}




?>
