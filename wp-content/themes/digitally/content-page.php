<div class="row page-content">
    <div class="col-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'digitally'); ?></p>
        <?php endif; ?>
    </div>
</div>
