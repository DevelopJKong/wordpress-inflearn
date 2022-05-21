<?php 
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

<main class="container main-content">

  <div class="row row404">

    <div class="col-lg-4">

          <h1><?php esc_html_e('Not Found', 'digitally'); ?></h1>
          
    </div>

    <div class="col-lg-8">
      <p><?php esc_html_e('This is somewhat embarrassing, isn’t it?', 'digitally'); ?><br>
      <?php esc_html_e('It looks like nothing was found at this location.', 'digitally'); ?></p>
    </div>

  </div>

</main>

<?php get_footer(); ?>
