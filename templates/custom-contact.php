<?php
/*
  Template Name: Custom contact
*/

get_header(); ?>

<main class="site_contact">
  <?php
  if (have_posts()) : while (have_posts()) : the_post();
  ?>
      <h1><?php the_title(); ?></h1>
      <div class="content">
        <?php the_content(); ?>
      </div>
  <?php
    endwhile;
  endif;
  ?>

  <div class="form-container">
    <?php echo do_shortcode('[contact-form-7 id="02a2e5e" title="Formulaire de contact"]'); ?>
  </div>
</main>

<?php get_footer(); ?>