<?php get_header(); ?>

<main>
    <div class="banner">

        <div class="banner_text">
            <p>Bienvenue ! Je suis Vina, Développeuse intégratrice web. <br>Je construis des <span>sites créatifs</span> avec des <span>fonctionnalités sur-mesure</span>.</p>
            <button><a href="http://localhost/vinamarieluce/portfolio/"> Explorer le portfolio</a>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ArrowCircleRightOutline.png" alt="ArrowCircleRightOutline"></button>

        </div>
        <div class="banner_image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vina-avatar.png" alt="vina-avatar">
        </div>
    </div>

    <?php get_template_part('template-parts/expertise'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

    <?php endwhile;
    endif; ?>
</main>
<?php get_footer(); ?>