<?php $erreur_texte = get_theme_mod("404_texte","");?>
<?php $erreur_titre = get_theme_mod("404_titre","");?>

<?php get_header(); ?>
    <section class="global__erreur">
        <h1 class="404_titre"><?php echo $erreur_titre;?></h1>
        <p class="404_texte"><?php echo $erreur_texte;?></p>
        <?php wp_nav_menu(array(
                    "menu" => "menu_404",
                    "container" => "nav",
                    "container_class" => "menu__404"
            )); ?>
    </section>
    <footer></footer>
    <?php get_footer() ?>
    <!-- <?php wp_footer() ?> -->
</body>
</html>