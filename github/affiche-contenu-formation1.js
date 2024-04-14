let tableMaj = document.getElementById("table-maj");
tableMaj.style.display = "none";

let tableFormation = document.getElementById("table-formation")
tableFormation.style.display = "none"

let tableEtranger = document.getElementById("table-etranger")
tableEtranger.style.display = "none"

let tableSuivi = document.getElementById("table-suivi")
tableSuivi.style.display = "none"

let sonatrachImgDiv = document.querySelector(".sonatrach-img")
sonatrachImgDiv.style.display = "none"


let contenus = document.querySelectorAll('.content');
let sonatrachImg = document.getElementById("sonatrach-img"); // Define sonatrachImg
let home = document.getElementById("home");

home.addEventListener("click", function() {
    sonatrachImg.style.display = "block";

    // Hide all contents
    contenus.forEach(function(contenu) {
        contenu.style.display = 'none';
    });

    
});

function afficherContenu(contenuId) {
    // Hide all contents
    contenus.forEach(function(contenu) {
        contenu.style.display = 'none';
    });

    // Show the content corresponding to the ID passed as an argument
    let contenu = document.getElementById(contenuId);
    contenu.style.display = 'block';

    // Hide sonatrachImg
    sonatrachImg.style.display = "none";
}

let maj = document.getElementById("maj");
maj.addEventListener("click", function() {
    afficherContenu("table-maj");
});

let formation = document.getElementById("formation");
formation.addEventListener("click", function() {
    afficherContenu("table-formation");
});

let etranger = document.getElementById("etranger");
etranger.addEventListener("click", function() {
    afficherContenu("table-etranger");
});

let suivi = document.getElementById("suivi");
suivi.addEventListener("click", function() {
    afficherContenu("table-suivi");
});




