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

                $query='INSERT INTO Utilisateur(pseudo, login, motdepasse, pointsExperience, cheminVersPhoto) VALUES (:user, :mail, :mdp, 0, :pp)';

            }

        }

    }




?>