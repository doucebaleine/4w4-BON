<?php $icone_1_img = get_theme_mod("icone_image1", "http://localhost:81/4w4/wp-content/uploads/2025/02/25231.png") ?>
    <?php $icone_1_url = get_theme_mod("icone_url1", "Default") ?>
    <?php $icone_2_img = get_theme_mod("icone_image2", "http://localhost:81/4w4/wp-content/uploads/2025/02/77364-instagram-icons-computer-black-logo-white-wine_600x600.png") ?>
    <?php $icone_2_url = get_theme_mod("icone_url2", "Default") ?>
    <?php $icone_3_img = get_theme_mod("icone_image3", "FacebookIconBlack.png") ?>
    <?php $icone_3_url = get_theme_mod("icone_url3", "Default") ?>
    <?php $icone_4_img = get_theme_mod("icone_image4", "5a2fe479cc45e43754640849.png") ?>
    <?php $icone_4_url = get_theme_mod("icone_url4", "Default") ?>

<footer>
    <!-- FOOTER -->
    <div class="piedpage">
        <!-- 1ere section footer -->
    <section class="piedpage__s1">
        <div class="piedpage__s1__externe">
        <h2 class="piedpage__s1__externe__titre">Lien de voyage</h2>
            <?php wp_nav_menu(array(
                "menu" => "externe",
                "container" => "nav",
            )) ?>
        </div>
        <div class="piedpage__s1__adresse">
        <h2 class="piedpage__s1__adresse__titre">Plus d'informations</h2>
            <div class="piedpage__s1_adresse__coord">
            <p>209 rue des Oiseaux, Saturne <br>
                <a href="">
                    interstellaire@cmaisonneuve.qc.ca
                </a>
            </p>
            </div>
            <div class="piedpage__s1__adresse__recherche">
                <?php get_search_form();?>
            </div>
        </div>
        <div class="piedpage__s1__description">
            <h2 class="piedpage__s1__description__titre">À propos de nous</h2>
            <p>Avec une équipe d'experts passionnés, des navettes ultramodernes et un service de conciergerie galactique, chaque voyage devient une expérience inoubliable, alliant confort, sécurité et émerveillement. <br> <br>
                Prêt à embarquer pour la prochaine aventure? Le cosmos vous attend.</p>
        </div>
    </section>
    <!-- 2e section footer -->
    <section class="piedpage__s2">
        <div class="piedpage__s2__rs">
            <a href="<?php echo $icone_1_url ?>">
                        <img class="hero__icones" src="<?php echo $icone_1_img ?>" width="32" height="32">
                    </a>
                    <a href="<?php echo $icone_2_url ?>">
                        <img class="hero__icones" src="<?php echo $icone_2_img ?>" width="32" height="32">
                    </a>
                    <a href="<?php echo $icone_3_url ?>">
                        <img class="hero__icones" src="<?php echo $icone_3_img ?>" width="32" height="32">
                    </a>
                    <a href="<?php echo $icone_4_url ?>">
                        <img class="hero__icones" src="<?php echo $icone_4_img ?>" width="32" height="32">
                    </a>
        </div>
        <div class="piedpage__s2__menu">
            <?php wp_nav_menu(array(
                "menu" => "principal",
                "container" => "nav",
            )) ?>
        </div>
    </section>
    </div>
</footer>
<?php get_footer();?>
<?php wp_footer();?>
