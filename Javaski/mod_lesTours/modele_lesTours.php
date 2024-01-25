<?php

if (!MY_APP){
    die("Fichier externe détecté");
}
include_once 'cont_lesTours.php';

class ModeleTours extends Connexion{
	public function __construct() {
        parent::initConnexion();
	}


}




?>