<?php


include_once 'composants/cont_menu.php';

class ModeleMenus{
	public function __construct() {
	}

	public function userAdministrateur(){
		$req = "SELECT droits FROM utilisateur WHERE idUtilisateur=idU";
		$pdo_req = self::$bdd->prepare($req);
		$pdo_req->execute(['idU'=>htmlspecialchars($_SESSION["id"])]);
		$user= $pdo_req->fetchAll(); 

		if ($user[0]["droits"]){
			return true;
		}
		return false;
		/*if(isset($_SESSION["login"])){
			$bdd=connexion::getbdd();
			$query= "SELECT droits FROM utilisateur WHERE identifiant=:sessionLogin";
        	$prepare = $bdd->prepare($query);
        	$prepare->execute(['sessionLogin'=>$_SESSION["login"]]);
    		$rep= $prepare->fetchAll();
			if($rep[0]['droits']){
				return true;
			}
		}
		return false; */
	}
}




?>