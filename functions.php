<?php
function wpdocs_theme_slug_scripts() {
     /*
     * To avoid double loading Genericons will not need a slug. Same applies
     * to all other non-custom styles or scripts.
     */
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0' );
    wp_enqueue_style( 'shop_items', get_template_directory_uri() . '/css/shop-item.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_slug_scripts' );


?>