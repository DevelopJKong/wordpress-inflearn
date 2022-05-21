<?php get_header(); ?>

<div class="container" id="site-content">
  <div class="row title-page">
    <div class="col-12">
      <?php if(is_search()) { ?>

        <h1><?php esc_html_e('Results for:', 'digitally'); echo $s; ?> </h1>

      <?php } else if(is_category() || is_tag()) { ?>

        <h1><?php echo single_cat_title(); ?></h1>

      <?php } else if(is_home()) { ?>

        <h1><?php echo __('News', 'digitally'); ?></h1>

      <?php } else { ?>

        <h1><?php bloginfo('name'); ?></h1>

      <?php } ?>
    </div>
  </div>
</div>

<main class="container">

  <div class="row">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'post' ); ?>
    
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
