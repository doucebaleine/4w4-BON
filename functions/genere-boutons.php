<?php
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug){
    // Récupérer la catégorie parente à partir de son slug
    $parent_category = get_category_by_slug($parent_slug);
    // Vérifier si la catégorie parente existe
    if ($parent_category) {
        $parent_id = $parent_category->term_id;
        // Récupérer les sous-catégories de "destination"
        $sous_categories = get_categories(array(
            'parent' => $parent_id, // Filtrer par le parent "destination"
            'hide_empty' => true, // Ne pas afficher les catégories vides
    ));


        // Vérifier s'il y a des sous-catégories
        if (!empty($sous_categories)) {
            echo '<ul class="categorie__ul">';
        foreach ($sous_categories as $categorie) {
            // Afficher le nom de chaque sous-catégorie
            echo '<li  data-category_id="' . esc_html($categorie->term_id) . '" class="boutonCat">' . 'data-method="categories"' . esc_html($categorie->name) . '</li>';
        }
        echo '</ul>';
        }
    }
}

function creer_vague($couleur_haut = "#ffccdd", $couleur_bas = "#ffe6ee") {
    echo '
    <div style="position: relative; width: 100%; height: 150px; overflow: hidden;">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none" 
             style="width: 100%; height: 100%; display: block;">
            <path d="M0,160 C480,240 960,80 1440,160 L1440,0 L0,0 Z" 
                  fill="' . esc_attr($couleur_bas) . '"></path>
        </svg>
        <div style="background-color: ' . esc_attr($couleur_haut) . '; 
                    height: 100%; width: 100%; position: absolute; top: 0; left: 0; z-index: -1;">
        </div>
    </div>';
}


function categorie_par_destination($categorie_retirer){
  // Récupérer toutes les catégories de l'article
  $categories = get_the_category();


  // Boucle à travers les catégories
  foreach ($categories as $categorie) {
//   print($categorie_retirer);
//   print($categorie);

    // Afficher la catégorie (+ un lien vers la page de la catégorie)
        if ($categorie->slug != $categorie_retirer){
            echo '<li class="carte__categorie"><a href="' . esc_url(get_category_link($categorie->term_id)) . '">' . esc_html($categorie->name) . '</a></li>';
        }
  }
}