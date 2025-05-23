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

function genere_vague($couleur){?>
    <svg style="top:200px;" class="vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="<?= $couleur ?>" fill-opacity="1" d="M0,256L120,218.7C240,181,480,107,720,101.3C960,96,1200,160,1320,192L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    <svg style="top:10px;" class="vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="<?= $couleur ?>" fill-opacity="1" d="M0,96L120,106.7C240,117,480,139,720,133.3C960,128,1200,96,1320,80L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
<?php }

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