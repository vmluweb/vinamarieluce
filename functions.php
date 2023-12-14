<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

// Affichée une fois par date différente
the_date();

// Affichée pour chaque article avec le format défini dans WordPress
the_time(get_option('date_format'));

// Affichée pour chaque article, avec un format de date et heure personnalisé (ici : 02 Avril 2019 à 17:23)
the_time('j F Y à H:i');

add_action('wp_enqueue_scripts', 'vml_register_assets');
function vml_register_assets()
{

    wp_enqueue_style(
        'vml',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0'
    );

    // Déclarer jQuery
    wp_enqueue_script('jquery');

    // Déclarer le JS
    wp_enqueue_script(
        'vml-script',
        get_template_directory_uri() . '/assets/scripts/script.js'
    );
}


register_nav_menus(array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
));

require_once get_template_directory() . '/inc/custom-vml.php';
