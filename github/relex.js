// Récupérer les boutons
let btnAfficher = document.getElementById('btn-afficher-notification');
let btnAnnuler1 = document.getElementById('btn-annuler-notification-1');
let btnAnnuler2 = document.getElementById('btn-annuler-notification-2');

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



