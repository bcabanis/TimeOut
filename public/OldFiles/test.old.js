

function testCurrentTarget(event) {

    // let divClick = event.currentTarget;
    // console.log(divClick);
    // // Supposons que vous ayez une variable "dataToSend" que vous voulez envoyer à PHP
    // let dataToSend = divClick.dataset['id-event'];
    // console.log(dataToSend);

    console.log('hello');

    // Créer un objet FormData et ajouter les données que vous souhaitez envoyer
    // let formData = new FormData();
    // formData.append('data', dataToSend);

    // // Utilisation de la méthode fetch pour envoyer les données via une requête POST
    // fetch('TestController.php', {
    // method: 'POST',
    // body: formData
    // })
    // .then(response => response.text())
    // .then(data => {
    // console.log(data); // Réponse de PHP
    // })
    // .catch(error => {
    // console.error('Erreur:', error);
    // });
    
}

console.log('test');

// lance l'event click sur tous les event de la page
let divTest = document.querySelectorAll('.card-event .btn-participer');

divTest.forEach(function(element) {
    element.addEventListener('click', testCurrentTarget);
});
