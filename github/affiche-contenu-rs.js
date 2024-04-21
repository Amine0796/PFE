// let tableMaj = document.getElementById("table-maj");
// tableMaj.style.display = "none";


// let tableEtranger = document.getElementById("table-etranger")
// tableEtranger.style.display = "none"

// let tableSuivi = document.getElementById("table-suivi")
// tableSuivi.style.display = "none"

// let tableTravail = document.getElementById("table-travail")
// tableTravail.style.display = "none"

// let tableCourse = document.getElementById("table-course")
// tableCourse.style.display = "none"



// let sonatrachImg = document.getElementById("sonatrach-img"); // Define sonatrachImg
// let home = document.getElementById("home");

// home.addEventListener("click", function() {
    //     sonatrachImg.style.display = "block";
    
    //     // Hide all contents
    //     contenus.forEach(function(contenu) {
        //         contenu.style.display = 'none';
        //     });
        
        
        // });

        
        let contenus = document.querySelectorAll('.content');
        let contenuActif = "";
        
function afficherContenu(contenuId) {
    // Hide all contents
    contenus.forEach(function(contenu) {
        contenu.style.display = 'none';
    });

    // Show the content corresponding to the ID passed as an argument
    let contenu = document.getElementById(contenuId);
    contenu.style.display = 'block';
    localStorage.setItem('dernierElementClique', contenuId);
    // Hide sonatrachImg
    // sonatrachImg.style.display = "none";
}

let maj = document.getElementById("maj");
maj.addEventListener("click", function() {
    afficherContenu("table-maj");
});



let etranger = document.getElementById("etranger");
etranger.addEventListener("click", function() {
    afficherContenu("table-etranger");
});

let suivi = document.getElementById("suivi");
suivi.addEventListener("click", function() {
    afficherContenu("table-suivi");
});

let travail = document.getElementById("travail");
travail.addEventListener("click", function() {
    afficherContenu("table-travail");
});

let course = document.getElementById("course");
course.addEventListener("click", function() {
    afficherContenu("table-course");
});

let home = document.getElementById("home");
home.addEventListener("click", function() {
    afficherContenu("home-content");
});

// actualisation de la page
window.onload = function() {
    // Récupérer l'ID du dernier élément cliqué depuis le stockage local
    let dernierElementClique = localStorage.getItem('dernierElementClique');
    // Si un élément a été précédemment sélectionné, afficher son contenu
    if (dernierElementClique) {
        afficherContenu(dernierElementClique);
    }
};



function connexionReussie() {
    // Appel de la fonction afficheContenu avec l'ID du div de la page d'accueil
    afficherContenu('home-content');
}