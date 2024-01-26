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
            $prepare = self::$bdd->prepare($query);
            $prepare->execute(['id'=>$id]);
            $rep= $prepare->fetchAll();

            return $rep;
        }

        public function get_demandes(){
            $query= "SELECT
            demande_ami.idUtilisateur1, demande_ami.idUtilisateur2
        FROM
            demande_ami
        WHERE
            demande_ami.idUtilisateur2 = :id ";

            $prepare = self::$bdd->prepare($query);
            $prepare->execute(['id'=>$_SESSION["id"]]);
            $rep= $prepare->fetchAll();

            return $rep;
        }   

        public function envoiDemande(){
            // recherche id via nom 
            $req = "
            SELECT idUtilisateur FROM utilisateur WHERE identifiant=:nomUti";
            $pdo_req = self::$bdd->prepare($req);
            $pdo_req->execute([ 'nomUti'=>htmlspecialchars($_POST["nomUti"])]);
            $rep= $prepare->fetchAll();
            if (!empty($rep)){
                // envoie demande
                $id2 = $rep[0]["idUtilisateur"];    
                $req2 = "INSERT INTO demande_ami (idUtilisateur1, idUtilisateur2) values (:id1, :id2)";
                $pdo_req2 = self::$bdd->prepare($req2);
                $pdo_req2->execute([ 'id1'=>htmlspecialchars($_SESSION['id']), 'id2'=>htmlspecialchars($id2)]);
            }
        }

        public function accepterDemandeAmi($idAmi) {
            $req = "
            INSERT INTO est_ami_avec (idUtilisateur1, idUtilisateur2) values (:idAmi, :id);
            DELETE FROM demande_ami WHERE idUtilisateur1=:idAmi AND idUtilisateur2=:id";
            $pdo_req = self::$bdd->prepare($req);
            $pdo_req->execute([ 'id'=>htmlspecialchars($_SESSION['id']), 'idAmi'=>htmlspecialchars($idAmi) ]);

        }

        public function refuserDemandeAmi($idAmi) {
            $req = "
            DELETE FROM demande_ami WHERE idUtilisateur1=:idAmi AND idUtilisateur2=:id";
            $pdo_req = self::$bdd->prepare($req);
            $pdo_req->execute([ 'id'=>htmlspecialchars($_SESSION['id']), 'idAmi'=>htmlspecialchars($idAmi) ]);

        }
        
        public function get_historiqueParties () {
            $req = "SELECT partie.score, partie.victoire, partie.idPartie FROM a_joué inner join partie using(idPartie) where a_joué.idUtilisateur=:id";
            $pdo_req = self::$bdd->prepare($req);
            $pdo_req->execute(['id'=>htmlspecialchars($_SESSION["id"])]);
            return $pdo_req->fetchAll();
        }
        
        public function get_listeAmis () {
            $req = "SELECT pseudo, courriel, droits, identifiant, pointsExperience FROM est_ami_avec inner join utilisateur on(est_ami_avec.idUtilisateur2=utilisateur.idUtilisateur) where est_ami_avec.idUtilisateur1=:idU";
            $pdo_req = self::$bdd->prepare($req);
            $pdo_req->execute(['idU'=>htmlspecialchars($_SESSION["id"])]);
            return $pdo_req->fetchAll();
        }
        

    }
?>