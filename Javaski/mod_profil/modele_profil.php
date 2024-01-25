<?php
    if (!MY_APP){
        die("Fichier externe détecté");
    }
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\connexion.php';

    class ModeleProfil extends Connexion{
        public function __construct(){
            parent::initConnexion();
            // vide actuellement
        }

        public function get_profil($id){
            $query= "SELECT * FROM utilisateur WHERE idUtilisateur=:id";
            $prepare = $bdd->prepare($query);
            $prepare->execute(['id'=>$id]);
            $rep= $prepare->fetchAll();

            return $rep;
        }

        public function get_demandes(){
            $query= "SELECT
            utilisateur.identififant
        FROM
            demande_ami
        JOIN
            utilisateur ON demande_ami.idUtilisateur1 = utilisateur.idUtilisateur
        WHERE
            demande_ami.idUtilisateur2 = $_SESSION["id"];";

            $prepare = $bdd->prepare($query);
            $prepare->execute(['id'=>$_SESSION["id"]]);
            $rep= $prepare->fetchAll();

            return $rep;
        }

        
        

    }
?>