<?php
    if (!MY_APP){
        die("Fichier externe détécté");
    }
    include_once 'C:\wamp64\www\Site-Javaski\Javaski\vue_generique.php';
    class VueConnexion extends VueGenerique{
        //le constructeur
        public function __construct (){
            parent::__construct();
            
        }
        
        public function afficherConnexion(){
            
            // Securite : generation token 
            if(!isset($_SESSION['csrf_token'])){
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // generation token aléatoire 
            }
            $csrfToken = $_SESSION['csrf_token'];
            
            echo '<script src="Form_Creation.js"></script>
            <section class="section-6">
            </br></br></br>
            <form action="index.php?module=mod_connexion&action=connexion" method="post" enctype="multipart/form-data"> 
                <div class="containerField">
                    <div class="divLabel">
                        <label for="mail">Adresse mail / Identifiant : </label> 
                    </div>
                    <input type="text" id="mail" name="mail" title="une adresse mail/ identifiant valide doit être entrée" required/> 
                </div>
                <br/>
                <div class="containerField">
                    <div class="divLabel">
                        <label for="mdp">Mot de passe : </label> 
                    </div>
                    <input type="password" id="mdp" name="mdp" required/> 
                </div>
                <input type="hidden" name="csrf_token" value="'.$csrfToken.'">
    
                <br/>
                
                <input type="submit" value="submit" id="submit">  
            </form><br><br><br>
            </section>';

        }

        public function afficherCreation(){
            //Securite : generation token
            if(!isset($_SESSION['csrf_token'])){
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // generation token aléatoire 
            }
            $csrfToken = $_SESSION['csrf_token'];

            echo '<!--Scripts JS nécessaire à bootstrap
        <script src="bootstrap-4.4.1-dist\js\jquery-3.4.1.min.js"></script>
        <script src="bootstrap-4.4.1-dist\js\bootstrap.js"></script>-->
        <script src="Form/Form_Creation.js"></script>
        <section class="section-6">
        </br></br></br>
        <form action="index.php?module=mod_connexion&action=creation" method="post" enctype="multipart/form-data"> 
            <div class="containerField">
                <div class="divLabel" id="labelPP">
                    <label for="pp">Photo de Profil : </label> 
                </div>
                <!--cette div sert à stocker l\'img quand selectionnée-->
                <div id="pppreview" class="pp-preview"></div> 
                <input type="file" id="pp" name="pp" accept="image/*"> 
                
            </div>
            <br/>  
            <div class="containerField">
                <div class="divLabel">
                    <label for="id">Identifiant : </label> 
                </div>
                <input type="text" id="id" name="id"  title="un Username doit être choisi" required/> 
            </div>
            <br/>  
            <div class="containerField">
                <div class="divLabel">
                    <label for="mail">Adresse mail : </label> 
                </div>
                <input type="email" id="mail" name="mail" placeholder="exemple@gmail.com" title="une adresse mail valide doit être entrée" required/> 
            </div>
            <br/>
            <div class="containerField">
                <div class="divLabel">
                    <label for="mdp">Mot de passe : </label> 
                </div>
                <!--l\'attribut pattern s\'assure de la validations des contraintes avant soumission du form-->
                <input type="password" id="mdp" name="mdp" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="le champ doit répondre aux restrictions" required/> 
            </div>

            <div id="messageMDP">
                <h3>le Mot de passe doit valider les restrictions suivantes : </h3>
                <p id="letter" class="invalid">Une lettre <b>minuscule</b></p>
                <p id="capital" class="invalid">Une lettre <b>majuscule</b></p>
                <p id="number" class="invalid">Un <b>chiffre</b></p>
                <p id="length" class="invalid">Au minimum <b>8 charactères</b></p>
            </div>
            <br/>

            <div class="containerField">
                <div class="divLabel">
                    <label for="confirmmdp">Confirmation du Mot de passe : </label> 
                </div>
                <input type="password" id="confirmmdp" name="confirmmdp" title="une confirmation est necessaire" required/> 
            </div>
            <br/>
            <input type="hidden" name="csrf_token" value="'.$csrfToken.'">
            
            <input type="submit" value="submit" id="submit">  
        </form><br><br><br>
        </section>';
        
        }
        /** 
        // ce menu s'affiche en haut à droite du site 
        public function menu(){
            echo "<a href='index.php?module=mod_connexion&action=connexion'>Se connecter</a>";
            echo "<a href='index.php?module=mod_connexion&action=creation'>Creer un Compte</a>";
        }

        public function VueDeco(){
            echo "<a href='index.php?module=mod_connexion&action=deconnexion'>Deconnexion</a>";
        }
        */
    }








?>