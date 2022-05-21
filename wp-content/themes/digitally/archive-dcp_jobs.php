<?php get_header(); ?>

<div class="container" id="site-content">
  <div class="row title-page">
    <div class="col-12">

        <h1><?php echo __('We are hiring', 'digitally'); ?></h1>

    </div>
  </div>
</div>

<main class="container">

  <div id="jobs" class="jobs-list row">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'jobs' ); ?>
    
      <?php endwhile; ?>

      <div class="pagination">
        <?php
        $digitally_big = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $digitally_big, '%#%', esc_url( get_pagenum_link( $digitally_big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
        ?>
      </div>

      <?php else : ?>
        	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'digitally'); ?></p>
      <?php endif; ?>


  </div>

</main>


<?php get_footer(); ?>
