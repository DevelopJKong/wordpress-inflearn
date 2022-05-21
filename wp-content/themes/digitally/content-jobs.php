<div class="card-jobs col-12">
    <div class="card-jobs__content">
        <div class="row align-items-end">
            <div class="col-lg-10 jobs__text">
                <p class="jobs-details">
                    <?php echo get_post_meta( $post->ID, '_jobs_hours', true )  ?>
                    <?php echo get_post_meta( $post->ID, '_jobs_headquarter', true )  ?>
                </p>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="col-lg-2 jobs__cta">
                <a href="<?php the_permalink(); ?>" class="cta">
                    <?php echo __('Read more', 'digitally') ?>
                </a>
            </div>
        </div>
    </div>
</div> 