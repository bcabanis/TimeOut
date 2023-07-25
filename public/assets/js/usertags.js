// Fonction pour le traitement du clic sur un bouton tag-choice
function handleTagChoiceClick(event) {
    const button = event.target; // Récupérer le bouton sur lequel le clic s'est produit
    toggleTagChoice(button); // Appeler la fonction pour basculer les classes
    ListeDeBoutons(); // Mise à jour du tableau actif lorsqu'un bouton est cliqué
  }
  
  // Fonction pour basculer les classes du bouton
  function toggleTagChoice(button) {
    // Vérifier si le bouton a la classe "tag-choice"
    if (button.classList.contains('tag-choice')) {
      button.classList.remove('tag-choice'); // Le bouton est "tag-choice", on le transforme en "tag-choice-active"
      button.classList.add('tag-choice-active');
    } else if (button.classList.contains('tag-choice-active')) {
      button.classList.remove('tag-choice-active'); // Le bouton est "tag-choice-active", on le transforme en "tag-choice"
      button.classList.add('tag-choice');
    }
  }
  
  // Récupérer tous les boutons avec la classe "tag-choice"
  const buttons = document.querySelectorAll('.tag-choice');
  
  // On met tous ces tags dans un tableau
  let activeButtonsArray = [];
  
  // Ajouter un gestionnaire d'événements "click" à chaque bouton
  buttons.forEach(button => {
    button.addEventListener('click', handleTagChoiceClick);
  });
  
  // On va générer le contenu du tableau actif 
  function ListeDeBoutons() {
    // On récupère tous les boutons actifs avec la classe "tag-choice-active"
    activeButtonsArray = Array.from(document.querySelectorAll('.tag-choice-active'));
  
    // On crée une liste à puces pour afficher les éléments
    let MegaListe = document.createElement('ul');
    // Parcourir le tableau actif et créer un élément de liste (li) pour chaque élément
    activeButtonsArray.forEach(button => {
      let MegaListeItem = document.createElement('li');
      MegaListeItem.textContent = button.textContent; // On utilise le contenu du bouton comme texte de la liste
      MegaListe.appendChild(MegaListeItem); // On ajoute l'élément de liste à la liste à puce
    });
  
    // On récupère l'élément div dans lequel nous afficherons le contenu du tableau
    let activeButtonsContainer = document.getElementById('active-buttons-container');
  
    // On efface le contenu précédent du conteneur
    activeButtonsContainer.innerHTML = '';
  
    // On ajoute la liste à puces au conteneur
    activeButtonsContainer.appendChild(MegaListe);
  }
  
  // On appelle la fonction pour générer le contenu d'un tableau actif initialement
  ListeDeBoutons();
  

// usertags.js

//   // Fonction pour le traitement du clic sur un bouton tag-choice
//   function handleTagChoiceClick(event) {
//     const button = event.target; // Récupérer le bouton sur lequel le clic s'est produit
//     toggleTagChoice(button); // Appeler la fonction pour basculer les classes
//   }

//   // Fonction pour basculer les classes du bouton
//   function toggleTagChoice(button) {
//     // Vérifier si le bouton a la classe "tag-choice"
//     if (button.classList.contains('tag-choice')) {
//       button.classList.remove('tag-choice'); // Le bouton est "tag-choice", on le transforme en "tag-choice-active"
//       button.classList.add('tag-choice-active');
//     } else if (button.classList.contains('tag-choice-active')) {
//       button.classList.remove('tag-choice-active'); // Le bouton est "tag-choice-active", on le transforme en "tag-choice"
//       button.classList.add('tag-choice');
//     }
//   }

//   // Récupérer tous les boutons avec la classe "tag-choice"
//   const buttons = document.querySelectorAll('.tag-choice');
//   let activeButtons = document.querySelectorAll('.tag-choice-active');
//   // On met tous ces tags dans un tableau
//   let activeButtonsArray = Array.from(activeButtons);

//   //On va ajouter tous les événements dans un tableau pour récapituler tous ceux sélectionnés en bas de page
//   let activeButtonsContainer = document.getElementById('active-buttons-container');

//   // On va générer le contenu du tableau actif 
//   function ListeDeBoutons {
//     // On crée une liste à puces pour afficher les éléments
//     let MegaListe = document.createElement('ul');
//     // Parcourir le tableau actif et créer un élément de liste (li) pour chaque élément
//     activeButtonsArray.forEach(button => {
//         let MegaListeItem = document.createElement('li');
//         MegaListeItem.textContent = button.textContent; // On utilise le contenu du bouton comme texte de la liste
//         ListeDeBoutons.appendChild(MegaListeItem); // On ajoute l'élément de liste à la liste à puce
//     });
//   }

//   // Ajouter un gestionnaire d'événements "click" à chaque bouton
//   buttons.forEach(button => {
//     button.addEventListener('click', handleTagChoiceClick);
//   });

//   // effacer le contenu précédent du conteneur 
//   activeButtonsContainer.innerHTML = '';

//   // ajouter la liste à puces au conteneur
//   activeButtonsContainer.appendChild(list);

//   // On appelle la fonction pour générer le contenu d'un tableau actif initialement
//   ListeDeBoutons();






// // Fonction pour "toggler" un tag
// function toggleTagChoice(button) {
//     // Vérifier si le bouton a la classe "tag-choice"
//     if (button.classList.contains('tag-choice')) {
//       button.classList.remove('tag-choice'); // Le bouton est "tag-choice", on le transforme en "tag-choice-active"
//       button.classList.add('tag-choice-active');
//     } else if (button.classList.contains('tag-choice-active')) {
//       button.classList.remove('tag-choice-active'); // Le bouton est "tag-choice-active", on le transforme en "tag-choice"
//       button.classList.add('tag-choice');
//     }
//   }


// // On récupère et on crée une variable pour tous les boutons qui ont la classe "tag-choice" (ou #mestags button.tag-choice)
// const allTags = document.querySelectorAll('.tag-choice');

// // On ajoute un gestionnaire d'événement à chaque bouton
// allTags = forEach(button => {
//     button.addEventListener('click',() => {
//         // On vérifie si le bouton a la classe "active" ou non
//         const activeTags = button.classList.contains('active');
//         if (activeTags) {
//             button.classList.remove('lp'); // le bouton est actif, donc on le désactive (togglé en OFF)
//         } else {
//             button.classList.add('lp');

//         }    
// });
// });

// //Fonction pour mettre à jour la <div class = "empty"> avec les noms des tags sélectionnés
// function updateSelectedTags() {
//     const SelectedTags = [];
//     const activeButtons = document.querySelectorAll('.tag-choice.active');

//     activeButtons
// }



// // // Fonction pour enregistrer tous les tags "togglés dans une liste"
// // function saveToggledTags() {

// // }


// // Fonction pour enregistrer les tags "togglés" dans le repository Users.
// function EnregistrerTags() {
//     let $SaveUserTags = document.getElementById("enregistrer-changements");
// }

// // Récupération du bouton par son ID
// let seeMoreTagsBtn = document.getElementById('see-more-tags-btn');

// // Attacher l'événement click
// seeMoreTagsBtn.addEventListener('click', toggleTagsDropdown);

// // Filtre les événements pour afficher tous les événements au chargement initial de la page
// window.onload = function () {
//     filterEventsBySelectedCategories();
// };