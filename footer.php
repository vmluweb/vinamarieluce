<footer class="bottom">
    <div class="bottom_header">
        <ul class="bottom_info">
            <li class="bottom_info_intro">
                <a class="top_logo" href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/VINA_MARIE-LUCE.svg" alt="Logo">
                </a>
                <span class="socialNetwork"> <a href="http://"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-linkedin-64.png" alt="LinkedIn"></a> <a href="http://"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons8-github-64.png" alt="Github"></a></span>
            </li>
            <li>
                <?php echo do_shortcode('[contact-form-7 id="02a2e5e" title="Formulaire de contact"]'); ?>
            </li>
        </ul>
    </div>

    <div class="bottom_main">
        <ul class="bottom_info_container">
            <li>
                <span>&#9906;</span> NÎMES, FRANCE
            </li>
            <li>
                <span>&#9990;</span> +33-698-712-433
            </li>
            <li>
                <span>&#9993;</span> vina.marieluce@gmail.com
            </li>
        </ul>
    </div>
    <div class="bottom_nav">
        <p class="bottom_legacy">
            &copy; Tous droits réservés <?php the_date('Y'); ?> | <a href="#about"><strong>Vina MARIE-LUCE</strong></a>
        </p>
    </div>
</footer>

</body>

</html>