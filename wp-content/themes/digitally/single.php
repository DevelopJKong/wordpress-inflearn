<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<main class="container" id="site-content">

  <div class="row justify-content-center">

    <div class="col-lg-6">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="title-page">
          <h1><?php the_title(); ?></h1>
          <time><?php the_date(get_option('date_format')); ?></time>
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

        <?php $digitally_category_list = get_the_category(); ?>
        <?php if($digitally_category_list) { ?>
          <div class="category-list">
            <h3><?php echo __('Category', 'digitally'); ?><h3>

            <div>
              <?php foreach($digitally_category_list as $category) {
                echo '<a href="'. get_category_link( $category->term_id ) .'">' . $category->name . '</a>';
              } ?>
            </div>
          </div>
        <?php } ?>

        <?php $digitally_tags_list = get_the_tags(); ?>
        <?php if($digitally_tags_list) { ?>
          <div class="tags-list">
            <h3><?php echo __('Tags', 'digitally'); ?><h3>

            <div>
              <?php foreach($digitally_tags_list as $tag) {
                echo '<a href="'. get_category_link( $tag->term_id ) .'">' . $tag->name . '</a>';
              } ?>
            </div>
          </div>
        <?php } ?>

      <?php endwhile; else : ?>
      	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'digitally'); ?></p>
      <?php endif; ?>

      <div class="comments">
          <?php comments_template(); ?>
      </div>

    </div>
    

  </div>

</main>

<?php get_footer(); ?>
