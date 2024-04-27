let tableEtrangerRelex1 = document.querySelector("#table-etranger-relex");
let trEtranger = Array.from(tableEtrangerRelex1.querySelectorAll("tr"));

// Supprimer le premier élément (en-tête)
trEtranger.shift();


let traitementEtrangerBox = document.getElementById("traitement-etranger-box");
traitementEtrangerBox.style.display = "none"


let divDemandeEtranger = document.getElementById("table-demande-etranger-relex")
let btnAnnulerPopupEtranger = document.getElementById("btn-Annuler-popup-etranger")


// let btnValiderPopupEtranger = document.getElementById("btn-Valider-popup-Etranger")
btnAnnulerPopupEtranger.addEventListener("click",function () {
    traitementEtrangerBox.style.display="none"
    divDemandeEtranger.style.display="block"
})


function openPopupEtranger() {
    traitementEtrangerBox.style.display = "block";
    divDemandeEtranger.style.display = 'none'
  }


  let popupEtranger = document.getElementById("popupetranger")


  trEtranger.forEach(function(tr) {
    tr.addEventListener("click", function() {
        openPopupEtranger()
    });
});


// ***************************************************************************
// valeur de NumDemande
    // Récupérer toutes les lignesEtranger avec la classe "tr-relex-etranger"
    // var lignesEtranger = document.querySelectorAll('.tr-relex-etranger');

    // // Parcourir chaque ligne
    // lignesEtranger.forEach(function(ligne) {
    //     // Ajouter un gestionnaire d'événements de clic à chaque ligne
    //     ligne.addEventListener('click', function() {
    //         // Récupérer la cellule contenant NumDemande dans cette ligne
    //         var celluleNumDemande = ligne.querySelector('.td-relex-etranger');

    //         // Récupérer la valeur de NumDemande
    //         var numDemande = celluleNumDemande.textContent;

    //         // Afficher la valeur de NumDemande
    //         console.log(numDemande)
    //     });
    // });
