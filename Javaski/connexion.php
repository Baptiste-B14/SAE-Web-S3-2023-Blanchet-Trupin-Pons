<?php

class Connexion{

	protected static $bdd;

	public static function initConnexion(){
		self::$bdd = new PDO('mysql:dbname=dutinfopw201621;host=database-etudiants.iut.univ-paris8.fr', 'dutinfopw201621', 'batypyzu');
	}
}



?>


