<?php

class Connexion{

	protected static $bdd;

	public static function initConnexion(){
		try{
				self::$bdd = new PDO('mysql:host=localhost;dbname=javaski', 'root', '');
			}catch(PDOException $err){
				echo 'Erreur de connection : '. $err->getMessage();
		}
	}

	// fct necessaire car attribut en protected
	public static function getbdd(){
		return Connexion::$bdd;
	}
}



?>


