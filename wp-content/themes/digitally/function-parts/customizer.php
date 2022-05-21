<?php

function digitally_customize_register($wp_customize) {

  // Add New Section: Colors site
  $wp_customize->add_section( 'digitally_color_section', array(
                    'title' => 'Colors',
                    'description' => 'Set Colors of the site',
                    'priority' => '40'                  
  )); 
  
  // Add Settings 
  $wp_customize->add_setting( 'digitally_primary_color', array(
      'default' => '#4f87ff',
      'sanitize_callback'  => 'esc_attr',
  ));
  // Add Controls
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digitally_primary_color', array(
      'label' => 'Primary color',
      'section' => 'digitally_color_section',
      'settings' => 'digitally_primary_color'

  )));

  $wp_customize->add_setting( 'digitally_secondary_color', array(
      'default' => '#334c80',
      'sanitize_callback'  => 'esc_attr',                        
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digitally_secondary_color', array(
      'label' => 'Secondary color',
      'section' => 'digitally_color_section',
      'settings' => 'digitally_secondary_color'
  )));
}

add_action('customize_register', 'digitally_customize_register');

?>
