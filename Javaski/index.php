<?php session_start(); ?>

<?php  
		include_once 'modules/mod_joueurs/mod_joueurs.php';
		include_once 'modules/mod_equipes/mod_equipes.php';
		include_once 'modules/mod_connexion/mod_utilisateurs.php';
		include_once 'composants/mod_menu.php';

		

		
		$compMenu = new ModMenus();
		

		

		if (isset($_GET['module'])){
			$module = empty($module) ? $_GET['module'] : 1;
			switch($module){
				case 1 : 
					$test = new ModJoueurs();
					break;
				case 2 : 
					$test = new ModEquipes();
					break;
				case 3 :
					$test = new ModUtilisateurs();
					break;
			}


			$affichageModule = $test->getControleur()->getVue()->getAffichage();
			


		}

		require 'template.php';

?>

