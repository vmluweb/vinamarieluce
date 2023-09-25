<section class="homepage_gallery">
    <h2>Projets récents</h2>
    <div class="homepage_gallery_container">

        <?php
        $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1,
        );

        $portfolio_query = new WP_Query($args);

        if ($portfolio_query->have_posts()) :
            while ($portfolio_query->have_posts()) : $portfolio_query->the_post();

        ?>
                <article class="gallery_card">
                    <div class="gallery_image">
                        <a href="<?php the_permalink(); ?>" class="post__link">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="gallery_title">
                        <a href="<?php the_permalink(); ?>" class="post__link">
                            <h3><?php the_title(); ?></h3>
                        </a>
                    </div>
                </article>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
        // Aucun projet trouvé.
        endif;
        ?>
    </div>
</section>