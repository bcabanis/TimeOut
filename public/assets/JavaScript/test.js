function testCurrentTarget(event) {
  let divClick = event.currentTarget;

  // Récupère l'identifiant de l'événement à partir de l'élément ou des attributs de données
  let eventId = divClick.dataset.idEvent;

  // // Supposons que vous ayez une variable "dataToSend" que vous voulez envoyer à PHP
  let dataToSend = { idEvent: eventId };
  let params = {
    method: "POST",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
    body: JSON.stringify(dataToSend),
  };

  fetch("TestController.php", params);

  console.log(eventId);
}

function sendData(event) {
  let divClick = event.currentTarget;
  let eventId = {"eventId": divClick.dataset.idEvent};

// Envoi de la requête POST vers Symfony
fetch('/test', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify(eventId)
})
.then(response => response.json())
.then(data => {
  // Traitement de la réponse renvoyée par Symfony (si nécessaire)
  console.log(data);
})
.catch(error => {
  // Gérer les erreurs éventuelles
  console.error('Erreur lors de la requête AJAX :', error);
});
}

// Lance l'événement de clic sur tous les événements de la page
let divTest = document.querySelectorAll(".card-event .btn-participer");

divTest.forEach(function (element) {
  element.addEventListener("click", sendData);
});
