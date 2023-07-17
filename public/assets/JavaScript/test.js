

function testCurrentTarget(event) {
    let divClick = event.currentTarget;
  
    // Récupère l'identifiant de l'événement à partir de l'élément ou des attributs de données
    let eventId = divClick.dataset.idEvent;
  
    // // Supposons que vous ayez une variable "dataToSend" que vous voulez envoyer à PHP
    let dataToSend = { "idEvent": eventId };
    let params = {
      "method": "POST",
      "headers": {
        "Content-Type": "application/json; charset=utf-8"
      },
      "body": JSON.stringify(dataToSend)
    }
  
    fetch("TestController.php", params)

    console.log(eventId);

    
}

function sendData() {
  var data = document.getElementById('inputData').value;

  // Créer un objet XMLHttpRequest pour effectuer une requête HTTP
  var xhttp = new XMLHttpRequest();
  
  // Définir la fonction de rappel pour gérer la réponse du serveur
  xhttp.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
          // Afficher la réponse du serveur (facultatif)
          alert(this.responseText);
      }
  };

  // Ouvrir une requête POST vers le fichier PHP
  xhttp.open("POST", "traitement.php", true);

  // Définir l'en-tête de la requête pour spécifier le type de contenu
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  // Envoyer les données au serveur
  xhttp.send("data=" + data);
}
  
  // Lance l'événement de clic sur tous les événements de la page
  let divTest = document.querySelectorAll('.card-event .btn-participer');
  
  divTest.forEach(function(element) {
    element.addEventListener('click', testCurrentTarget);
  });