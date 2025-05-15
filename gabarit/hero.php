<?php 
// $hero_background = get_theme_mod('hero_background', ''); 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
for ($k=0; $k<3; $k++){
    $hero_background[$k] = get_theme_mod('hero_background_'. $k, '');
    }
?>
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
            <?php get_template_part("gabarit/icone")?>
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