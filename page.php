<?php
/**
 * @package shopitem
 */

 get_header();
?><!-- Page sidebar -->
<?php get_sidebar(); ?>

<!-- /.col-lg-3 -->
<div class="col-lg-9">
    <div class="card-deck">
        <?php
            if (is_shop()){
                $args = array( 
                    'hide_empty'    => false,
                );
                $cats = get_terms('product_cat', $args);
                $output = '';
                if( $cats ) {
                    foreach ( $cats as $category ){
                        $cat_thumb_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
                        $cat_thumb_url = wp_get_attachment_thumb_url( $cat_thumb_id );
                        $term_link = get_term_link( $category, 'product_cat' );

                        $output = '
                        <div class="card">
                        <a href="'.get_category_link($category->term_id).'" class="text-white"><img class="card-img-top" src="'.$cat_thumb_url.'"></a>
                            <div class="card-body">
                                <h5 class="card-title">'.$category->name.'</h5>
                                <p class="card-text">'.$category->description.'</p>
                            </div>
                            <div class="card-footer bg-primary">
                                <a href="'.get_category_link($category->term_id).'" class="text-white">VER MÁS</a>
                            </div>
                        </div>';
                        echo $output;
                    }      
                }
            }
        ?> 
    </div>
    <?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            ?>
        <div class="card mt-4">
            <?php
            if (is_product_category()){
                global $wp_query;
                $cat = $wp_query->get_queried_object();
                $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true ); 
                $image = wp_get_attachment_url( $thumbnail_id ); 
                echo '<img class="card-img-top img-fluid" src="'.$image.'"/>';
            }
            ?>
            <div class="card-body">
                <h3 class="card-title"><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
        </div>
            <?php
        }
    }
?>

<?php get_footer(); ?>