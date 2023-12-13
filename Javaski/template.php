
<!DOCTYPE html>
<html lang="fr">

<head>
</head>
<body>
	<header> 
		<?php
		echo $compMenu->affiche();
		?>
	</header>
	<main>
		<?php

			echo $affichageModule;

			if (empty($_SESSION["login"])){
				echo '<br><a href="index.php?module=3&action=formConnexion">formulaire connexion </a><br>';
			}else{
				echo '<br><br><a href="index.php?module=3&action=deconnexion">deconnexion </a><br>';
			}

		?>
	</main>
	<footer>
		<?php
			echo'<footer > <br><br><br><p> Matthias TRUPIN, Tous droits réservés. Contact : mtrupin@univ-paris8.fr </p> </footer>';
		?>
	</footer>
</body>
</html>

