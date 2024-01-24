<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';
    class VueScore extends VueGenerique{
        //le constructeur
        public function __construct (){
            parent::__construct();
        }

        public function lienMenu(){
            // permet de lancer la recherche dans BD
            echo "<a href='index.php?module=mod_scores&action=meilleursU'>Lancer recherche</a>";
        }
        
        public function menu(){
            // drop down menu des cartes
            ?>
            <select id="cartes" onchange="afficherMeilleursUtilisateurs()">
                <option value="carte1">Carte 1</option>
                <option value="carte2">Carte 2</option>
                <!-- ajouter les autres cartes -->
            </select>
            <script>
                function afficherMeilleursUtilisateurs() {
                    var selectedValue = document.getElementById('cartes').value;
            
                    // Création d'une instance de XMLHttpRequest
                    var xhr = new XMLHttpRequest();

                    // Configuration de la requête
                    xhr.open('POST', 'traitement.php', true);
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                    // Définition de la fonction de rappel pour le chargement
                    /*xhr.onload = function() {
                        // Ne rien faire ici si vous ne voulez pas traiter la réponse
                    };*/

                    // Envoi de la requête avec les données
                    xhr.send('selectedValue=' + encodeURIComponent(selectedValue));
                }
            </script>
            <?
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $selectedValue = $_POST['selectedValue'];  
            }
        }

        public function afficherMU($listU) {

            // convertir la liste en JSON 
            $jsonResponse = json_encode($listU);
            header('Content-Type: application/json');

            // echo de la rép JSON
            echo $jsonResponse;
            ?>
            <script>
                var meilleursUtilisateursDiv = document.getElementById('meilleursUtilisateurs');
                meilleursUtilisateursDiv.innerHTML = '';

                // Analyser la réponse JSON et ajouter chaque utilisateur à la div
                var listeUtilisateurs = <?php echo json_encode($listU); ?>;
                listeUtilisateurs.forEach(function(utilisateur) {
                    var paragraphe = document.createElement('p');
                    paragraphe.textContent = utilisateur;
                    meilleursUtilisateursDiv.appendChild(paragraphe);
                });
            </script>
            <?
        }



    }
?>