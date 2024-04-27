let tableTravailRelex1 = document.querySelector("#table-travail-relex");
let trTravail = Array.from(tableTravailRelex1.querySelectorAll("tr"));

// Supprimer le premier élément (en-tête)
trTravail.shift();


let traitementTravailBox = document.getElementById("traitement-travail-box");
traitementTravailBox.style.display = "none"


let divDemandeTravail = document.getElementById("table-demande-travail-relex")
let btnAnnulerPopupTravail = document.getElementById("btn-Annuler-popup-travail")


// let btnValiderPopupTravail = document.getElementById("btn-Valider-popup-travail")
btnAnnulerPopupTravail.addEventListener("click",function () {
    traitementTravailBox.style.display="none"
    divDemandeTravail.style.display="block"
})


function openPopupTravail() {
    traitementTravailBox.style.display = "block";
    divDemandeTravail.style.display = 'none'
  }


  let popupTravail = document.getElementById("popuptravail")


  trTravail.forEach(function(tr) {
    tr.addEventListener("click", function() {
        openPopupTravail()
    });
});


// ***************************************************************************
// valeur de NumDemande
    // Récupérer toutes les lignesTravail avec la classe "tr-relex-travail"
    // var lignesTravail = document.querySelectorAll('.tr-relex-travail');

    // // Parcourir chaque ligne
    // lignesTravail.forEach(function(ligne) {
    //     // Ajouter un gestionnaire d'événements de clic à chaque ligne
    //     ligne.addEventListener('click', function() {
    //         // Récupérer la cellule contenant NumDemande dans cette ligne
    //         var celluleNumDemande = ligne.querySelector('.td-relex-travail');

    //         // Récupérer la valeur de NumDemande
    //         var numDemande = celluleNumDemande.textContent;

    //         // Afficher la valeur de NumDemande
    //         console.log(numDemande)
    //     });
    // });
