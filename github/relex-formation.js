let table = document.querySelector("#table-formation-relex");
let trFormation = Array.from(table.querySelectorAll("tr"));

// Supprimer le premier élément (en-tête)
trFormation.shift();
// let tableMission = document.getElementById('table-mission');

let contenuFenetre = document.getElementById("traitement-formation-box");
contenuFenetre.style.display = "none"

trFormation.forEach(function(tr) {
    tr.addEventListener("click", function() {
         
        let nouvelleFenetre = window.open("", "_blank", "width=2000,height=2000");
        
        contenuFenetre = document.getElementById("traitement-formation-box").innerHTML;
    
        nouvelleFenetre.document.write(contenuFenetre);
    });
});

// function setNumDemandeSession(NumDemande) {
//     window.location.href = "relex-formation.php?NumDemande=" + NumDemande;
// }
