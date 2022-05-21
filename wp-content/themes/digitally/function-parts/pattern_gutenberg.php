<?php
function digitally_removeCorePatterns() {
    remove_theme_support('core-block-patterns');
}

add_action('after_setup_theme', 'digitally_removeCorePatterns');


function digitally_wp_block_patterns() {

    // CATEGORY
    register_block_pattern_category(
        'digitally_footer',
        array( 'label' => __( 'Digitally footer', 'digitally' ) )
    );

    register_block_pattern_category(
        'digitally_hero',
        array( 'label' => __( 'Digitally hero', 'digitally' ) )
    );

    register_block_pattern_category(
        'digitally_content',
        array( 'label' => __( 'Digitally content', 'digitally' ) )
    );

    register_block_pattern_category(
        'digitally_shortcode',
        array( 'label' => __( 'Digitally shortcode', 'digitally' ) )
    );

    // FOOTER
    register_block_pattern(
        'digitally/digitally-footer-call_to_action',
        array(
            'title'       => __( 'Footer call to action', 'digitally' ),
            
            'description' => __( 'Call to action with question to use into "Call to action" widget area.', 'digitally' ),
            
            'content'     => "<!-- wp:columns {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-columns are-vertically-aligned-center\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:66.66%\"><!-- wp:heading -->\n<h2>Do you need our help?</h2>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:33.33%\"><!-- wp:group -->\n<div class=\"wp-block-group\"><!-- wp:buttons {\"contentJustification\":\"right\"} -->\n<div class=\"wp-block-buttons is-content-justification-right\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">CONTACT US</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:group --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
            
            'categories'  => array('digitally_footer'),
        )
    );

    // HERO
    register_block_pattern(
        'digitally/digitally-hero-illustrated',
        array(
            'title'       => __( 'Hero with illustration', 'digitally' ),
            
            'description' => __( 'Hero with headline, subtitle and call to action on the left side and illustration on the right side', 'digitally' ),
            
            'content'     => "<!-- wp:columns {\"verticalAlignment\":\"center\",\"className\":\"no-margin\"} -->\n<div class=\"wp-block-columns are-vertically-aligned-center no-margin\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:heading {\"level\":1} -->\n<h1>Your awesome<br>headline</h1>\n<!-- /wp:heading -->\n\n<!-- wp:spacer {\"height\":10} -->\n<div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:paragraph {\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\">The strengths <br>of your brand</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:spacer {\"height\":20} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"primary\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-primary-background-color has-background\">Discover</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:image {\"id\":66,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . get_template_directory_uri() . "/assets/img/SEO.png\" alt=\"\" class=\"wp-image-66\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
            
            'categories'  => array('digitally_hero'),
        )
    );

    register_block_pattern(
        'digitally/digitally-hero-photo',
        array(
            'title'       => __( 'Hero with photos', 'digitally' ),
            
            'description' => __( 'Hero with headline, subtitle and call to action on the left side and photos on the right side', 'digitally' ),
            
            'content'     => "<!-- wp:columns {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-columns are-vertically-aligned-center\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:heading {\"level\":1} -->\n<h1><meta charset=\"utf-8\">Your awesome<br>headline</h1>\n<!-- /wp:heading -->\n\n<!-- wp:spacer {\"height\":10} -->\n<div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:paragraph {\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"><meta charset=\"utf-8\">The strengths <br>of your brand</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:spacer {\"height\":20} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"primary\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-primary-background-color has-background\">DISCOVER</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:image {\"align\":\"right\",\"width\":600,\"sizeSlug\":\"large\"} -->\n<div class=\"wp-block-image\"><figure class=\"alignright size-large is-resized\"><img src=\"" . get_template_directory_uri() . "/assets/img/pexels-format-1029757.jpg\" alt=\"\" width=\"600\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:image {\"width\":400,\"sizeSlug\":\"large\"} -->\n<figure class=\"wp-block-image alignleft size-large is-resized\"><img src=\"" . get_template_directory_uri() . "/assets/img/pexels-burst-374016.jpg\" alt=\"\" width=\"400\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
            
            'categories'  => array('digitally_hero'),
        )
    );

    register_block_pattern(
        'digitally/digitally-hero-classic',
        array(
            'title'       => __( 'Classic hero', 'digitally' ),
            
            'description' => __( 'Hero with headline, subtitle and call to action and background photos', 'digitally' ),
            
            'content'     => "<!-- wp:cover {\"url\":\"" . get_template_directory_uri() . "/assets/img/pexels-burst-374016.jpg\",\"id\":221,\"minHeight\":700,\"align\":\"full\"} -->\n<div class=\"wp-block-cover alignfull has-background-dim\" style=\"min-height:700px\"><img class=\"wp-block-cover__image-background wp-image-221\" alt=\"\" src=\"" . get_template_directory_uri() . "/assets/img/pexels-burst-374016.jpg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:heading {\"level\":1} -->\n<h1><meta charset=\"utf-8\">Your awesome headline</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"fontSize\":\"large\"} -->\n<p class=\"has-large-font-size\"><meta charset=\"utf-8\"><meta charset=\"utf-8\">The strengths <br>of your brand</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"primary\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-primary-background-color has-background\">DISCOVER</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover -->",
            
            'categories'  => array('digitally_hero'),
        )
    );


    // CONTENT
    register_block_pattern(
        'digitally/digitally-media-text',
        array(
            'title'       => __( 'Media with text', 'digitally' ),
            
            'description' => __( 'Image on the left side with text on the right side. Text content has title, big and normal paragraphs', 'digitally' ),
            
            'content'     => "<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"100%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:100%\"><!-- wp:columns {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-columns are-vertically-aligned-center\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:50%\"><!-- wp:image {\"align\":\"right\",\"id\":25,\"width\":600,\"height\":400,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<div class=\"wp-block-image\"><figure class=\"alignright size-large is-resized\"><img src=\"" . get_template_directory_uri() . "/assets/img/pexels-format-1029757.jpg\" alt=\"\" class=\"wp-image-25\" width=\"600\" height=\"400\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:image {\"align\":\"left\",\"id\":27,\"width\":600,\"height\":400,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<div class=\"wp-block-image\"><figure class=\"alignleft size-large is-resized\"><img src=\"" . get_template_directory_uri() . "/assets/img/pexels-burst-374016.jpg\" alt=\"\" class=\"wp-image-27\" width=\"600\" height=\"400\"/></figure></div>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"8%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:8%\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"42%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:42%\"><!-- wp:heading -->\n<h2>We are Digitally</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"fontSize\":\"medium\"} -->\n<p class=\"has-medium-font-size\">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec tincidunt scelerisque sem, ac cursus neque fermentum eget.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquam arcu at urna imperdiet bibendum. Sed ante lorem, dapibus eu blandit quis, luctus eu ante. Etiam rhoncus purus vel dui imperdiet, ac feugiat lectus semper. Praesent quam lorem, rutrum sed varius faucibus, cursus eu nisl. Vestibulum pellentesque molestie justo, ut varius tellus convallis non. Curabitur convallis ultricies faucibus. In vel augue efficitur, maximus neque id, luctus tortor. Nunc condimentum dolor eu blandit molestie.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
            
            'categories'  => array('digitally_content'),
        )
    );


    // SHORTCODE
    register_block_pattern(
        'digitally/digitally-portfolio',
        array(
            'title'       => __( 'Portfolio', 'digitally' ),
            
            'description' => __( 'This shortcode show 3 project', 'digitally' ),
            
            'content'     => "<!-- wp:shortcode -->\n[digitally_portfolio]\n<!-- /wp:shortcode -->",
            
            'categories'  => array('digitally_shortcode'),
        )
    );

    register_block_pattern(
        'digitally/digitally-testimonials',
        array(
            'title'       => __( 'Testimonials', 'digitally' ),
            
            'description' => __( 'Section with title and 3 testimonials', 'digitally' ),
            
            'content'     => "<!-- wp:group -->\n<div class=\"wp-block-group\"><!-- wp:heading -->\n<h2>Title of<br>the section</h2>\n<!-- /wp:heading -->\n\n<!-- wp:shortcode -->\n[digitally_testimonials limit=\"3\"]\n<!-- /wp:shortcode --></div>\n<!-- /wp:group -->",
            
            'categories'  => array('digitally_shortcode'),
        )
    );

    register_block_pattern(
        'digitally/digitally-services',
        array(
            'title'       => __( 'Services', 'digitally' ),
            
            'description' => __( 'Section with title, background of the primary color and the list of all services', 'digitally' ),
            
            'content'     => "<!-- wp:group {\"align\":\"full\",\"backgroundColor\":\"primary\"} -->\n<div class=\"wp-block-group alignfull has-primary-background-color has-background\"><!-- wp:heading {\"textColor\":\"white\"} -->\n<h2 class=\"has-white-color has-text-color\">Our service</h2>\n<!-- /wp:heading -->\n\n<!-- wp:spacer {\"height\":72} -->\n<div style=\"height:72px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:shortcode -->\n[digitally_services]\n<!-- /wp:shortcode --></div>\n<!-- /wp:group -->",
            
            'categories'  => array('digitally_shortcode'),
        )
    );

    register_block_pattern(
        'digitally/digitally-blog',
        array(
            'title'       => __( 'Blog', 'digitally' ),
            
            'description' => __( 'Section with title and 4 articles', 'digitally' ),
            
            'content'     => "<!-- wp:group -->\n<div class=\"wp-block-group\"><!-- wp:heading -->\n<h2>Our blog</h2>\n<!-- /wp:heading -->\n\n<!-- wp:shortcode -->\n[digitally_blog]\n<!-- /wp:shortcode --></div>\n<!-- /wp:group -->",
            
            'categories'  => array('digitally_shortcode'),
        )
    );

    register_block_pattern(
        'digitally/digitally-team',
        array(
            'title'       => __( 'Team', 'digitally' ),
            
            'description' => __( 'Section with title and all the people of team', 'digitally' ),
            
            'content'     => "<!-- wp:group -->\n<div class=\"wp-block-group\"><!-- wp:heading -->\n<h2>Our team</h2>\n<!-- /wp:heading -->\n\n<!-- wp:shortcode -->\n[digitally_team]\n<!-- /wp:shortcode --></div>\n<!-- /wp:group -->",
            
            'categories'  => array('digitally_shortcode'),
        )
    );

}    
add_action( 'init', 'digitally_wp_block_patterns' );


?>