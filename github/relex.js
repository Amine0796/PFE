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






let home1 = document.getElementById("home")
home1.addEventListener('click',function () {
    let tableFormationRelex = document.getElementById("tableFormation-relex")
    tableFormationRelex.style.display = 'none';

    let tableCourseRelex = document.getElementById("tableCourse-relex")
    tableCourseRelex.style.display = 'none';

    let tableEtrangerRelex = document.getElementById("tableEtranger-relex")
    tableEtrangerRelex.style.display = 'none';

    let Notification = document.getElementById("notification-relex");
    Notification.style.display='block'
})
