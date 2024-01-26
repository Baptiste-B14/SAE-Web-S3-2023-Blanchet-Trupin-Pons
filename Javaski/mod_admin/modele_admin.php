<?php


include_once 'mod_admin/cont_admin.php';
include_once 'C:\wamp64\www\Site-Javaski\Javaski\connexion.php';

class ModeleAdmin{
	public function __construct() {
	}

	public function accepterUser($idUser) {
		$req2 = "SELECT * FROM demande_creation WHERE idDemandeur=:idU";
		$pdo_req2 = self::$bdd->prepare($req2);
		$pdo_req2->execute(['idU'=>htmlspecialchars($idUser)]);
		$user= $prepare1->fetchAll(); 
		
		$req = "
		INSERT INTO utilisateur (pseudo, identifiant, motdepasse, courriel, cheminVersPhoto, droits) values (:pseudo, :identifiant, :motdepasse, :courriel, :cheminVersPhoto, :droits);
		";
		$pdo_req = self::$bdd->prepare($req);
		$pdo_req->execute(['pseudo'=>htmlspecialchars($user[0]["pseudo"]), 'identifiant'=>htmlspecialchars($user[0]["identifiant"]), 'motdepasse'=>htmlspecialchars($user[0]["motdepasse"]), 'courriel'=>htmlspecialchars($user[0]["courriel"]), 'cheminVersPhoto'=>htmlspecialchars($user[0]["cheminVersPhoto"]), 'droits'=>htmlspecialchars($user[0]["droits"])]);
	}

	public function refuserUser($idUser) {
		$req = "
		DELETE FROM demande_creation WHERE idDemandeur=:idU";
		$pdo_req = self::$bdd->prepare($req);
		$pdo_req->execute(['idU'=>htmlspecialchars($idUser)]);

	}

	public function get_listeDemandeurs() {
		$req = "SELECT * FROM demande_creation";
		$pdo_req = self::$bdd->prepare($req);
		$pdo_req->execute();
		return $pdo_req->fetchAll();
	}
}




?>