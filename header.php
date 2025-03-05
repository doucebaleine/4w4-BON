<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de voyage</title>
    <?php wp_head() ?>
    <!-- <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css"> -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> 
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </figure>
            <?php wp_nav_menu(array(
                    "menu" => "principal",
                    "container" => "nav",
                    "container_class" => "entete__menu"
            )); ?>
            <?php get_search_form();?>
        </div>
            <input type="checkbox" name="check" id="check" class="entete__checkbox">
            <label for="check" class="entete__burger">
                <span class="material-icons">
                    menu
                </span>
                
            </label>
        </div>
    </header>