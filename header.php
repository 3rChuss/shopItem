<?php
/**
 * Header del tema
 * @package shopitem
 */

?>

<!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php get_bloginfo();?>">
    <meta name="author" content="Jesus Abril">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <!-- declaramos el head de la plantilla -->
    <?php wp_head(); ?>

 </head>
 <body class="<?php body_class(); ?>">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php
                wp_nav_menu( array (
                    'theme_location'    => 'menu',
                    'menu_id'           => 'primary-menu',
                    'container'         => 'ul',
                    'menu_class'        => 'navbar-nav ml-auto',
                ))
                ?>
        </div>
    </nav>
