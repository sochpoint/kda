<?php
/*
* Template Name: Contact Page
*/
get_header();
while (have_posts()) :
    the_post();
    ?>
    <!-- Banner-area -->
    <section class="about-banner-area">
        <div class="container">
            <div class="banner-text text-center">
                <h1 class=" wow fadeInDown" data-wow-duration="1s">Contact Us</h1>
                <a href="<?php echo get_home_url(); ?>">Home <span>/</span></a>
                <a class="about-link" href="javascprit:void(0)">Contact Us</a>
            </div>
        </div>
    </section>
    <!--Contacts area -->
    <section class="Contacts-page-area">
        <div class="container">
            <div class="title text-center">
                <h2>Get in Touch With US</h2>
            </div>
            <div class="row">
                <div class="form-all-items">
                    <div class="col-lg-4 p-0">
                        <div class="contact-tuc-area">
                            <?php if ($contact_address = get_field('contact_address', 12)) : ?>
                                <div class="tuch-items text-center">
                                    <div class="tuch-icon"><i class="far fa-map-marker-alt"></i></div>
                                    <div class="tuch-text">
                                        <p><?php echo esc_html($contact_address); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($contact_phone_no = get_field('contact_phone_no', 12)) : ?>
                                <div class="tuch-items text-center">
                                    <div class="tuch-icon"><i class="fas fa-phone"></i></div>
                                    <div class="tuch-text">
                                        <p><?php echo esc_html($contact_phone_no); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($contact_email = get_field('contact_email', 12)) : ?>
                                <div class="tuch-items  text-center">
                                    <div class="tuch-icon"><i class="fal fa-envelope"></i></div>
                                    <div class="tuch-text">
                                        <p><?php echo esc_html($contact_email); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="location">
                            <?php if ($google_map = get_field('google_map', 12)) : ?>
                                <?php echo $google_map; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location">

            </div>
        </div>
    </section>
<?php
endwhile;
get_footer();