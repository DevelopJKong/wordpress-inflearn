<?php 
$digitally_logoimage = esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link cta" href="#site-content"><?php echo __('Skip to content', 'digitally') ?></a>

<header>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-2 col-8 header__logo">
        <?php if(get_theme_mod( 'custom_logo' )) { ?>
          <a class="header__logo--img" href="<?php echo esc_url_raw(home_url()); ?>">
            <img src="<?php echo $digitally_logoimage; ?>" alt="Logo <?php bloginfo('name'); ?>">
          </a>
        <?php } else { ?>
          <a class="header__logo--title" href="<?php echo esc_url_raw(home_url()); ?>"><?php bloginfo('name'); ?></a>
        <?php }; ?>
      </div>

      <div class="col-4 header__hamburger">
        <button class="nav-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>

      <div class="col-lg-10 header__menu">
        <?php
          wp_nav_menu([
            'menu'            => 'primary',
            'theme_location'  => 'primary',
            'menu_class'      => 'menu-primario'
          ]);
        ?>
      </div>
      
    </div>
  </div> 

</header>