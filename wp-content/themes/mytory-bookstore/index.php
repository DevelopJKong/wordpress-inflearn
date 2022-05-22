<?php get_header(); ?>

<ul>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) :
        the_post();
    ?>
        <li>
            <a href="<?php the_permalink();?>">
            <?php the_title(); ?>
            </a>
        </li>

    <?php endwhile;?>
<?php endif; ?>
</ul>



<?php get_footer();?>