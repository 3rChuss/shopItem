<?php
/**
 * @package shopitem
 */

 get_header();
?>
<!-- Page sidebar -->
    <?php get_sidebar(); ?>

<!-- /.col-lg-3 -->
<div class="col-lg-9">
    <?php 
    if ( have_posts() ){
        while ( have_posts() ) {
            the_post();
            ?>
            <div class="card mt-4">
                <div class="card-body">
                    <h3 class="card-title"><?php the_title(); ?></h3>
                    <span class="card-text"><?php the_content(); ?></span>
                </div>
            </div>
            <?php
        }
    }

    ?>
<!-- /.container -->
<?php get_footer(); ?>


