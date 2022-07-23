<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package driving
 */

get_header();
while (have_posts()) :
    the_post();
    ?>

    <!-- Banner-area -->
    <section class="about-banner-area">
        <div class="container">
            <div class="banner-text text-center">
                <h1 class=" wow fadeInDown" data-wow-duration="1s"><?php the_title(); ?></h1>
                <a href="<?php echo get_home_url(); ?>">Home <span>/</span></a>
                <a class="about-link" href="javascprit:void(0)"><?php the_title(); ?></a>
            </div>
        </div>
    </section>
    <section class="coursee-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <?php the_content();
                        s ?>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Cleint_area -->


<?php
endwhile;
get_footer();
