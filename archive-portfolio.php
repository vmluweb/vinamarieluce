<?php get_header(); ?>



<main class="site_portfolio">
    <div class="banner_portfolio">

        <div class="banner_text_portfolio">
            <h1 class="site_heading"><?php post_type_archive_title(); ?></h1>

        </div>
        <!-- <div class="banner_media overlay">
            <video class="banner_media_video" autoplay muted loop playsinline data-object-fit="cover">
                <source src="<?php echo get_theme_file_uri() . '/assets/video/vortex_vml.mp4' ?>">
            </video>
        </div> -->
    </div>
    <div class="project_grid_wrapper">

        <video class="media_video" autoplay muted loop playsinline>
            <source src="<?php echo get_theme_file_uri() . '/assets/video/pexels_videos_1877846_Miriam_Espacio.mp4' ?>">
        </video>

        <div class="project_grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="project">
                        <?php the_post_thumbnail(); ?>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</main>

<?php the_posts_pagination(); ?>
<?php get_footer(); ?>