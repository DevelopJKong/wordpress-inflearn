<?php

// THEME TYPO
function digitally_define_font_sizes() {
	add_theme_support(
		'editor-font-sizes',
		[
			[
				'name' => __( 'Medium', 'digitally' ),
				'size' => 30,
				'slug' => 'medium',
			],
			[
				'name' => __( 'Large', 'digitally' ),
				'size' => 40,
				'slug' => 'large',
			],
		]
	);
}
add_action( 'after_setup_theme', 'digitally_define_font_sizes' );

// THEME COLOR
function digitally_color_setup() {
	// Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );

    $digitally_primaryColor = ((get_theme_mod('digitally_primary_color'))?get_theme_mod('digitally_primary_color'):"#4f87ff");
    $digitally_secondaryColor = ((get_theme_mod('digitally_secondary_color'))?get_theme_mod('digitally_secondary_color'):"#334c80");

	// Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Primary', 'digitally' ),
			'slug'  => 'primary',
			'color'	=> $digitally_primaryColor,
		),
		array(
			'name'  => __( 'Secondary', 'digitally' ),
			'slug'  => 'secondary',
			'color' => $digitally_secondaryColor,
		),
        array(
			'name'  => __( 'Grey', 'digitally' ),
			'slug'  => 'grey',
			'color' => '#707070',
		),
		array(
			'name'  => __( 'white', 'digitally' ),
			'slug'  => 'white',
			'color' => '#ffffff',
		),
	) );
}
add_action( 'after_setup_theme', 'digitally_color_setup' );


?>