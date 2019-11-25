<?php
/**
 * @package shopitem
 */

 get_header();
?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h1 class="my-4"><?php bloginfo('name'); ?></h1>
        <div class="list-group">
            <?php
            $args = array( 
                'hide_empty'    => false
            );
            //$cats = get_categories($args);
            $cats = get_the_terms(get_the_ID(), 'product_cat');
            $output = '';
            if( $cats ) {
                foreach ( $cats as $category ){
                    $output = '<a href="'.get_category_link($category->term_id).'" class="list-group-item">'.$category->name.'</a>';
                    echo $output;
                }      
            }
            ?> 
        </div>
    </div>
<!-- /.col-lg-3 -->
<div class="col-lg-9">
    <?php 
    if ( have_posts() ){
        while ( have_posts() ) {
            the_post();
            ?>
            <div class="card mt-4">
                <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
                <div class="card-body">
                    <h3 class="card-title"><?php the_title(); ?></h3>
                    <h4>$24.99</h4>
                    <p class="card-text"><?php the_content(); ?></p>
                    <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                    4.0 stars
                </div>
            </div>
            <?php
        }
    }
    ?>


