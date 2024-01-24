<?php
    if (!MY_APP){
        die("Fichier externe détecté");
    }
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\connexion.php';

    class ModeleScore extends Connexion{
        public function __construct(){
            parent::initConnexion();
            // vide actuellement
        }

        public function getMap(){
            
        }

        public function get_meilleursUtilisateurs($map){  

            $query= "WITH ClassementUtilisateurs AS (
                SELECT
                  a_joue.idUtilisateur,
                  SUM(Partie.score) AS totalScore,
                  DENSE_RANK() OVER (ORDER BY SUM(Partie.score) DESC) AS rang
                FROM
                  a_joue
                  INNER JOIN Partie ON a_joue.idPartie = Partie.idPartie
                  INNER JOIN a_eu_lieu_dans ON Partie.idPartie = a_eu_lieu_dans.idPartie
                WHERE
                  a_eu_lieu_dans.idMap = (SELECT idMap FROM Map WHERE nom = $map) 
                GROUP BY
                  a_joue.idUtilisateur
              )
              SELECT
                u.idUtilisateur,
                u.totalScore AS score,
                u.rang,
                utilisateur.identifiant
              FROM
                ClassementUtilisateurs u
                INNER JOIN utilisateur ON u.idUtilisateur = utilisateur.idUtilisateur
              WHERE
                u.rang <= 10
              ORDER BY
                u.rang;";
            
            
            $prepare = $bdd->prepare($query);
            $prepare->execute(['mail'=>$_POST["mail"]]);
            $rep= $prepare->fetchAll();

            return $rep;
        }
    }
?>