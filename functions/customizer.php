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
}

add_action('customize_register', 'theme_tp_customize_register');
?>