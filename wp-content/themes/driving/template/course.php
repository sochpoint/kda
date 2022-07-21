<?php 
/*
* Template Name: Course Page
*/
	get_header();
    while ( have_posts() ) :
        the_post();
?>
    <!-- Banner-area -->
    <section class="about-banner-area">
        <div class="container">
            <div class="banner-text text-center">
                <h1 class=" wow fadeInDown"  data-wow-duration="1s">Our Courses</h1>
                <a href="<?php echo get_home_url(); ?>">Home <span>/</span></a>
                <a class="about-link" href="javascprit:void(0)">Our Courses</a>
            </div>
        </div>
    </section>
    <!-- Courses-area -->
    <section class="h3-courses-area mb-5">
        <div class="container">
            <div class="title text-center">
                <h2>Our Popular Driving Courses</h2>
            </div>
            <div class="courses-images owl-carousel">
            <?php
            $loop = new WP_Query(
                array(
                    'post_type' => 'our-course', // This is the name of your post type - change this as required,
                    'posts_per_page' => -1 // This is the amount of posts per page you want to show
                )
            );
            while ( $loop->have_posts() ) : $loop->the_post();
            // The content you want to loop goes in here:
            ?>    
            <div class="item"> 
                    <div class="course-item"> 
                        <?php
                        if( has_post_thumbnail() ){?>
                        <div class="courses-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php } ?>
                        <div class="courses-img-heading">
                            <div class="img-heading">
                                <h3><?php the_title(); ?></h3>
                                <?php if (get_field('price')): ?>
                                    <h4>$<?php the_field('price'); ?></h4>
                                <?php endif ?>
                            </div>
                            <p><?php the_content(); ?></p>
                             <a class="theme-btn" href="<?php the_permalink(); ?>">View Course</a>
                        </div>
                    </div>
                </div>
            
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </section>
<?php 
endwhile;
get_footer();