<?php 
// $hero_background = get_theme_mod('hero_background', ''); 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
for ($k=0; $k<3; $k++){
    $hero_background[$k] = get_theme_mod('hero_background_'. $k, '');
    }
    
?>
<?php $icone_1_img = get_theme_mod("icone_image1", "http://localhost:81/4w4/wp-content/uploads/2025/02/25231.png") ?>
    <?php $icone_1_url = get_theme_mod("icone_url1", "Default") ?>
    <?php $icone_2_img = get_theme_mod("icone_image2", "http://localhost:81/4w4/wp-content/uploads/2025/02/77364-instagram-icons-computer-black-logo-white-wine_600x600.png") ?>
    <?php $icone_2_url = get_theme_mod("icone_url2", "Default") ?>
    <?php $icone_3_img = get_theme_mod("icone_image3", "FacebookIconBlack.png") ?>
    <?php $icone_3_url = get_theme_mod("icone_url3", "Default") ?>
    <?php $icone_4_img = get_theme_mod("icone_image4", "5a2fe479cc45e43754640849.png") ?>
    <?php $icone_4_url = get_theme_mod("icone_url4", "Default") ?>

<!-- Gabarit pour hero -->
<section class="hero">
    <div class="hero__carrousel actif" style="background-image: url(<?php echo $hero_background[0] ?>)"></div>
    <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[1] ?>)"></div>
    <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[2] ?>)"></div>
    
    <div class="hero__contenu global">
            <!-- Partie principale -->
            <h1 class="hero__titre">
                Interstellaire, là où vos rêves <br>
                prennent leur envol.✨🚀
            </h1>
            <?php echo $hero_auteur; ?>
            <p class="hero__description">
                Avec une équipe d'experts passionnés, des navettes ultramodernes et un service de conciergerie galactique, chaque voyage devient une expérience inoubliable, alliant confort, sécurité et émerveillement. <br> <br>
                Prêt à embarquer pour la prochaine aventure? Le cosmos vous attend.
            </p>
            <p class="hero__infos">209 rue des Oiseaux, Saturne <br>
                <a href="" class="hero__courriel">
                    interstellaire@cmaisonneuve.qc.ca
                </a>
            </p>
            
            <button class="hero__bouton">
                Inscription
            </button>
            <section class = "hero__icones"></section>
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
            <div class="hero__radio">
                <input  class="hero__radio__input" data-id_radio="0" type="radio" name="carroussel"  checked="checked">
                <input  class="hero__radio__input" data-id_radio="1" type="radio" name="carroussel">
                <input  class="hero__radio__input" data-id_radio="2" type="radio" name="carroussel">
            </div>
    </div>
    
    </section>
    <!-- Section du formulaire -->
    <section class="formulaire">
        <form>
            <div class="input">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name=""><br><br>
            </div>
            <div class="input">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name=""><br><br>
            </div>
            <div class="input">
                <label for="courriel">Courriel</label>
                <input type="text" id="courriel" name=""><br><br>
            </div>
            <div class="input">
                <label for="telephone">Téléphone</label>
                <input type="text" id="telephone" name=""><br><br>
            </div>
            <input type="submit" class="inscrire" value="S'INSCRIRE">
        </form>
    </section>