<?php

// disable auto updates
add_filter( 'auto_update_theme', '__return_false' );
add_filter( 'auto_update_plugin', '__return_false' );

// enqueue stylesheets
function my_theme_enqueue_styles() {
    $parenthandle = 'twenty-twenty-one-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

//enqueue additional scripts
function my_js_enqueue_scripts() {
	wp_enqueue_script( 'first', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', [], null, true );
    wp_enqueue_script( 'second', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', ['first'], null, true );
}
add_action( 'wp_enqueue_scripts', 'my_js_enqueue_scripts', 100 );

// Remove widget area
function remove_parent_functionality() {
    remove_action( 'widgets_init', 'twenty_twenty_one_widgets_init' );
}
add_action('after_setup_theme', 'remove_parent_functionality');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// add additional footer menu
function register_my_menu() {
    register_nav_menu('footer-alt-menu',__( 'Footer Alt Menu'));
    }
    add_action( 'init', 'register_my_menu' );
