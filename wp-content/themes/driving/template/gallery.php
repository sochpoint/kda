<?php 
/*
* Template Name: Gallery Page
*/
	get_header();
    while ( have_posts() ) :
        the_post();
?>
    <!-- Banner-area -->
    <section class="about-banner-area">
        <div class="container">
            <div class="banner-text text-center">
                <h1 class=" wow fadeInDown"  data-wow-duration="1s">Our Gallery</h1>
                <a href="<?php echo get_home_url(); ?>">Home <span>/</span></a>
                <a class="about-link" href="javascprit:void(0)">Our Gallery</a>
            </div>
        </div>
    </section>
    <!-- Gallery-area -->
    <section class="gallery-area mb-5">
        <div class="container">
            <div class="title text-center">
                <h2>See Our Photos</h2>
            </div>
            <div class="row">
                <?php
                $loop = new WP_Query(
                    array(
                        'post_type' => 'our-gallery', // This is the name of your post type - change this as required,
                        'posts_per_page' => 21 // This is the amount of posts per page you want to show
                    )
                );
                while ( $loop->have_posts() ) : $loop->the_post();
                // The content you want to loop goes in here:
                ?>
                <?php
                if( has_post_thumbnail() ){?>
                <div class="col-lg-4 col-md-6">
                    <div class="geallery-image">
                        <div class="geallery-translliet">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="geallery-link">
                            <a href="<?php the_post_thumbnail_url(); ?>" class="img-zoom"><i class="fal fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
                <?php endwhile;  wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php 
endwhile;
get_footer();