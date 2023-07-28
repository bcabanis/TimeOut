// dashboard.js

// Attend que le DOM soit complètement chargé
document.addEventListener("DOMContentLoaded", function () {
    // Récupérer les tags de l'utilisateur via fetch
    fetch("/get_user_tags")
      .then((response) => response.json())
      .then((data) => {
        // data contient les tags de l'utilisateur sous forme d'objet JSON
        const tagsByCategory = data.tagsByCategory;
  
        // Sélectionner l'élément du DOM où tu veux afficher les tags
        const tagsContainer = document.getElementById('tags-resumey');
  
        // Boucler à travers les tags et les ajouter au DOM
        for (const category in tagsByCategory) {
          const categoryHeader = document.createElement("h4");
          categoryHeader.textContent = category;
  
          const tagsList = document.createElement("ul");
          tagsByCategory[category].forEach((tag) => {
            const listItem = document.createElement("li");
            listItem.textContent = tag;
            tagsList.appendChild(listItem);
          });
  
          tagsContainer.appendChild(categoryHeader);
          tagsContainer.appendChild(tagsList);
        }
      })
      .catch((error) => {
        console.error("Erreur lors de la récupération des tags:", error);
      });
  });
