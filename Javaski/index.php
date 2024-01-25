
<?php  
	session_start();
    // SECURITE : pour eviter les fichiers externe
    // comme tout passe par l'index, la declaration en sTe fait qu'ici
    define('MY_APP', true);
    if (!MY_APP){
        die("Fichier externe détécté");
    }
   
        
        include_once 'modules/mod_leJeu/mod_leJeu.php';
        include_once 'C:\wamp64\www\Site-Javaski\Javaski\mod_scoresMondiaux\mod_score.php';
        include_once 'C:\wamp64\www\Site-Javaski\Javaski\mod_lesTours\mod_lesTours.php';
        include_once 'composants/mod_menu.php';
        include_once 'C:\wamp64\www\Site-Javaski\Javaski\mod_connexion\mod_connexion.php';
        include_once 'C:\wamp64\www\Site-Javaski\Javaski\mod_profil\mod_profil.php';
       
       
        $compMenu = new ModMenus();
		
        if (isset($_GET['module'])){
            switch ($_GET["module"]){
                case ("mod_jeu") :
                    //connexion::initConnexion();
                    $m = new ModJeu();
                    break;
                case ("mod_profil") :
                    //connexion::initConnexion();
                    $m = new ModProfil();
                    break;
                case ("mod_scores") :
                    //connexion::initConnexion();
                    $m = new ModScore();
                    break;
                case ("mod_connexion") :
                    //connexion::initConnexion();
                    $m = new ModConnexion();
                    break;
                case ("mod_tours") :
                    $m = new ModTours();
                    break;
                default :
                    die("Module inconnu");
            }
        }
        else {
           
            $m = new ModJeu();
        }
        
		$m->exec();
        $var = $m->affiche();
       
        include_once 'template.php';
?>

