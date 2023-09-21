<?php get_header(); ?>

<!-- Affichage d'un article -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post">
            <?php the_post_thumbnail(); ?>

            <h1><?php the_title(); ?></h1>

            <div class="post__meta">

                <p>
                    Dans la catégorie <?php the_category(); ?>
                    Avec les étiquettes <?php the_tags(); ?>
                </p>
            </div>

            <div class="post__content">
                <?php the_content(); ?>
                <p>
                    <strong>Avis :</strong>
                    <?php echo get_post_meta(get_the_ID(), 'avis', true); ?>
                </p>

                <p>
                    <strong>Note :</strong>
                    <?php echo get_post_meta(get_the_ID(), 'note', true); ?> / 10
                </p>

                <div class="plus-moins">
                    <div class="plus">
                        <?php echo get_post_meta(get_the_ID(), 'plus', true); ?>
                    </div>
                    <div class="plus">
                        <?php echo get_post_meta(get_the_ID(), 'moins', true); ?>
                    </div>
                </div>
            </div>
        </article>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>