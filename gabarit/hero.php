<!-- Gabarit pour hero -->
<?php $hero_auteur = get_theme_mod("hero_auteur","Laurence Mongeau");?>
<?php $hero_background = get_theme_mod("hero_background","");?>

<section class="hero" style="background-image: url(<?php echo $hero_background?>);">
        <div class="hero__contenu global">
            <!-- Partie principale -->
            <h1 class="hero__titre">
                Interstellaire, là où vos rêves <br>
                prennent leur envol.✨🚀
            </h1>
            <p class="hero__description">
                Avec une équipe d'experts passionnés, des navettes ultramodernes et un service de conciergerie galactique, chaque voyage devient une expérience inoubliable, alliant confort, sécurité et émerveillement. <br> <br>
                Prêt à embarquer pour la prochaine aventure? Le cosmos vous attend.
            </p>
            <p class="hero__auteur">Auteur : <?php echo $hero_auteur?></p>
            <p class="hero__infos">209 rue des Oiseaux, Saturne <br>
                <a href="" class="hero__courriel">
                    interstellaire@cmaisonneuve.qc.ca
                </a>
            </p>
            
            <button class="hero__bouton">
                Inscription
            </button>
            <?php get_template_part("gabarit/icone")?>
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