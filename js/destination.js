

/**
 *  Script js permettant d'extraite des destinations de voyage
 */
    const boutons = document.querySelectorAll(".boutonCat");
    boutons.forEach(function(bouton){
        bouton.addEventListener("click", function(){
            console.log("bouton cliquer");
            boutons.forEach(function(bouton){
                bouton.classList.remove("actif");
            })
            bouton.classList.add("actif");

            // console.log("destination.js")
      const categoryId = bouton.getAttribute("data-category_id"); // Remplacez par l'ID de la catégorie souhaitée
      const domaine = window.location.href
      const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
      console.log(apiUrl)
      parcourir_bouton()
  
    function parcourir_bouton(){
      const categorie__ul__li = document.querySelectorAll(".categorie__ul__li")
      console.log("categorie__ul__li.length = ", categorie__ul__li.length)
      categorie__ul__li.forEach(elm => {
          elm.addEventListener('mousedown', function(){
              console.log(elm.tagName)
              console.log("elm.dataset.category_id = " , elm.dataset.category_id)
          })
      })
  
  }
  
  
      fetch(apiUrl)
          .then(response => response.json())
          .then(data => {
              const destinationList = document.querySelector('.destination__list');
              destinationList.innerHTML="";
              data.forEach(article => {
                  const articleElement = document.createElement('div');
                  // console.log(article.title.rendered)
                  // <div>${article.excerpt.rendered}</div>
                  articleElement.innerHTML = `
                      <h3 class="destination destination_titre">${article.title.rendered}</h3>
                      <div class="destination destination_texte">${article.excerpt.rendered}</div>
                      <a href="${article.link}"class="destination_plus">Lire plus</a>
                  `;
                  destinationList .appendChild(articleElement);
  
              let articleTitre = articleElement.querySelector(".destination_titre");
              let articleInfo = articleElement.querySelector(".destination_texte");
  
              // console.log(articleInfo);
              console.log(articleTitre);
  
              articleTitre.addEventListener("click", function(){
              console.log("click");
  
                  articleInfo.classList.toggle("visible");
              })
              });
  
              
          })
          .catch(error => console.error('Erreur lors de la récupération des articles:', error));
        })
    
    
      
      })
    
    
    

  