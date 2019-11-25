<?php
/**
 * @package shopitem
 */

 get_header();
?><!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h1 class="my-4"><?php bloginfo('name'); ?></h1>
        <div class="list-group">
            <?php
            $args = array( 
                'title_li'      => 0,
                'style'         => '',
                'hide_empty'    => 0,
                'show_count'    => 0,
                'hierarchical'  => 0,
                'echo'          => false,
            );
            $cats = get_categories($args);
            $output = '';
            if( $cats ) {
                foreach ( $cats as $category ){
                    $output = '<a href="'.get_category_link($category->term_id).'" class="list-group-item">'.$category->cat_name.'</a>';
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
    <!-- /.card -->
<!-- 
    <div class="card card-outline-secondary my-4">
        <div class="card-header">
            Product Reviews
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
        </div>
    </div> -->
    <!-- /.card -->

</div>
<!-- /.col-lg-9 -->

</div>

</div>
<!-- /.container -->

<?php get_footer(); ?>