<?php
    include_once '..\connexion.php';

    class ModeleConnexion extends Connexion{
        public function __construct(){
            // vide actuellement
        }

        public function CreerUser(){
            // TO DO : trouver meilleure facon de voir si form ok ? 
            if (isset($_POST["pseudo"])){
                $bdd=Connexion::getbdd();


                /*----Pour le Fichier----*/ 
                // SECURITE : extensions des fichiers autorisé = evite injection de script
                $allowedFileTypes = ["jpg", "jpeg", "png", "gif", "jfif"];
                // Obtient l'extension du fichier
                // pathinfo retourne les infos de chemin et PATHINFO_EXTENSION indique que l'ont veut l'extension 
                // strtolower sert juste a mettre en minuscule pour s'assurer que l'ont puisse comparer avec notre liste d'extensions autorisées 
                $fileExtension = strtolower(pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION));

                // Vérifie si l'extension est autorisée
                if (in_array($fileExtension, $allowedFileTypes)) {

                $emplacement_temp = $_FILES['pp']['tmp_name'];
                $nomFichier = 'PhotosProfil/' . $_FILES['pp']['name'];
                move_uploaded_file($emplacement_temp, $nomFichier);
                }
                else{
                    echo "Type de fichier non autorisé. Les types autorisés sont : " . implode(", ", $allowedFileTypes); 
                    exit;               
                }
                /*----*/ 



                $query='INSERT INTO Utilisateur(pseudo, login, motdepasse, pointsExperience, cheminVersPhoto) VALUES (:user, :mail, :mdp, 0, :pp)';
                $prepare = $bdd->prepare($query);
                // SECURITE : on casse les potentiel injection de script via les input texte grace a la founction htmlspecialchars
                $prepare->execute(['user'=>htmlspecialchars($_POST["pseudo"]), 'mail'=>htmlspecialchars($_POST["mail"]), 'mdp'=>htmlspecialchars($_POST["mdp"]), 'pp'=>$nomFichier]);
                $rep= $prepare->fetchAll();
                
            }

        }

        public function Connexion(){
                $bdd=connexion::getbdd();

                $query= "SELECT * FROM Utilisateur WHERE login=:mail";
                $prepare = $bdd->prepare($query);
                $prepare->execute(['mail'=>$_POST["mail"]]);
                $rep= $prepare->fetchAll();

                if (!empty($rep)){
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
                        echo "pas de correspondance (erreur mdp)";
                   }

                }
                else {
                    echo "pas de correspondance (erreur login)";
                }
        }

    }




?>