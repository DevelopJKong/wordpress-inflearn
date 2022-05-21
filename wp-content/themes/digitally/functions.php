<?php
// SETUP THEME
if(! function_exists('digitally_setup_theme')) {
  function digitally_setup_theme() {

    //Load theme languages
    load_theme_textdomain( 'digitally', get_template_directory().'/languages' );

    // Add supports title
    add_theme_support("title-tag");

    // Add feed supports
    add_theme_support( 'automatic-feed-links' );

    // Enable featured image
    add_theme_support("post-thumbnails");

    add_theme_support("html5");

    add_theme_support("custom-logo");

    add_theme_support("wp-block-styles");


    // Create cuustom image size
    add_image_size("digitally_square", 400, 400, true);
    add_image_size("digitally_single", 400, 250, true);
    add_image_size("digitally_single_page", 1640, 700, true);
    add_image_size("digitally_medium", 600, 400, true);

    // Create header menu
    register_nav_menus(array(
      'primary' => esc_html__('Header navigation', 'digitally'),
    ));

  }
}

add_action('after_setup_theme', 'digitally_setup_theme');


// ADD SIDEBAR

if(! function_exists('digitally_sidebars')) {
  function digitally_sidebars() {
    register_sidebar(array(
      'name' => esc_html__('Footer Contacts', 'digitally'),
      'id' => 'footer1',
      'description' => esc_html__('Footer column for contacts', 'digitally'),
      'before_title' => '<h3>',
      'after_title' => '</h3>',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget' => '</div>',
      )
    );
    register_sidebar(array(
      'name' => esc_html__('Footer Navigation', 'digitally'),
      'id' => 'footer2',
      'description' => esc_html__('Footer column for navigation', 'digitally'),
      'before_title' => '<h3>',
      'after_title' => '</h3>',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget' => '</div>',
      )
    );
    register_sidebar(array(
      'name' => esc_html__('Footer Social', 'digitally'),
      'id' => 'footer3',
      'description' => esc_html__('Footer column for social', 'digitally'),
      'before_title' => '<h3>',
      'after_title' => '</h3>',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget' => '</div>',
      )
    );
    register_sidebar(array(
      'name' => esc_html__('Footer Policy', 'digitally'),
      'id' => 'footer4',
      'description' => esc_html__('Footer column for policy', 'digitally'),
      'before_title' => '<h3>',
      'after_title' => '</h3>',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget' => '</div>',
      )
    ); 
    
    register_sidebar(array(
      'name' => esc_html__('Call to action', 'digitally'),
      'id' => 'contant_button',
      'description' => esc_html__('Section before footer', 'digitally'),
      'before_title' => '<h3>',
      'after_title' => '</h3>',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget' => '</div>',
      )
    ); 
  }
}

add_action('widgets_init', 'digitally_sidebars');


// INCLUDE JS FILE

if(! function_exists('digitally_scripts')) {
  function digitally_scripts() {

    wp_enqueue_script('digitally-popper-js', get_template_directory_uri() . '/assets/js/popper.js', array('jquery'), null, true);
    wp_enqueue_script('digitally-select2-js', get_template_directory_uri() . '/assets/js/select2.min.js', array('jquery'), null, true);
    wp_enqueue_script('digitally-script-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);

    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
  }
}

add_action('wp_enqueue_scripts', 'digitally_scripts');


// INCLUDE CSS FILE

if(! function_exists('digitally_style')) {
  function digitally_style() {

    wp_enqueue_style('digitally-space-fonts-css', 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&display=swap');
    wp_enqueue_style('digitally-inter-fonts-css', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    wp_enqueue_style('digitally-reset-css', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('digitally-fontawesome-css', get_template_directory_uri() . '/assets/css/all.css');
    wp_enqueue_style('digitally-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap-grid.css');
    wp_enqueue_style('digitally-selectw-css', get_template_directory_uri() . '/assets/css/select2.min.css');
    wp_enqueue_style('digitally-style-default-css', get_template_directory_uri() . '/style.css');
  }
}

add_action('wp_enqueue_scripts', 'digitally_style');


// INCLUDE JS & CSS ADMIN

function digitally_js_admin($hook) {
    // Only add to the edit.php admin page.
    // See WP docs.
    if ('post.php' !== $hook && 'post-new.php' !== $hook) {
        return;
    }
    wp_enqueue_script('select2', get_template_directory_uri() . '/assets/js/select2.min.js', array('jquery'), null, true);
    wp_enqueue_script('adminjs', get_template_directory_uri() . '/assets/js/adminjs.js', array('jquery'), null, true);

    wp_enqueue_style('digitally-select2', get_template_directory_uri() . '/assets/css/select2.min.css');
    wp_enqueue_style('digitally-fontawesome', get_template_directory_uri() . '/assets/css/all.css');
}

add_action('admin_enqueue_scripts', 'digitally_js_admin');


// INCLUDE CSS EDITOR

function digitally_gutemberg_setup() {
   // Add support for editor styles.
   add_theme_support( 'editor-styles' );

   // Enqueue editor styles.
   add_editor_style( 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&display=swap' );
   add_editor_style( 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap' );
   add_editor_style( '/style.css' );
   add_editor_style( '/assets/css/admin.css' );
}
add_action( 'after_setup_theme', 'digitally_gutemberg_setup' );


// ADD ALIGN GUTENBERG
function digitally_gutenberg_setup() {
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'digitally_gutenberg_setup' );


//RESPONSIVE EMBED
add_action( 'after_setup_theme', function() {
    add_theme_support( 'responsive-embeds' );
} );


// EXCERPT LENGTH
function digitally_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'digitally_excerpt_length', 999 );


// ADD CUSTOMIZER
require dirname( __FILE__ ) . '/function-parts/customizer.php';

//LOAD COLORS VARIABLE
require dirname( __FILE__ ) . '/function-parts/colors.php';

// ADD GUTENBERG SETUP
require dirname( __FILE__ ) . '/function-parts/gutenberg.php';

// ADD CUTENBERG PATTERN
require dirname( __FILE__ ) . '/function-parts/pattern_gutenberg.php';

// REQUIRED PLUGIN
require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';
function digitally_setup_plugins() {
    
    $plugins = array(        
      array(
        'name' => 'Digitally Custom Posts',
        'slug' => 'digitally-custom-posts',
        'required' => false,
        'force_activation' => false
      ),
    );
    
    $config = array();

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'digitally_setup_plugins' );

?>