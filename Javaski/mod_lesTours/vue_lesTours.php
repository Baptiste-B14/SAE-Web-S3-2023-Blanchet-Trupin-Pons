<?php
if (!MY_APP){
    die("Fichier externe détécté");
}
include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';

class VueTours extends VueGenerique{
	public function __construct() {
        parent::__construct();
	}

    public function afficheAllTours($listeTours){
        ?><ul><?php
        foreach($listeTours as $Tour){
            ?><li><div><p>Nom : <?=$Tour["nomTour"]?> Winrate : <?=$Tour["pourcentageVictoire"]?> </p></div></li><?php
        }
        ?></ul><?php

    }


	
}




?>