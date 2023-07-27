alert('yo')
// function sendData(event) {
//   let divClick = event.currentTarget;
//   let eventId = {"eventId": divClick.dataset.idEvent};

// // Envoi de la requête POST vers Symfony
// fetch('/test', {
//   method: 'POST',
//   headers: {
//     'Content-Type': 'application/json'
//   },
//   body: JSON.stringify(eventId)
// })
// .then(response => response.json())
// .then(data => {
//   // Traitement de la réponse renvoyée par Symfony (si nécessaire)
//   console.log(data);
// })
// .catch(error => {
//   // Gérer les erreurs éventuelles
//   console.error('Erreur lors de la requête AJAX :', error);
// });
// }

// Lance l'événement de clic sur tous les événements de la page
let divTest = document.querySelectorAll(".card-event .btn-participer");

divTest.forEach(function (element) {
  element.addEventListener("click", function(event) {
  let divClick = event.currentTarget;
  let eventId = {"eventId": divClick.dataset.idEvent};
  console.log(divClick.dataset.idEvent);
    // Envoi de la requête AJAX
    // var xhr = new XMLHttpRequest();
    // xhr.open("POST", "/test", true);
    // xhr.setRequestHeader("Content-Type", "application/json");
    // xhr.onreadystatechange = function() {
    //   if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
    //     // Réponse du serveur (si nécessaire)
    //     console.log(xhr.responseText);
    //   }
    // };
    // xhr.send(JSON.stringify(eventId));
  });
});
