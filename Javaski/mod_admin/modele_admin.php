<?php


include_once 'mod_admin/cont_admin.php';

class ModeleAdmin{
	public function __construct() {
	}

	public function userAdministrateur(){
		if (isset($_SESSION["droits"]) && $_SESSION["droits"] == true){
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