<?php get_header(); ?>

<main class="container" id="site-content">

  <div class="row justify-content-center">

    <div class="col-lg-6">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="title-page">
          <h1><?php the_title(); ?></h1>
          <?php $digitally_category_list = wp_get_post_terms( $post->ID, 'cat_portfolio');?>
          <div class="time">
            <?php foreach($digitally_category_list as $category) {
                echo $category->name;
            } ?>
          </div>
        </div>

        <article <?php post_class('single_content'); ?>>

          <?php if(get_the_post_thumbnail()) { ?>
            <div class="single__thumbnail">
                <figure>
                  <?php the_post_thumbnail('digitally_single_page', array('alt' => get_the_title() )); ?>
                </figure>
            </div>
          <?php } ?>

          <?php the_content(); ?>

        </article>

        <div class="comments">
           <?php comments_template(); ?>
        </div>


      <?php endwhile; else : ?>
      	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'digitally'); ?></p>
      <?php endif; ?>

    </div>
    

  </div>

  <!-- RELATED PROJECT -->

  <?php
  $digitally_related = get_posts( array( 
    'post_type'         => 'portfolio',
    'numberposts'       => 2, 
    'post__not_in'      => array($post->ID),
    'tax_query'         => array(
      array(
        'taxonomy' => 'cat_portfolio',
        'field' => 'term_id', 
        'terms' => wp_get_post_terms( $post->ID, 'cat_portfolio', array( 'fields' => 'ids' ) ), /// Where term_id of Term 1 is "1".
      )
    ))
  );

  if( $digitally_related ) { ?>
    <div class="row related">
      <div class="col-12">
        <h3 class="related__title"><?php echo __('Related project', 'digitally') ?></h3>
        <div id="portfolio" class="portfolio-list">
        <?php foreach( $digitally_related as $post ) {
        setup_postdata($post); ?>
          
          <?php get_template_part( 'content', 'portfolio' ) ?> 

        <?php } ?>
        </div>
     </div>
    </div>
  <?php }
  wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
