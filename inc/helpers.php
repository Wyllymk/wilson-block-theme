<?php
/**
 * Wilson Block Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wilson Block Theme
 * @since Wilson Block Theme 1.0
 */
    
add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_styles_scripts' );

function theme_slug_enqueue_styles_scripts() {
    wp_enqueue_style( 
        'theme-slug-style', 
        get_stylesheet_uri()
    );

    wp_enqueue_style( 
        'theme-slug-primary',
        get_theme_file_uri( 'assets/css/primary.css' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        'all'
    );

    
    wp_enqueue_script( 
		'theme-slug-navigation',
		get_theme_file_uri( 'assets/js/navigation.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}

add_action( 'after_setup_theme', 'theme_slug_setup' );

function theme_slug_setup() {
    add_editor_style( array(
        get_stylesheet_uri(),
        get_theme_file_uri( 'assets/css/primary.css' )
    ) );
}