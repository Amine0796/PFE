/*===== EXPANDER MENU  =====*/ 
const showMenu = (toggleId, navbarId, bodyId)=>{
    const toggle = document.getElementById(toggleId),
    navbar = document.getElementById(navbarId),
    bodypadding = document.getElementById(bodyId)
  
    if(toggle && navbar){
      toggle.addEventListener('click', ()=>{
        navbar.classList.toggle('expander')
  
        bodypadding.classList.toggle('body-pd')
      })
    }
  }
  showMenu('nav-toggle','navbar','body-pd')
  
  /*===== LINK ACTIVE  =====*/ 
  const linkColor = document.querySelectorAll('.nav__link')
  function colorLink(){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
  }
  linkColor.forEach(l=> l.addEventListener('click', colorLink))
  
  
  /*===== COLLAPSE MENU  =====*/ 
  const linkCollapse = document.getElementsByClassName('collapse__link')
  var i
  
  for(i=0;i<linkCollapse.length;i++){
    linkCollapse[i].addEventListener('click', function(){
      const collapseMenu = this.nextElementSibling
      collapseMenu.classList.toggle('showCollapse')
  
      const rotate = collapseMenu.previousElementSibling
      rotate.classList.toggle('rotate')
    })
  }









/*open item of sidbar*/   

// Select the div element
// Select the div element
let myDiv = document.getElementById("content-area");

// Variable to track the state of the content
let isVisible = true;

let maj = document.getElementById("maj");

// First event listener to log "hii"
maj.addEventListener("click", function() {
    console.log("hello");
});

// Second event listener to toggle visibility
maj.addEventListener("click", function() {
    if (isVisible) {
        // Hide the content
        myDiv.style.display = "none";
    } else {
        // Show the content
        myDiv.style.display = "block";
    }
    // Toggle the state
    isVisible = !isVisible;
});


// $(document).ready(function() {
//     // Add click event listener to sidebar items
//     $('#maj').click(function() {
//         // Get the data-file attribute value which contains the HTML file to load
//         let fileToLoad = $(this).data('file');
//         console.log('hello');
        
//         // Load the HTML file into the content area
//         $('#content-area').load(fileToLoad);
//     });
// });


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


