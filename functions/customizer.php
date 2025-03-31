<?php
// Début de la section hero

function theme_tp_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Section', 'theme_tp'),
    'priority' => 30,
));
// Ajout d'un réglage pour  l'auteur
  $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Laurence Mongeau', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
// Ajout d'un contrôle pour l'auteur
$wp_customize->add_control('hero_auteur', array(
  'label' => __('Auteur', 'theme_tp'),
  'section' => 'hero_section',
  'type' => 'text',
));
// Ajout d'un réglage pour le background
$wp_customize->add_setting('hero_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
// Ajout d'un contrôle pour le background
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
  'label' => __('Image background', 'theme_tp'),
  'section' => 'hero_section',
)));
// Ajout d'un réglage pour la couleur
$wp_customize->add_setting('hero_color', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
// Ajout d'un contrôle pour la couleur
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, "hero_color", array(
  "label"=> __("Couleur icone sociaux", "theme_tp"),
  "section" => "hero_section",
  // "settings" => "hero_icone",
)));


// SECTION FOOTER
// Début de la section footer
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
$wp_customize->add_section('footer_section', array(
  'title' => __('Footer Section', 'theme_tp'),
  'priority' => 30,
));
// Ajout de réglage et contrôle pour la Mission
$wp_customize->add_setting('footer_mission', array(
  'default' => __('mission footer', 'theme_tp'),
  'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('footer_mission', array(
  'label' => __('Mission', 'theme_tp'),
  'section' => 'footer_section',
  'type' => 'text',
));
// Ajout de réglage et contrôle pour l'adresse
$wp_customize->add_setting('footer_adresse', array(
  'default' => __('adresse footer', 'theme_tp'),
  'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('footer_adresse', array(
  'label' => __('Adresse', 'theme_tp'),
  'section' => 'footer_section',
  'type' => 'text',
));

// Ajout de réglage et contrôle pour le courriel
$wp_customize->add_setting('footer_courriel', array(
  'default' => __('courriel footer', 'theme_tp'),
  'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('footer_courriel', array(
  'label' => __('Courriel', 'theme_tp'),
  'section' => 'footer_section',
  'type' => 'text',
));

//////SECTION 404
$wp_customize->add_section('section_404', array(
  'title' => __('Erreur Section', 'theme_tp'),
  'priority' => 30,
));

/// TITRE 404
$wp_customize->add_setting('404_titre', array(
  'default' => __('titre erreur', 'theme_tp'),
  'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('404_titre', array(
  'label' => __('Titre', 'theme_tp'),
  'section' => 'section_404',
  'type' => 'text',
));

/// TEXTE 404
$wp_customize->add_setting('404_texte', array(
  'default' => __('texte erreur', 'theme_tp'),
  'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('404_texte', array(
  'label' => __('Texte', 'theme_tp'),
  'section' => 'section_404',
  'type' => 'text',
));

// BACKGROUND 404
$wp_customize->add_setting('404_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
// Ajout d'un contrôle pour le background
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '404_background', array(
  'label' => __('Image background', 'theme_tp'),
  'section' => 'section_404',
)));

}
add_action('customize_register', 'theme_tp_customize_register');
