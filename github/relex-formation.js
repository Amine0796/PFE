let table = document.querySelector("#table-formation-relex");
let trFormation = Array.from(table.querySelectorAll("tr"));

// Supprimer le premier élément (en-tête)
trFormation.shift();
// let tableMission = document.getElementById('table-mission');

let contenuFenetre = document.getElementById("traitement-formation-box");
contenuFenetre.style.display = "none"

let divDemandeFormation = document.getElementById("table-demande-formation-relex")

let btnAnnulerPopupFormation = document.getElementById("btn-Annuler-popup-formation")

// let btnValiderPopupFormation = document.getElementById("btn-Valider-popup-formation")

btnAnnulerPopupFormation.addEventListener("click",function () {
    contenuFenetre.style.display="none"
    divDemandeFormation.style.display="block"
})

function openPopup() {
    contenuFenetre.style.display = "block";
    divDemandeFormation.style.display = 'none'
  }

let popupFormation = document.getElementById("popupformation")

trFormation.forEach(function(tr) {
    tr.addEventListener("click", function() {
         
        
        openPopup()
    
        
    });
});

