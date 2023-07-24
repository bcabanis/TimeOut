// Le script ci-dessous permet l'acumulation des tags //

    // Variable pour stocker les catégories sélectionnées
    const selectedCategories = [];

    function toggleSubCategory(checkbox) {
        const categoryName = checkbox.getAttribute('data-category-name');
        toggleCategorySelection(categoryName);
        filterEventsBySelectedCategories();
    }

    function toggleCategorySelection(categoryName) {
        // Vérifie si la catégorie est déjà sélectionnée, si oui, la supprime, sinon, l'ajoute à la liste
        const index = selectedCategories.indexOf(categoryName);
        if (index !== -1) {
            selectedCategories.splice(index, 1);
        } else {
            selectedCategories.push(categoryName);
        }
    }

    function filterEventsBySelectedCategories() {
        const events = document.querySelectorAll('.event-item');

        events.forEach(event => {
            const eventName = event.getAttribute('data-event-name');
            const eventDescription = event.getAttribute('data-event-description');
            const eventAddress = event.getAttribute('data-event-address');
            const eventAddressFromDB = event.getAttribute('data-event-address-from-db'); // Remplacer par l'attribut contenant l'adresse depuis la base de données

            // Vérifie si l'événement correspond à au moins l'une des catégories sélectionnées
            const showEvent = selectedCategories.some(categoryName => {
                const lowerCategoryName = categoryName.toLowerCase();
                return eventName.toLowerCase().includes(lowerCategoryName) ||
                    eventDescription.toLowerCase().includes(lowerCategoryName) ||
                    eventAddress.toLowerCase().includes(lowerCategoryName);
            });

            if (showEvent) {
                event.style.display = 'block';
            } else {
                event.style.display = 'none';
            }
        });
    }

    // Filtre les événements pour afficher tous les événements au chargement initial de la page
    window.onload = function () {
        filterEventsBySelectedCategories();
    };

