<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <title>Vina Marie-Luce</title> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class('site'); ?>>
    <?php wp_body_open('site'); ?>
    <header class="site_header">
        <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/VINA_MARIE-LUCE.svg" alt="Logo">
        </a>

        <?php wp_nav_menu(array(
            'theme_location' => 'main',
            'container' => 'ul',
            'menu_class' => 'site_header_menu'
        )); ?>
    </header>