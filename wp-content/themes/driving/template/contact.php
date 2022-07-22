<?php 
/*
* Template Name: Contact Page
*/
	get_header();
    while ( have_posts() ) :
        the_post();
?>
    <!-- Banner-area -->
    <section class="about-banner-area">
        <div class="container">
            <div class="banner-text text-center">
                <h1 class=" wow fadeInDown"  data-wow-duration="1s">Contact Us</h1>
                <a href="<?php echo get_home_url(); ?>">Home <span>/</span></a>
                <a class="about-link" href="javascprit:void(0)">Contact Us</a>
            </div>
        </div>
    </section>
    <!--Contacts area -->
    <section class="Contacts-page-area">
        <div class="container">
            <div class="row">
                <div class="form-all-items">
                    <div class="col-lg-4 p-0">
                        <div class="contact-tuc-area">
                             <?php if ( $contact_address = get_field( 'contact_address' ) ) : ?>
                                <div class="tuch-items text-center">
                                    <div class="tuch-icon"><i class="far fa-map-marker-alt"></i></div>
                                    <div class="tuch-text">
                                        <p><?php echo esc_html( $contact_address ); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ( $contact_phone_no = get_field( 'contact_phone_no' ) ) : ?>
                                <div class="tuch-items text-center">
                                    <div class="tuch-icon"><i class="fas fa-phone"></i></div>
                                    <div class="tuch-text">
                                        <p><?php echo esc_html( $contact_phone_no ); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ( $contact_email = get_field( 'contact_email' ) ) : ?>
                                <div class="tuch-items  text-center">
                                <div class="tuch-icon"><i class="fal fa-envelope"></i></div>
                                <div class="tuch-text">
                                    <p><?php echo esc_html( $contact_email ); ?></p>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-8">
            <div class="location">
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.912525239268!2d-73.9816287844535!3d40.76394864237235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258f9cfcb250d%3A0xdb570ddcb766e3a8!2sNew%20York%20City%20Center!5e0!3m2!1sen!2sbd!4v1623272586807!5m2!1sen!2sbd" loading="lazy"></iframe>
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