<?php
/**
 * ShUrRe functions and definitions
 *
 *
 * @package shopItem
 */

function wpdocs_theme_slug_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'shop_items', get_template_directory_uri() . '/css/shop-item.css', array(), '1.0.0' );
    wp_enqueue_style( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '1.0.0' );
    wp_enqueue_style( 'jquery', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_slug_scripts' );

function add_additional_class_on_li($classes, $item, $args) {
    $classes[] = $args->add_li_class;
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


?>