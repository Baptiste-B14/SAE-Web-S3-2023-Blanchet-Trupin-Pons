<?php
    if (!MY_APP){
        die("Fichier externe détecté");
    }
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\connexion.php';

    class ModeleConnexion extends Connexion{
        public function __construct(){
            parent::initConnexion();
            // vide actuellement
        }

        public function CreerUser(){
            
            // TO DO : trouver meilleure facon de voir si form ok ? 
            if (isset($_POST["id"])){
                 
                $bdd= $this->getbdd();

                // Securite = verif conformiter token du fichier et du formulaire 
                if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                    // Token non valide = traitement erreur
                    echo"Token CSRF non valide. Requete suspecte !";
                    exit;
                }


                /*----Pour le Fichier----*/ 
                // SECURITE : extensions des fichiers autorisé = evite injection de script
                $allowedFileTypes = ["jpg", "jpeg", "png", "gif", "jfif"];
                // Obtient l'extension du fichier
                // pathinfo retourne les infos de chemin et PATHINFO_EXTENSION indique que l'ont veut l'extension 
                // strtolower sert juste a mettre en minuscule pour s'assurer que l'ont puisse comparer avec notre liste d'extensions autorisées 
                $fileExtension = strtolower(pathinfo($_FILES["pp"]["name"], PATHINFO_EXTENSION));

                // Vérifie si l'extension est autorisée
                if (in_array($fileExtension, $allowedFileTypes)) {

                $emplacement_temp = $_FILES['pp']['tmp_name'];
                $nomFichier = 'C:\wamp64\www\Site-Javaski\Javaski\mod_connexion\PhotosProfil\ ' . $_FILES['pp']['name'];
                move_uploaded_file($emplacement_temp, $nomFichier);
                }
                else{
                    echo "Type de fichier non autorisé. Les types autorisés sont : " . implode(", ", $allowedFileTypes); 
                    exit;               
                }
                /*----*/ 



                $query='INSERT INTO joueur(pseudo, identifiant, courriel, motdepasse, pointsExperience, cheminVersPhoto) VALUES (:user, :user, :mail, :mdp, 0, :pp)';
                                  $prepare = $bdd->prepare($query);
                // SECURITE : on casse les potentiel injection de script via les input texte grace a la founction htmlspecialchars
                $prepare->execute(['user'=>htmlspecialchars($_POST["id"]), 'mail'=>htmlspecialchars($_POST["mail"]), 'mdp'=>password_hash($_POST["mdp"], PASSWORD_DEFAULT), 'pp'=>$nomFichier]);
                $rep= $prepare->fetchAll();
                
            }

        }

        public function Connexion(){
                $bdd=$this->getbdd();
                
        // Securite = verif conformiter token du fichier et du formulaire 
                if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                    // Token non valide = traitement erreur
                    echo"Token CSRF non valide. Requete suspecte !";
                    exit;
                }

                $query= "SELECT * FROM joueur WHERE courriel=:mail";
                $prepare = $bdd->prepare($query);
                $prepare->execute(['mail'=>$_POST["mail"]]);
                $rep= $prepare->fetchAll();

                if (!empty($rep)){
                   $mdpUser = $_POST["mdp"];
                   $mdpBD = $rep[0]["motdepasse"];

                   if(password_verify($mdpUser,$mdpBD)){
                        if(isset($_SESSION["login"]) && $_SESSION["login"] == $_POST["mail"]){
                            echo "vous etes deja connecté sous l'indentifiant ".$_SESSION["login"]."</br>";
                        }
                        else {
                            $_SESSION["login"] = $_POST["mail"];
                            echo "Bienvenue ".$_SESSION["login"]."</br>";
                        }
                   }
                   else {
                        echo "Mot de Passe invalide";
                   }

                }
                else {
                    // si mail ne donne rien, on teste avec identifiant
                    $query= "SELECT * FROM joueur WHERE identifiant=:mail";
                    $prepare = $bdd->prepare($query);
                    $prepare->execute(['mail'=>$_POST["mail"]]);
                    $rep= $prepare->fetchAll();

                    if(!empty($rep)){
                        $mdpUser = $_POST["mdp"];
                        $mdpBD = $rep[0]["mdp"];

                        if(password_verify($mdpUser,$mdpBD)){
                            if(isset($_SESSION["login"]) && $_SESSION["login"] == $_POST["mail"]){
                                echo "vous etes deja connecté sous l'indentifiant ".$_SESSION["login"]."</br>";
                            }
                            else {
                                $_SESSION["login"] = $_POST["mail"];
                                echo "Bienvenue ".$_SESSION["login"]."</br>";
                            }
                        }
                        else {
                            echo "Mot de Passe invalide";
                        }
                    }
                    else {
                        echo "Votre mail/identifiant est invalide";
                    }       
                }
        }

        public function Deconnexion(){
            if (isset($_SESSION["login"])){
                unset($_SESSION["login"]);
                echo "deconnexion";
            }
            else{
                echo "vous n'etes pas connecté";
            }
        }

    }




?>