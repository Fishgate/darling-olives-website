<?php

/**
 * enqueue scripts and styles for the frontend of the child theme
 *
 * git deployment test 1
 * 
 */
function fishgatefold_enqueue(){
    // register font awesome styles (http://fortawesome.github.io/Font-Awesome/)
    wp_register_style( 'font-awesome-styles', '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', array(), '', 'all' );
    wp_enqueue_style( 'font-awesome-styles' );

    // register google font, stolen from the fantastic Bones theme (http://themble.com/bones/)
    wp_register_style('google-fonts', 'http://fonts.googleapis.com/css?family=Cinzel', array(), '', 'all');
    wp_enqueue_style( 'google-fonts');
    
    // register fishgatefold css
    wp_register_style('fishgatefold-styles', get_stylesheet_directory_uri() . '/css/main.css', array('google-fonts', 'font-awesome-styles'), '1.0', 'all');
    wp_enqueue_style('fishgatefold-styles');
    
    // register fishgatefold js
    wp_register_script('fishgatefold-js', get_stylesheet_directory_uri() . '/js/scripts.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('fishgatefold-js');    
}
add_action('wp_print_styles', 'fishgatefold_enqueue');

/**
 * enqueue admin scripts and styles for additional child them functionality
 */
function fishgatefold_enqueue_admin() {    
    // register fishgatefold admin styles (mostly used for custom meta boxes)
    wp_register_style('fishgatefold-admin-styles', get_stylesheet_directory_uri() . '/admin/css/main.css', array(), '1.0', 'all');
    wp_enqueue_style('fishgatefold-admin-styles');
    
    // register fishgatefold admin scripts (mostly used for custom meta boxes)
    wp_register_script('fishgatefold-admin-js', get_stylesheet_directory_uri() . '/admin/js/admin-scripts.min.js', array(), '1.0', true);
    wp_enqueue_script( 'fishgatefold-admin-js' );
}
add_action('admin_enqueue_scripts', 'fishgatefold_enqueue_admin');

/*
 * Shortcode Empty Paragraph Fix
 * http://www.johannheyne.de/wordpress/shortcode-empty-paragraph-fix/
 * 
 */
function ff_shortcode_empty_paragraph_fix( $content ) {
    $array = array (
        '<p>[' => '[',
        ']</p>' => ']',
        ']<br />' => ']'
    );

    $content = strtr( $content, $array );
    
    return $content;
}
add_filter( 'the_content', 'ff_shortcode_empty_paragraph_fix' );