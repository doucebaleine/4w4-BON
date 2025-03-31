<?php $erreur_texte = get_theme_mod("404_texte","");?>
<?php $erreur_titre = get_theme_mod("404_titre","");?>
<?php $erreur_couleur = get_theme_mod("404_color","");?>
<?php $erreur_background = get_theme_mod('404_background', '');?>

<?php get_header(); ?>
    <section class="global__erreur" style="background-image: url('<?= $erreur_background ?>')">
        <h1 class="titre_404" style="color: <?= $erreur_couleur ?>"><?php echo $erreur_titre;?></h1>
        <p class="texte_404" style="color: <?= $erreur_couleur ?>"><?php echo $erreur_texte;?></p>
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