// eventfilter.js

// Attend que le DOM soit complètement chargé
document.addEventListener("DOMContentLoaded", function () {
    // Sélectionner l'élément du DOM où les tags sont affichés
    const tagsContainer = document.getElementById("tags-resumey");
  
    // Récupérer tous les tags (éléments <p>) dans le conteneur des tags
    const tags = tagsContainer.getElementsByTagName("p");
  
    // Créer un tableau pour stocker les tags
    const tagsList = [];
  
    // Parcourir chaque tag et ajouter son contenu dans le tableau tagsList
    for (let i = 0; i < tags.length; i++) {
      tagsList.push(tags[i].textContent.trim());
    }
  
    // Maintenant, la variable tagsList contient la liste de tous les tags affichés sur la page index.html.twig
    // Vous pouvez utiliser cette liste dans les étapes suivantes pour filtrer les événements en fonction des tags sélectionnés.
  });
  

// Fonction pour récupérer tous les événements depuis la base de données
function getAllEvents() {
    fetch('/get_all_events')
      .then(response => response.json())
      .then(data => {
        // La variable "data" contient les événements sous forme d'objet JSON
        console.log(data); // Affiche les données des événements dans la console
        // Ici, nous continuerons avec le code pour afficher toutes les propriétés des événements
      })
      .catch(error => {
        console.error('Erreur lors de la récupération des événements:', error);
      });
  }
  
  // Appeler la fonction pour récupérer tous les événements
  getAllEvents();
  