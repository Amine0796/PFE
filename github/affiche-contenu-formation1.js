
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


        // actualiser affiche le tableau dans formation
        // if (dernierElementClique == "table-maj") {
        //    document.getElementById("formation-btn-maj").click();
        // }
    }
};


function connexionReussie() {
    // Appel de la fonction afficheContenu avec l'ID du div de la page d'accueil
    afficherContenu('home-content');
}