<?php

class Connexion{

	protected static $bdd;

	public static function initConnexion(){
		try{
			self::$bdd = new PDO('mysql:host=localhost;dbname=javaski', 'root', '');
			echo 'connecté';
		}catch(PDOException $err){
			echo  $err->getMessage();
		}
	}

	// fct necessaire car attribut en protected
	public static function getbdd(){
		return Connexion::$bdd;
	}
}



?>


