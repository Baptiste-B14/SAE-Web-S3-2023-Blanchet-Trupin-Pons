// fonction qui s'active lors onChange sur dropDown menu des cartes
function afficherMeilleursUtilisateurs() {
    var carteSelectionnee = document.getElementById("cartes").value;
  
    // mettre php ici pour récup les utilisateurs 
    var meilleursUtilisateurs = [
      { nom: "Utilisateur1", rang: 1, score: 1000, carte : "Carte1" },
      { nom: "Utilisateur3", rang: 3, score: 850, carte : "Carte1"  },
      { nom: "Utilisateur2", rang: 2, score: 950, carte : "Carte1"  },
      // exemple de données actuellement 
    ];
    console.log("here");
    // filtre des utilisateurs par carte
    var utilisateursFiltres = meilleursUtilisateurs.filter(function() {
      return meilleursUtilisateurs["carte"] === carteSelectionnee;
    });
    utilisateursFiltres.sort(function(a, b) {
      return b.score - a.score;
    });
    console.log("here2");

    console.log(utilisateursFiltres);
  
    // Afficher les 10 meilleurs utilisateurs
    var divMeilleursUtilisateurs = document.getElementById("meilleursUtilisateurs");
    for (var i = 0; i < Math.min(utilisateursFiltres.length, 10); i++) {
      var utilisateur = utilisateursFiltres[i];
      var ligneUtilisateur = "<p>" + utilisateur["nom"] + " - Rang " + utilisateur["rang"] + " - Score " + utilisateur["score"] + "</p>";
      divMeilleursUtilisateurs.innerHTML += ligneUtilisateur;
    }
  }