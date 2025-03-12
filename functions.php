<?php
// Définir le chemin vers le dossier "functions"
$functions_dir = get_template_directory() . '/functions/';

// Inclure les fichiers spécifiques
include_once $functions_dir . 'customizer.php';
include_once $functions_dir . 'options.php';

// Inclure d'autres fichiers si nécessaire
// include_once $functions_dir . 'autre-fichier.php';
// include_once $functions_dir . 'encore-un-autre.php';
?>