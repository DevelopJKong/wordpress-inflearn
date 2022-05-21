<?php get_header(); ?>

<main class="container" id="site-content">

  <div class="row justify-content-center">

    <div class="col-lg-12">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="title-page">
          <h1><?php the_title(); ?></h1>
          <?php if(get_post_meta( $post->ID, '_jobs_headquarters', true )) { ?>
            <strong><?php echo get_post_meta( $post->ID, '_jobs_headquarters', true )  ?></strong>
          <?php } ?>
        </div>

        <article <?php post_class('single_content jobs_content row'); ?>>

          <div class="col-lg-6 offset-lg-1 jobs__content">
            <?php the_content(); ?>
          </div>

          <div class="col-lg-3 offset-lg-1 jobs__sidebar">
            <ul>
              <?php if(get_post_meta( $post->ID, '_jobs_level', true )) { ?>
              <li>
                <p><strong><?php echo __('Seniority level', 'digitally') ?></strong></p>
                <p><?php echo get_post_meta( $post->ID, '_jobs_level', true )  ?></p>
              </li>
              <?php } ?>

              <?php if(get_post_meta( $post->ID, '_jobs_sector', true )) { ?>
              <li>
                <p><strong><?php echo __('Sector', 'digitally') ?></strong></p>
                <p><?php echo get_post_meta( $post->ID, '_jobs_sector', true )  ?></p>
              </li>
              <?php } ?>

              <?php if(get_post_meta( $post->ID, '_jobs_hours', true )) { ?>
              <li>
                <p><strong><?php echo __('Kind of employment', 'digitally') ?></strong></p>
                <p><?php echo get_post_meta( $post->ID, '_jobs_hours', true )  ?></p>
              </li>
              <?php } ?>
            </ul>
          </div>

        </article>


      <?php endwhile; else : ?>
      	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'digitally'); ?></p>
      <?php endif; ?>

    </div>
    

  </div>

</main>

<?php get_footer(); ?>
