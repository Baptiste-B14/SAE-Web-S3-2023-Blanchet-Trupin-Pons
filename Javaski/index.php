
<?php  
	session_start();
    // SECURITE : pour eviter les fichiers externe
    // comme tout passe par l'index, la declaration en sTe fait qu'ici
    define('MY_APP', true);
    if (!MY_APP){
        die("Fichier externe détécté");
    }
   
   
        include_once 'modules/mod_leJeu/mod_leJeu.php';
        include_once 'modules/mod_scoresMondiaux/mod_scoresMondiaux.php';
        include_once 'modules/mod_lesTours/mod_lesTours.php';
        include_once 'composants/mod_menu.php';
       
       
        $compMenu = new ModMenus();
       
   
/*
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
        $module = isset($_GET['module']) ? $_GET['module'] : 'attente';
 */
        if (isset($_GET['module'])){
            switch ($_GET["module"]){
                case ("leJeu") :
                    //connexion::initConnexion();
                    $m = new ModJeu();
                    break;
                case ("monProfil") :
                    //connexion::initConnexion();
                    $m = new ModProfil();
                    break;
                case ("module3") :
                    //connexion::initConnexion();
                    $m = new ModScoresMondiaux();
                    break;
                default :
                    die("Module inconnu");
            }
        }
        else {
           
            $m = new ModJeu();
        }
       
        $affichageModule = $m->affiche();
        include_once 'template.php';
?>

