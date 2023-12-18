
/*quand les data imp du doc sont chargé, on ajoute des évenement*/ 
document.addEventListener("DOMContentLoaded", function() {

      affichageImage();
      contraintesMdp();
      ConfirmationMdp()

});

// --------- FUNCTIONS -------

function affichageImage(){
  let input_img = document.getElementById("pp");
    let visu_img = document.getElementById("pppreview");

    input_img.addEventListener("change", function() {
        displayImage(input_img, visu_img);
    });
    console.log("fin doc load");
}

/*utilisé dans affichageImage()*/
function displayImage(input_img, visu_img){ 
    let file = input_img.files[0];
    // réinitialisation de l'img si deja existante 
    visu_img.innerHTML = "";

    if (file) {
      let reader = new FileReader();

      reader.onload = function(e) {
        console.log("img en charge");

        let imageUrl = e.target.result;
        visu_img.innerHTML = '<img src="'+imageUrl+'" alt="Uploaded Image"></img>';
        console.log("img est affichée");
      };

      reader.readAsDataURL(file);
    } else {
        visu_img.innerHTML = "";
    }
}



function contraintesMdp(){
let myInput = document.getElementById("mdp");
let letter = document.getElementById("letter");
let capital = document.getElementById("capital");
let number = document.getElementById("number");
let length = document.getElementById("length");

/*---*/
// cache au chargement de la page la div
document.getElementById("messageMDP").style.display = "none";

// quand utilisateur dans input = affiche div messageMDP 
myInput.onfocus = function() {
  document.getElementById("messageMDP").style.display = "block";
}

// quand utilisateur sort input = cache div messageMDP 
myInput.onblur = function() {
  document.getElementById("messageMDP").style.display = "none";
}
/*---*/

// quand utilisateur ecrit mdp, verif des contraintes
// si contrainte respectée, on met la classe "valid" au texte de contrainte se qui le rend visuelement valide (vert + icone approbation) 
myInput.onkeyup = function() {
  // Validate lowercase letters
  let lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  let upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  let numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
}// fin fonction contraintesMdp

function ConfirmationMdp(){
  let confirmMdpInput = document.getElementById("confirmmdp");
  confirmMdpInput.addEventListener("blur", validate);

  function validate() {
  let x= document.getElementById("mdp");
  let y= document.getElementById("confirmmdp");
  let submit = document.getElementById("submit");
  if(x.value!=y.value){ 
    alert("les mots de passes ne correspondent pas");
    y.value = "";
  }
  }
}





