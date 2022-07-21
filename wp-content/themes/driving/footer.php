<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package driving
 */

?>


<!-- footer-area -->
<footer class="footer-area">
        <div class="container">
            <div class="footer-top-item">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 p-0 wow fadeInUp" data-wow-duration="1.00s">
                        <div class="footer-second-item">
                            <h4>Contact</h4>
                            <ul>
                            <?php if ( $contact_address = get_field( 'contact_address' ) ) : ?>
                                <li><a class="map" href="javascprit:void(0)">
                                    <span><i class="fal fa-map-marker-alt"></i></span><?php echo esc_html( $contact_address ); ?>
                                </a></li>
                            <?php endif; ?>
                            <?php if ( $contact_phone_no = get_field( 'contact_phone_no' ) ) : ?>
                                <li> <a href="tel:<?php echo esc_html( $contact_phone_no ); ?>">
                                    <span><i class="fal fa-phone"></i></span><?php echo esc_html( $contact_phone_no ); ?>
                                </a></li>
                            <?php endif; ?>
                            <?php if ( $contact_email = get_field( 'contact_email' ) ) : ?>
                                <li><a href="mailto:<?php echo esc_html( $contact_email ); ?>"><span><i class="fal fa-envelope-open"></i></span><?php echo esc_html( $contact_email ); ?></a></li>
                            <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="1.20s">
                        <div class="footer-third-item">
                            <h4>Our Courses</h4>
                            <div class="second-menu">
                                <ul>
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
                                <li><a href="<?php the_permalink(); ?>">
                                    <span><i class="fal fa-angle-right"></i></span><?php the_title(); ?>
                                </a></li>
                                <?php endwhile; wp_reset_postdata(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="1.40s">
                        <div class="footer-four-item">
                            <h4>Follow Us</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            <ul class="footer-menu">
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.googleplus.com/"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-item text-center d-block">
				
                    <p>
						<span>&#169;</span><?php echo date('Y'); ?> Kama's Driving Academy. 
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Made with 💖 by %1$s' ), '<a href="https://sochpoint.com/" class="text-white">Soch Point</a>' );
						?>
				</p>
                    <a class="footer-button" href="javascprit:;"><i class="fal fa-chevron-up"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Preloader -->  
    <!-- <div class="preloader"></div> -->

	<?php wp_footer(); ?>
</body>

<!-- Mirrored from emran-khan.com/drivel/home-v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 12:41:58 GMT -->
</html>


	
