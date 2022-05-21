<?php 
$digitally_logoimage = esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );
?>

<?php if(is_active_sidebar('contant_button')) {?>
  <aside class="cta-content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php dynamic_sidebar('contant_button'); ?>
        </div>
      </div>
    </div>
  </aside>
<?php } ?>

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-12 footer-col-1 footer__logo">
        <?php if(get_theme_mod( 'custom_logo' )) { ?>
          <a class="footer__logo--img" href="<?php echo esc_url_raw(home_url()); ?>">
            <img src="<?php echo $digitally_logoimage; ?>" alt="Logo <?php bloginfo('name'); ?>">
          </a>
        <?php } else { ?>
          <a class="footer__logo--title" href="<?php echo esc_url_raw(home_url()); ?>"><?php bloginfo('name'); ?></a>
        <?php }; ?>

        <p><?php bloginfo('description'); ?></p>
      </div>

      <?php if(is_active_sidebar('footer1')) {?>
        <div class="col-lg-4 col-12 col-sm-6 footer-col-2 sidebar">
          <?php dynamic_sidebar('footer1'); ?>
        </div>
      <?php } ?>

      <?php if(is_active_sidebar('footer2')) {?>
        <div class="col-lg-2 col-12 col-sm-6 footer-col-3 sidebar">
          <?php dynamic_sidebar('footer2'); ?>
        </div>
      <?php } ?>

      <?php if(is_active_sidebar('footer3')) {?>
        <div class="col-lg-2 col-12 footer-col-4 sidebar">
          <?php dynamic_sidebar('footer3'); ?>
        </div>
      <?php } ?>
    </div>

    <div class="row secondary-footer">
      <div class="col-lg-8 footer--credits footer-col-5">
        <p><?php echo __('Made with Digitally Theme', 'digitally'); ?> - <a href="https://omarfolgheraiter.it" target="_blank">Omar Folgheraiter</a></p>
      </div>
      <?php if(is_active_sidebar('footer4')) {?>
        <div class="col-lg-4 footer-col-6">
            <?php dynamic_sidebar('footer4'); ?>
        </div>
      <?php } ?>
    </div>
  </div>

</footer>

<header class="fixed-header" id="scrollnav">
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

      <div class="col-lg-10 header__menu">
        <?php
          wp_nav_menu([
            'menu'            => 'primary',
            'theme_location'  => 'primary',
            'menu_class'      => 'menu-primario'
          ]);
        ?>
      </div>
      <div class="col-4 header__hamburger">
        <div class="nav-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </div> 

</header>



<?php wp_footer(); ?>

</body>
</html>
