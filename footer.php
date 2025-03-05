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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, modi facilis obcaecati dolore est voluptatem, rem officia sint eveniet maiores omnis unde, neque explicabo cum! Cumque officia vel totam rerum?</p>
        </div>
    </section>
    <!-- 2e section footer -->
    <section class="piedpage__s2">
        <div class="piedpage__s2__rs">
            <?php get_template_part("gabarit/icone")?>
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
