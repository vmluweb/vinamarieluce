<?php get_header(); ?>

<main>
    <div class="banner">

        <div class="banner_text">
            <p>Bienvenue ! Je suis Vina, Développeuse intégratrice web. <br>Je construis des <span>sites créatifs</span> avec des <span>fonctionnalités sur-mesure</span>.</p>

            <a href="http://localhost/vinamarieluce/portfolio/" class="banner_button"> <span>Explorer le portfolio</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ArrowCircleRightOutline.png" alt="ArrowCircleRightOutline">
            </a>

        </div>
        <div class="banner_image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vina-avatar.png" alt="vina-avatar">
        </div>
    </div>

    <!-- emplacement expertise à ajouter ici-->
    <?php get_template_part('template-parts/expertise'); ?>
    <?php get_template_part('template-parts/gallery-home'); ?>


</main>
<?php get_footer(); ?>