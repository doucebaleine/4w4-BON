<?php
// Template-part
$cat_a_retirer = "aucune";
if (is_front_page()) {
  // Changer cat_a_retirer pour "populaire"
  $cat_a_retirer = "populaire";  
  // Écrire dans la console
} else {
}
?>

<!-- Gabarit pour les cartes -->
<article class="carte carte--grande">
  <div class="carte__contenu">
    <h4 class="carte__titre"><?php the_title(); ?></h4>
    <h3 class="carte__categorie"><?php categorie_par_destination($cat_a_retirer); ?></h3>

    <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 10, "..."); ?></p>
    <p>Température maximum : <?php the_field("temperature_maximum")?></p>
    <p>Température minimum : <?php the_field("temperature_minimum")?></p>
    <p>Température moyenne : <?php the_field("temperature_moyenne")?></p>
    <a class="carte__bouton carte__bouton--actif" href="<?= the_permalink()?>">Suite</a>
  </div>
</article>