<?php


function load_stylesheets()
{

    wp_register_style('bootstrap_stylesheet', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap_stylesheet');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css',
        array(), false, 'all');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_js() {

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true);

    wp_register_script('custom_js', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('custom_js');

    wp_register_script('font_awesome', 'https://use.fontawesome.com/289aa7636e.js', '', 1, true);
    wp_enqueue_script('font_awesome');





}

add_action('wp_enqueue_scripts', 'load_js');


add_theme_support('menus');
register_nav_menus(

    array(
        'top-menu' => __('Main menu', 'theme'),
        'footer-menu' => __('Footer menu', 'theme')
    )

);



add_theme_support('post-thumbnails');

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);


// Filter except length to 35 words.
// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );