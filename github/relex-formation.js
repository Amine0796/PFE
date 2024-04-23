let trFormation = document.querySelectorAll("tr");
let contenuFenetre = document.getElementById("traitement-formation-box");
contenuFenetre.style.display = "none"

trFormation.forEach(function(tr) {
    tr.addEventListener("click", function() {
        // Récupérer l'ID de la ligne ou toute autre donnée pertinente
        // let idFormation = tr.dataset.idFormation; // Si vous avez un attribut data-id-formation

        // Redirection vers une autre page avec l'ID de la formation ou toute autre donnée pertinente
        // window.location.href = "traitement-formation.php?id=" + idFormation; 
        let nouvelleFenetre = window.open("", "_blank", "width=2000,height=2000");
        
        contenuFenetre = document.getElementById("traitement-formation-box").innerHTML;
    
        nouvelleFenetre.document.write(contenuFenetre);
    });
});


