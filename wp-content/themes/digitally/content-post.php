<article <?php post_class('col-lg-3 col-sm-6 card-post'); ?>>
    <div class="card-post__back">
        <?php if(get_the_post_thumbnail()) { ?>
        <div class="article-image">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('digitally_single', array('alt' => get_the_title() )); ?>
            </a>
        </div>
        <?php } ?>

        <div class="article-text">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <time><?php the_time(get_option('date_format')); ?></time>
            
            <div class="excerpt">
                <?php the_excerpt(); ?>
            </div>
            
            <a class="cta" href="<?php the_permalink(); ?>"><?php echo __('Read more', 'digitally'); ?></a>
        </div>
    </div>
</article>