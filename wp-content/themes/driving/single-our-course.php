<?php
get_header();
?>
    <!-- Banner-area -->
    <section class="about-banner-area">
        <div class="container">
            <div class="banner-text text-center">
                <h1 class=" wow fadeInDown" data-wow-duration="1s"><?php the_title(); ?></h1>
                <a href="<?php echo get_home_url(); ?>">Home <span>/</span></a>
                <a href="<?php echo get_permalink(18); ?>">Our Courses <span>/</span></a>
                <a class="about-link" href="javascprit:void(0)"><?php the_title(); ?></a>
            </div>
        </div>
    </section>
    <section class="coursee-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="courses-img">
                        <?php
                        if (has_post_thumbnail()):
                            ?>
                            <div class="images-id">
                                <?php the_post_thumbnail(); ?>

                            </div>
                        <?php endif; ?>
                        <div class="img-comments">
                            <h3><?php the_title(); ?></h3>

                        </div>
                        <div class="courses-reviews">
                            <?php if ($price = get_field('price')) : ?>
                                <h4>$<?php echo $price; ?></h4>
                            <?php endif; ?>
                        </div>
                        <p class="peragraph"><?php the_content(); ?></p>
                    </div>
                    <div class="course-information">
                        <?php
                        $course_information = get_field('course_information');
                        if ($course_information):
                            echo $course_information;
                        endif;
                        ?>

                    </div>

                </div>
                <div class="col-lg-4">
                    <?php echo do_shortcode('[contact-form-7 id="171" title="Course Details Booking Form"]'); ?>
                </div>


            </div>
        </div>
        </div>
    </section>
    <!-- Cleint_area -->
<?php
get_footer();