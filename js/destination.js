document.addEventListener("DOMContentLoaded", () => {
    const boutons = document.querySelectorAll(".boutonCat");
    boutons.forEach(bouton => {
        bouton.addEventListener("click", () => {
            // Gère l'état actif
            boutons.forEach(btn => btn.classList.remove("actif"));
            bouton.classList.add("actif");

            // Détecte la méthode
            const method = bouton.getAttribute("data-method");
            let apiUrl = "";
            const domaine = document.querySelector('base')?.href || window.location.origin + '/';

            if (method === "categories") {
                const categoryId = bouton.getAttribute("data-category_id");
                apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
            } else if (method === "search") {
                const pays = bouton.getAttribute("data-search");
                apiUrl = `${domaine}wp-json/wp/v2/posts?search=${encodeURIComponent(pays)}`;
            } else {
                console.warn("Méthode inconnue :", method);
                return;
            }

            // Appel API
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    const destinationList = document.querySelector('.destination__list');
                    destinationList.innerHTML = "";

                    data.forEach(article => {
                        const articleElement = document.createElement('div');
                        articleElement.innerHTML = `
                            <h3 class="destination destination_titre">${article.title.rendered}</h3>
                            <div class="destination destination_texte">${article.excerpt.rendered}</div>
                            <a href="${article.link}" class="destination_plus">Lire plus</a>
                        `;
                        destinationList.appendChild(articleElement);

                        const articleTitre = articleElement.querySelector(".destination_titre");
                        const articleInfo = articleElement.querySelector(".destination_texte");

                        articleTitre.addEventListener("click", () => {
                            articleInfo.classList.toggle("visible");
                        });
                    });
                })
                .catch(error => console.error('Erreur lors de la récupération des articles:', error));
        });
    });
});