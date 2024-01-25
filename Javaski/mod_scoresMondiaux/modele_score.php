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

        public function get_meilleursUtilisateursGlobal(){
          // return les 10 meilleurs joueurs (=les dix meilleurs scores)
          $query= "SELECT utilisateur.identifiant, partie.score FROM utilisateur INNER JOIN a_joué using(idUtilisateur) INNER JOIN partie using(idPartie) INNER JOIN a_eu_lieu_dans using(idPartie) ORDER BY partie.score DESC LIMIT 10 ";
          $prepare = self::$bdd->prepare($query);
          $prepare->execute(['map'=>$map ]);
          $rep= $prepare->fetchAll();

          return $rep;
        }

        public function get_meilleursUtilisateurs($map){  
          // return les 10 meilleurs joueurs d'une map(=les dix meilleurs scores)
          $query= "SELECT utilisateur.identifiant, partie.score FROM utilisateur INNER JOIN a_joué using(idUtilisateur) INNER JOIN partie using(idPartie) INNER JOIN a_eu_lieu_dans using(idPartie) Where idMap = :map ORDER BY partie.score DESC LIMIT 10 ";
          
          
          $prepare = self::$bdd->prepare($query);
          $prepare->execute(['map'=>$map ]);
          $rep= $prepare->fetchAll();

          return $rep;
        }

        public function post_BD(){
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
            $allowedFileTypes = ["xls", "xlsx", "xlsm"];
            // Obtient l'extension du fichier
            // pathinfo retourne les infos de chemin et PATHINFO_EXTENSION indique que l'ont veut l'extension 
            // strtolower sert juste a mettre en minuscule pour s'assurer que l'ont puisse comparer avec notre liste d'extensions autorisées 
            $fileExtension = strtolower(pathinfo($_FILES["fichier"]["name"], PATHINFO_EXTENSION));

            // Vérifie si l'extension est autorisée
            if (in_array($fileExtension, $allowedFileTypes)) {

            $emplacement_temp = $_FILES['fichier']['tmp_name'];
            $nomFichier = 'C:\wamp64\www\Site-Javaski\Javaski\mod_scoresMondiaux\Map\ ' . $_FILES['fichier']['name'];
            move_uploaded_file($emplacement_temp, $nomFichier);
            }
            else{
                echo "Type de fichier non autorisé. Les types autorisés sont : " . implode(", ", $allowedFileTypes); 
                exit;               
            }
            /*----*/ 



            $query='INSERT INTO map(nom, cheminVersFichier) VALUES (:nom, :chemin)';
            $prepare = $bdd->prepare($query);
            // SECURITE : on casse les potentiel injection de script via les input texte grace a la founction htmlspecialchars
            $prepare->execute(['nom'=>htmlspecialchars($_POST["nom"]), 'chemin'=>$nomFichier]);
            $rep= $prepare->fetchAll();
            
          }
        }
    }
?>