<?php session_start(); ?>

<?php  
		include_once 'modules/mod_joueurs/mod_joueurs.php';
		include_once 'modules/mod_equipes/mod_equipes.php';
		include_once 'modules/mod_connexion/mod_utilisateurs.php';
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

