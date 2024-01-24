<?php


include_once 'composants/cont_menu.php';

class ModeleMenus{
	public function __construct() {
	}

	public function userAdministrateur(){
		/*if(isset($_SESSION["login"])){
			$bdd=connexion::getbdd();
			$query= "SELECT * FROM admin WHERE identifiant=:sessionLogin";
        	$prepare = $bdd->prepare($query);
        	$prepare->execute(['sessionLogin'=>$_SESSION["login"]]);
    		$rep= $prepare->fetchAll();
			if(!empty($rep)){
				return true;
			}
		}
		return false; */
	}
}




?>