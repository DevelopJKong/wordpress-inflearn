<?php get_header(); ?>

<main class="main-content" id="site-content">

  <div class="container">
    <?php if(!is_front_page()) { ?>
    <div class="row title-page">
      <div class="col-12">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    <?php } ?>

    <?php get_template_part( 'content', 'page' ) ?> 

    <?php 
      if ( comments_open() || get_comments_number() ) {
    ?>
      <div class="row justify-content-center">
        <div class="col-lg-6 ">
          <div class="comments">
              <?php comments_template(); ?>
          </div>
        </div>
      </div>
    <?php 
      }
    ?>
  </div>

    
  

</main>

<?php get_footer(); ?>
