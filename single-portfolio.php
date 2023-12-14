<?php get_header(); ?>

<!-- Affichage d'un article -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <main>
            <div class="banner">
                <div class="banner_intro">

                    <div class="banner_text banner_text_single">
                        <h2><?php the_title() ?></h2>
                    </div>
                </div>
                <div class="banner_img">
                    <?php if (get_field('banniere')) : ?>
                        <img src="<?php the_field('banniere'); ?>" />
                    <?php endif; ?>
                </div>
            </div>
            </div>
            <section class="post">
                <h2>Caractéristiques du projet</h2>
                <article class="post__content_container">

                    <ul class="post__content">
                        <li>
                            <span>Catégorie :</span>
                            <?php the_terms(get_the_ID(), 'categorie', '', ', ', ''); ?>
                        </li>

                        <li>
                            <span>Thème :</span>
                            <?php echo get_post_meta(get_the_ID(), 'theme', true); ?>
                        </li>

                        <li><span>CMS :</span> <?php the_field('cms'); ?></p>

                        <li>
                            <span>Langages :</span>
                            <?php the_terms(get_the_ID(), 'langage', '', ', ', ''); ?>
                        </li>
                        <li><span>Afficher le code :</span><a href="<?php the_field('github'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-github-64.png" alt="Github" class="floating"></a>
                        </li>

                    </ul>
                    <div class="post_img">
                        <?php the_post_thumbnail(); ?>
                    </div>

                </article>
                <div class="post__description">
                    <h2>Spécificités techniques</h2>
                    <p> <?php the_field('description'); ?></p>
                </div>
            </section>

    <?php endwhile;
endif; ?>

        </main>
        </div>
        <?php get_footer(); ?>