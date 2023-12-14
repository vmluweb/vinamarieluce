<?php

add_action('init', 'vml_register_post_types');
function vml_register_post_types()
{

    // CPT Portfolio
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
    );

    register_post_type('portfolio', $args);
}

/**
 * 02_Personnalisation de la requête principale pour les pages de type "single"
 *
 */
add_action('pre_get_posts', 'custom_portfolio_query');
function custom_portfolio_query($query)
{
    if (!is_admin() && $query->is_main_query()) {
        if (is_single()) {
            $query->set('post_type', 'portfolio');
            $query->set('post_status', 'publish');
            $query->set('order', 'ASC');
        }
    }
}
