<?php
/*
Template Name: Pays
*/
get_header();
?>
<section class="page__pays">
    <div class="global">
        <h1 class="pays__titre">Les plus beau pays</h1>
        <p class="pays__description">Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! Notre planète regorge de destinations incroyables, chacune promettant une expérience unique et mémorable. Que vous rêviez de plages idylliques baignées de soleil, de sommets majestueux invitant à la randonnée, de villes vibrantes d’histoire et de modernité, ou de rencontres culturelles authentiques, il y a un pays fait pour vous.</p>
        <?php echo apply_filters('the_content', get_post_field('post_content', get_the_ID())); ?>
   
        <?php creer_vague("#ffd6e0", "#ffb6c1"); ?> <!-- Vague rose pâle -->
        <!-- ////////////////////////////////////////////////  section rest-api -->
        <div class="pays__boutons">
        <?php
            $pays = [
            "France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc",
            "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"
            ];

        foreach ($pays as $nom_pays) {
            echo '<button class="boutonCat" data-method="search" data-search="' . esc_attr($nom_pays) . '">' . esc_html($nom_pays) . '</button>';
        }
        ?>
        <div class="destination__list"></div>
</div>
        <?php creer_vague("#ffb6c1", "#ff7a9e"); ?> <!-- Vague rose plus foncée -->
    </div>
</section>

<?php get_footer(); ?>