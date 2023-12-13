

document.addEventListener("DOMContentLoaded", function() {

    let input_img = document.getElementById("pp");
    let visu_img = document.getElementById("pppreview");

    input_img.addEventListener("change", function() {
        displayImage(input_img, visu_img);
    });
    console.log("fin doc load");

});

// --------- FUNCTIONS -------

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
