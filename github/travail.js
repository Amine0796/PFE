/*******************OPENNNN WINDOWWWWW************************* */ 

let Travail = document.getElementById("Travail");
Travail.addEventListener("click", function() {
  // Code HTML pour la nouvelle fenêtre 
  // Créer une nouvelle instance de XMLHttpRequest
var xhr = new XMLHttpRequest();

// Définir la méthode et l'URL de la requête
xhr.open('GET', 'window.php', true);

// Définir la fonction de rappel à exécuter lorsque la requête est terminée
xhr.onload = function() {
  // Vérifier si la requête a réussi (statut 200)
  if (xhr.status === 200) {
    // Le contenu du fichier HTML est maintenant dans la propriété responseText
    var contenuHTML = xhr.responseText;
    
    // Faites quelque chose avec le contenu HTML ici
    console.log(contenuHTML);
    // Ouvrir une nouvelle fenêtre avec le contenu HTML spécifié
  var newWindow = window.open("", "_blank", "width=1000,height=1000");
  newWindow.document.write(contenuHTML);

  } else {
    // En cas d'erreur, afficher un message d'erreur
    console.error('Impossible de charger le fichier HTML. Statut de la requête : ' + xhr.status);
  }
};

// Envoyer la requête
xhr.send();

  
});