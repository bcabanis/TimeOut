
  // Fonction pour filtrer les événements en fonction des tags sélectionnés
  function filtrerEvenements() {
    // Récupère tous les tags
    let tags = document.querySelectorAll('.tag');

    // Efface la classe "selected" de tous les tags
    tags.forEach(function (tag) {
      tag.classList.remove('selected');
    });

    // Ajoute la classe "selected" au tag cliqué
    this.classList.add('selected');

    // Récupère les tags sélectionnés
    var tagsSelection = document.querySelectorAll('.tag.selected');

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
