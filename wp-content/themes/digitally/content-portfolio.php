<div class="card-project">

    <a href="<?php the_permalink(); ?>">

        <?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'project__img' ) ); ?>
        
        <div class="project__text container">
            <p class="project-category">
                <?php echo strip_tags( get_the_term_list( $post->ID, 'cat_portfolio', '', ', ') ) ?>
            </p>
            <h3><?php the_title(); ?></h3>
        </div>
    
    </a>  

</div> 