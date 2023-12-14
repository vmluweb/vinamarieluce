<?php get_header(); ?>

<main>
    <div class="banner">
        <div class="banner_intro">
            <div class="banner_text">
                <p>Bienvenue ! Je suis Vina, Développeuse intégratrice web. <br>Je construis des <span id="banner_text_one">sites créatifs</span> avec des <span>fonctionnalités sur-mesure</span>.</p>
                <div class="btn_banner_container">
                    <a href="http://localhost/vinamarieluce/#portfolio_link" class="banner_button btn"> <span>Explorer le portfolio</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ArrowCircleRightOutline.png" alt="ArrowCircleRightOutline">
                    </a>

                    <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/CV_DEC_2023_Vina_MARIE-LUCE.pdf" class="cv_button" download> Télécharger CV
                    </a>
                </div>
            </div>
            <div class="banner_image"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vina-avatar.png" alt="vina-avatar"></div>

        </div>
        <video class="media_video" autoplay muted loop playsinline>
            <source src="<?php echo get_theme_file_uri() . '/assets/video/pexels_videos_1877846_Miriam_Espacio.mp4' ?>">
        </video>

    </div>

    <?php echo get_template_part('template-parts/about'); ?>

    <section class="subject">
        <article class="subject_container">
            <div class="subject_intro">
                <h2>Quels sont mes domaines d'intervention ?</h2>
                <p> Face aux avancées technologiques, il devient difficile de conserver les mêmes pratiques au travail.
                    <br>
                    La multiplicité des outils et des équipements peut être un frein à la transformation numérique. <br>Si vous souhaitez réaliser un projet web pour: <br>
                    - Faire évoluer votre activité en ligne ? <br>
                    - Intégrer une équipe IT ?
                    <br> <span><i>Découvrez dès maintenant les domaines dans lesquels je peux vous accompagner.</i></span>
                </p>
            </div>

            <div class="subject_cards">

                <div class="subject_cards_box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cad.png" alt="Applications web icône">
                    <p>Création de site</p>
                </div>

                <div class="subject_cards_box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seo.png" alt="Optimisation icône">
                    <p>Optimisation de site</p>
                </div>
                <div class="subject_cards_box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-maintenance.png" alt="Maintenance web icône">
                    <p>Maintenance de site</p>
                </div>
            </div>
            <a href="#" class="btn btn_gallery ">Contact</a>
        </article>
    </section>

    <section class="homepage_gallery">
        <h2 id="portfolio_link">Trouvez le template qui vous inspire</h2>
        <div class="project_grid">

            <?php
            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => 6,
                'paged' => 1,
            );

            $portfolio_query = new WP_Query($args);

            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();

                    get_template_part('template-parts/gallery-home');

                endwhile;
                wp_reset_postdata();
            else :
                echo "aucune publication trouvée";
            endif; ?>
        </div>

    </section>

</main>
</div>
<?php get_footer(); ?>