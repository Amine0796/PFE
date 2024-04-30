// Récupérer les boutons
let btnAfficher = document.getElementById('btn-afficher-notification');
let btnAnnuler1 = document.getElementById('btn-annuler-notification-1');
let btnAnnuler2 = document.getElementById('btn-annuler-notification-2');

let tableFormationRelex = document.getElementById('tableFormation-relex');
tableFormationRelex.style.display = 'none';

let tableCourseRelex = document.getElementById('tableCourse-relex');
tableCourseRelex.style.display = 'none';

let tableEtrangerRelex = document.getElementById('tableEtranger-relex');
tableEtrangerRelex.style.display = 'none';

let tableTravailRelex = document.getElementById('tableTravail-relex');
tableTravailRelex.style.display = 'none';


let tableMission = document.getElementById('table-mission');

tableMission.style.display = 'none';

if (btnAfficher) {
    btnAfficher.addEventListener('click', function() {
        document.getElementById('notification-relex').style.display = 'none';
        tableMission.style.display = 'block';

    });
}

// Ajouter un gestionnaire d'événement au bouton "Annuler" (premier cas)
if (btnAnnuler1) {
    btnAnnuler1.addEventListener('click', function() {
        document.getElementById('notification-relex').style.display = 'none';
    });
}

// Ajouter un gestionnaire d'événement au bouton "Annuler" (deuxième cas)
if (btnAnnuler2) {
    btnAnnuler2.addEventListener('click', function() {
        document.getElementById('notification-relex').style.display = 'none';
    });
}

// click in tr formation il m'affich table des demandes

let trFormation1 = document.getElementById("tr-formation")
trFormation1.addEventListener("click",function(){
    tableMission.style.display = 'none';
    tableFormationRelex.style.display = 'block';
})
// click in tr course il m'affich table des demandes

let trCourse1 = document.getElementById("tr-course")
trCourse1.addEventListener("click",function(){
    tableMission.style.display = 'none';
    tableCourseRelex.style.display = 'block';
})

// click in tr course il m'affich table des demandes

let trEtranger1 = document.getElementById("tr-etranger")
trEtranger1.addEventListener("click",function(){
    tableMission.style.display = 'none';
    tableEtrangerRelex.style.display = 'block';
})

// click in tr course il m'affich table des demandes

let trTravail1 = document.getElementById("tr-travail")
trTravail1.addEventListener("click",function(){
    tableMission.style.display = 'none';
    tableTravailRelex.style.display = 'block';
})





let home1 = document.getElementById("home")
home1.addEventListener('click',function () {
    let tableFormationRelex = document.getElementById("tableFormation-relex")
    tableFormationRelex.style.display = 'none';
    
    let tableCourseRelex = document.getElementById("tableCourse-relex")
    tableCourseRelex.style.display = 'none';
    
    let tableEtrangerRelex = document.getElementById("tableEtranger-relex")
    tableEtrangerRelex.style.display = 'none';
    
    let tableTravailRelex = document.getElementById("tableTravail-relex")
    tableTravailRelex.style.display = 'none';
    
    let Notification = document.getElementById("notification-relex");
    Notification.style.display='block'
})

// add travail interface
let traitementTravail = document.getElementById("traitement-travail-box")
let traitementFormation = document.getElementById("traitement-formation-box")
let traitementEtranger = document.getElementById("traitement-etranger-box")
let traitementCourse = document.getElementById("traitement-course-box")

let travailBtn = document.getElementById("travail")
let formationBtn = document.getElementById("formation")
let etrangerBtn = document.getElementById("etranger")
let courseBtn = document.getElementById("course")

let tableDemandeCourseRelex = document.getElementById("table-demande-course-relex")
let tableDemandeEtrangerRelex = document.getElementById("table-demande-etranger-relex")
let tableDemandeFormationRelex = document.getElementById("table-demande-formation-relex")
let tableDemandeTravailRelex = document.getElementById("table-demande-travail-relex")





travailBtn.addEventListener("click",function () {
    tableTravailRelex.style.display = "block"
    tableFormationRelex.style.display = "none"
    tableEtrangerRelex.style.display = "none"
    tableCourseRelex.style.display = "none"
    traitementTravail.style.display = "none"
    traitementFormation.style.display = "none"
    traitementEtranger.style.display = "none"
    traitementCourse.style.display = "none"
    tableMission.style.display = 'none';
    tableDemandeTravailRelex.style.display = "block"





})
formationBtn.addEventListener("click",function () {
    tableTravailRelex.style.display = "none"
    tableFormationRelex.style.display = "block"
    tableEtrangerRelex.style.display = "none"
    tableCourseRelex.style.display = "none"
    traitementTravail.style.display = "none"
    traitementFormation.style.display = "none"
    traitementEtranger.style.display = "none"
    traitementCourse.style.display = "none"
    tableMission.style.display = 'none';
    tableDemandeFormationRelex.style.display = "block"


})
etrangerBtn.addEventListener("click",function () {
    tableTravailRelex.style.display = "none"
    tableFormationRelex.style.display = "none"
    tableEtrangerRelex.style.display = "block"
    tableCourseRelex.style.display = "none"
    traitementTravail.style.display = "none"
    traitementFormation.style.display = "none"
    traitementEtranger.style.display = "none"
    traitementCourse.style.display = "none"
    tableMission.style.display = 'none';
    tableDemandeEtrangerRelex.style.display = "block"


})
courseBtn.addEventListener("click",function () {
    tableTravailRelex.style.display = "none"
    tableFormationRelex.style.display = "none"
    tableEtrangerRelex.style.display = "none"
    tableCourseRelex.style.display = "block"
    traitementTravail.style.display = "none"
    traitementFormation.style.display = "none"
    traitementEtranger.style.display = "none"
    traitementCourse.style.display = "none"
    tableMission.style.display = 'none';
    tableDemandeCourseRelex.style.display = "block"

})
