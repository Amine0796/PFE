let tableCourseRelex1 = document.querySelector("#table-course-relex");
let trCourse = Array.from(tableCourseRelex1.querySelectorAll("tr"));

// Supprimer le premier élément (en-tête)
trCourse.shift();


let traitementCourseBox = document.getElementById("traitement-course-box");
traitementCourseBox.style.display = "none"


let divDemandeCourse = document.getElementById("table-demande-course-relex")
let btnAnnulerPopupCourse = document.getElementById("btn-Annuler-popup-course")


// let btnValiderPopupCourse = document.getElementById("btn-Valider-popup-Course")
btnAnnulerPopupCourse.addEventListener("click",function () {
    traitementCourseBox.style.display="none"
    divDemandeCourse.style.display="block"
})


function openPopupCourse() {
    traitementCourseBox.style.display = "block";
    divDemandeCourse.style.display = 'none'
  }


  let popupCourse = document.getElementById("popupcourse")


  trCourse.forEach(function(tr) {
    tr.addEventListener("click", function() {
        openPopupCourse()
    });
});


// ***************************************************************************
// valeur de NumDemande
    // Récupérer toutes les lignesCourse avec la classe "tr-relex-course"
    // var lignesCourse = document.querySelectorAll('.tr-relex-course');

    // // Parcourir chaque ligne
    // lignesCourse.forEach(function(ligne) {
    //     // Ajouter un gestionnaire d'événements de clic à chaque ligne
    //     ligne.addEventListener('click', function() {
    //         // Récupérer la cellule contenant NumDemande dans cette ligne
    //         var celluleNumDemande = ligne.querySelector('.td-relex-course');

    //         // Récupérer la valeur de NumDemande
    //         var numDemande = celluleNumDemande.textContent;

    //         // Afficher la valeur de NumDemande
    //         console.log(numDemande)
    //     });
    // });
