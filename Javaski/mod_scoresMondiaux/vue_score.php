<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';
    class VueScore extends VueGenerique{
      private $affichageScore;
        
        //le constructeur
        public function __construct (){
            parent::__construct();
        }

        public function lienMenu(){
            // permet de lancer la recherche dans BD
            //echo "<a href='index.php?module=mod_scores&action=meilleursU'>Lancer recherche</a>";
            // pour ajouter une carte de jeu 
            echo "<a href='index.php?module=mod_scores&action=form_XLS'>Ajouter une carte</a>";
        }
        
        public function menu(){
            // drop down menu des cartes
            echo"<select id='cartes' onchange='afficherMeilleursUtilisateurs()'>
            <option value='carte1'>Carte 1</option>
            <option value='carte2'>Carte 2</option>
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


                    // Envoi de la requête avec les données
                    xhr.send('selectedValue=' + encodeURIComponent(selectedValue));
                }
            </script>";
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $selectedValue = $_POST['selectedValue'];  
            }
        }

        public function affiche_MUG($listeMUG){
          $vueScore =  '<section class="section-6">
            <div class="div-block-6">
              <div>
                <h1 class="heading-5">Scores</h1>
              </div>
              <div class="div-block-2">
                <div class="w-layout-hflex flex-block-2">
                  <h1 class="heading-7">Nom de la map</h1>
                  <div data-hover="false" data-delay="0" class="dropdown w-dropdown">
                    
                      <a href="index.php?module=mod_scores&action=form_XLS" class="w-dropdown-link">Link 1</a>
                      <a href="#" class="w-dropdown-link">Link 2</a>
                      <a href="#" class="w-dropdown-link">Link 3</a>

                  </div>
                </div>
              </div>
            </div>';

            
            foreach($listeMUG as $MUG){
              $vueScore = $vueScore.'
              <div class="statistiques"><img src="'.$MUG["image"].'" width="64px" loading="lazy" alt="">
        <div class="div-block-5">
          <div class="infoscore">
            <p class="infos">Rank</p>
          </div>
          <div class="infoscore">
            <p class="infos">Joueur</p>
           </br><p class="elementInfos">'.$MUG["identifiant"].'</p>
              </div>
            <div class="infoscore">
              <p class="infos">Score</p>
              </br><p class="elementInfos">'.$MUG["score"].'</p>
              </div>
            </div>
          </div>';


            }
           $this->affichageScore = $vueScore.' </section>';
                
                     
                    
               
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
            <?php
        }

        function afficherFormXLS(){
            //Securite : generation token
            if(!isset($_SESSION['csrf_token'])){
              $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // generation token aléatoire 
          }
          $csrfToken = $_SESSION['csrf_token'];

            $this->affichageScore = '<script src="Form_Creation.js"></script>
            
            <section class="section-6">
            </br></br></br>
            <form action="index.php?module=mod_scores&action=post_XLS" method="post" enctype="multipart/form-data"> 
                <div class="containerField">
                    <div class="divLabel">
                        <label for="nom">Nom de la Carte : </label> 
                    </div>
                    <input type="text" id="nom" name="nom" placeholder="ma_superbe_map" required>
                </div>
                </br>
                <div class="containerField">
                    <div class="divLabel">
                        <label for="fichier">Fichier de la Carte : </label> 
                    </div>
                    <input type="file" id="fichier" name="fichier" accept=".xls, .xlsx, .xlsm" required>
                </div>
                <input type="hidden" name="csrf_token" value="'.$csrfToken.'">
    
                <br/>
                
                <input type="submit" value="submit" id="submit">  
            </form>
            </br></br></br>
            </section>
            
            ';
        }


        public function getAffichage(){

            return $this->affichageScore;
        }


    }
?>