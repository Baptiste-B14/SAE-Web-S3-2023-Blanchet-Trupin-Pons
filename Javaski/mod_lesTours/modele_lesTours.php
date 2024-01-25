<?php

if (!MY_APP){
    die("Fichier externe détecté");
}
include_once 'cont_lesTours.php';

class ModeleTours extends Connexion{
	public function __construct() {
        parent::initConnexion();
	}

    public function getAllTours(){
        $query= "SELECT
        t.nomTour,
        COUNT(p.idPartie) AS nombreParties,
        SUM(CASE WHEN p.victoire THEN 1 ELSE 0 END) AS nombreVictoires,
        (SUM(CASE WHEN p.victoire THEN 1 ELSE 0 END) * 100.0 / COUNT(p.idPartie)) AS pourcentageVictoire
        FROM
        Tour t
        JOIN
        a_été_posé_dans apd ON t.idTour = apd.idTour
        JOIN
        Partie p ON apd.idPartie = p.idPartie
        GROUP BY
        t.idTour, t.nomTour
        ORDER BY
        t.idTour;";
        $prepare = self::$bdd->prepare($query);
        $prepare->execute([]);
        $rep= $prepare->fetchAll();

        return $rep;
    }


}




?>