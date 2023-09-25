<?php get_header(); ?>



<main class="site_portfolio">
    <div class="banner_portfolio">

        <div class="banner_text_portfolio">
            <h1 class="site_heading"><?php post_type_archive_title(); ?></h1>

        </div>

    </div>
    <div class="project_grid_wrapper">

        <video class="media_video" autoplay muted loop playsinline>
            <source src="<?php echo get_theme_file_uri() . '/assets/video/pexels_videos_1877846_Miriam_Espacio.mp4' ?>">
        </video>

        <div class="project_grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="project">
                        <a href="<?php the_permalink(); ?>" class="post__link">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</main>

<?php the_posts_pagination(); ?>
<?php get_footer(); ?>