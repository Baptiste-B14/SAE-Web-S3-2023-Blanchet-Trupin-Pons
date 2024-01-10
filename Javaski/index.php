<?php session_start(); ?>

<?php  
	session_start();


	// SECURITE : pour eviter les fichiers externe
	// comme tout passe par l'index, la declaration en sTe fait qu'ici
	define('MY_APP', true);
	if (!MY_APP){
		die("Fichier externe détécté");
	}

	
		include_once 'modules/mod_joueurs/mod_joueurs.php';
		include_once 'modules/mod_equipes/mod_equipes.php';
		include_once 'modules/mod_connexion/mod_connexion.php';
		include_once 'composants/mod_menu.php';

		

		
		$compMenu = new ModMenus();
		

		

		if (isset($_GET['module'])){
			$module = empty($module) ? $_GET['module'] : "leJeu";
			switch($module){
				case "leJeu" : 
					$test = new ModJeu();
					break;
				case "monProfil" : 
					$test = new ModProfil();
					break;
				case "scoresMondiaux" : 
					$test = new ModScoresMondiaux();
					break;
				case "lesTours" : 
					$test = new ModTours();
					break;
				case "inscription" : 
					$test = new ModInscription();
					break;
				case "connexion" : 
					$test = new ModConnexion();
					break;
				
			}


			$affichageModule = $test->getControleur()->getVue()->getAffichage();
			


		}

		require 'template.php';

?>

