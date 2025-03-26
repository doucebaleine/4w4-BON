<?php $erreur_texte = get_theme_mod("erreur_texte","");?>

<?php get_header(); ?>
    <section class="global__erreur">
        <h1>Oups!</h1>
        <p><?php echo $erreur_texte;?></p>
    </section>
    <footer></footer>
    <?php get_footer() ?>
    <!-- <?php wp_footer() ?> -->
</body>
</html>