

function testCurrentTarget(event) {

    let divClick = event.currentTarget;
    let objEnvoiPhp = {"idEvent": divClick.dataset['id-event']};
    let params = {
        "method": "POST",
        "headers": {
            "Content-Type": "application/json; charset=utf-8"
        },
        "body": JSON.stringify(objEnvoiPhp)
    }

    fetch("participer")
    .then(function(data){
        console.log(data);
    });

}

// lance l'event click sur tous les event de la page
let divTest = document.querySelectorAll('.card-event .btn-participer').forEach(function(element) {
    element.addEventListener('click', testCurrentTarget);
});
