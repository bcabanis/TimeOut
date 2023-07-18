// L'idée d'avoir des tags sur Gettogether/Timeout va permettre à l'utilisateur de filtrer les événements qui l'intéressent en sélectionnant des tags prédéfinis.
// Les événements restent apparents tant que les tags qui lui sont liés sont sélectionnés, autrement ils disparaissent.

// La propriété .classList est utilisée pour manipuler les classes CSS d'un élément DOM (Document Object Model). Cela permet d'ajouter, supprimer ou vérifier la présence de classes sur un élément HTML.

// La propriété .classList est un objet qui expose plusieurs méthodes utiles :

// .add(): Cette méthode permet d'ajouter une classe à la liste des classes de l'élément.
// .remove(): Cette méthode permet de supprimer une classe de la liste des classes de l'élément.
// .toggle(): Cette méthode permet d'ajouter une classe si elle n'est pas présente, et de la supprimer si elle est déjà présente. C'est une manière pratique de basculer l'état d'une classe.
// .contains(): Cette méthode permet de vérifier si une classe spécifique est présente sur l'élément. Elle renvoie true si la classe est présente et false sinon.
// .item(): Cette méthode permet d'accéder à une classe spécifique dans la liste des classes en fonction de son index.
// .replace(): Cette méthode permet de remplacer une classe par une autre dans la liste des classes de l'élément.


// On réalise une fonction pour filtrer les événements en fonction des tags sélectionnés

function filtrerEvenements() {
// On récupère tous les tags
let tags = document.querySelectorAll('.tag');

// Efface la classe "selected" de tous les tags
    tags.forEach(function (tag) {
      tag.classList.remove('selected');
    });

    // On ajoute la classe "selected" au tag cliqué
    this.classList.add('selected');

    // Récupère les tags sélectionnés
    let tagsSelection = document.querySelectorAll('.tag.selected');

    // Récupère tous les événements
    var evenements = document.querySelectorAll('.evenement');

    // Si aucun tag n'est sélectionné, affiche tous les événements
    if (tagsSelection.length === 0) {
      evenements.forEach(function (evenement) {
        evenement.style.display = 'block';
      });
    } else {
      // Sinon, cache tous les événements
      evenements.forEach(function (evenement) {
        evenement.style.display = 'none';
      });

      // Affiche les événements ayant au moins un tag sélectionné
      tagsSelection.forEach(function (selectedTag) {
        var tag = selectedTag.getAttribute('data-tag');
        var evenementsWithSelectedTag = document.querySelectorAll('.evenement[data-tags*="' + tag + '"]');
        evenementsWithSelectedTag.forEach(function (evenement) {
          evenement.style.display = 'block';
        });
      });
    }
  }

  // Attend que le DOM soit prêt
  document.addEventListener('DOMContentLoaded', function () {
    // Récupère tous les tags
    var tags = document.querySelectorAll('.tag');

    // Ajoute un gestionnaire d'événement à chaque tag
    tags.forEach(function (tag) {
      tag.addEventListener('click', filtrerEvenements);
    });
  });
