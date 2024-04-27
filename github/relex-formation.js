let tableFormationRelex1 = document.querySelector("#table-formation-relex");
let trFormation = Array.from(tableFormationRelex1.querySelectorAll("tr"));



// Supprimer le premier élément (en-tête)
trFormation.shift();

// let tableMission = document.getElementById('table-mission');

let traitementFormationBox = document.getElementById("traitement-formation-box");
traitementFormationBox.style.display = "none"







let divDemandeFormation = document.getElementById("table-demande-formation-relex")
let btnAnnulerPopupFormation = document.getElementById("btn-Annuler-popup-formation")








// let btnValiderPopupFormation = document.getElementById("btn-Valider-popup-formation")

btnAnnulerPopupFormation.addEventListener("click",function () {
    traitementFormationBox.style.display="none"
    divDemandeFormation.style.display="block"
})



function openPopupFormation() {
    traitementFormationBox.style.display = "block";
    divDemandeFormation.style.display = 'none'
  }





let popupFormation = document.getElementById("popupformation")



trFormation.forEach(function(tr) {
    tr.addEventListener("click", function() {
        openPopupFormation()
    });
});




// ***************************************************************************
// valeur de NumDemande
    // Récupérer toutes les lignesFormation avec la classe "tr-relex-formation"
    var lignesFormation = document.querySelectorAll('.tr-relex-formation');

    // Parcourir chaque ligne
    lignesFormation.forEach(function(ligne) {
        // Ajouter un gestionnaire d'événements de clic à chaque ligne
        ligne.addEventListener('click', function() {
            // Récupérer la cellule contenant NumDemande dans cette ligne
            var celluleNumDemande = ligne.querySelector('.td-relex-formation');

            // Récupérer la valeur de NumDemande
            var numDemande = celluleNumDemande.textContent;

            // Afficher la valeur de NumDemande
            console.log(numDemande)
        });
    });





