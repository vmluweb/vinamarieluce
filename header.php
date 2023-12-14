<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <title>Vina Marie-Luce</title> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="main-content">
        <header class="top site_header">
            <div class="main-navigation">
                <div class="top_logo site-title">
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/VINA_MARIE-LUCE.svg" alt="Logo">
                    </a>
                </div>

                <div class="burgerMenu">
                    <!-- Icones menu burger -->
                    <div id="icons"></div>
                </div>

                <?php wp_nav_menu(array(
                    'theme_location' => 'main',
                    'container' => 'nav',
                    'container_class' => 'menu-navigation',
                    'menu_id' => 'top_menu',
                    'menu_class' => 'top_menu',

                )); ?>
            </div>
        </header>