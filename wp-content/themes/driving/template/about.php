<?php 
/*
* Template Name: About Page
*/
	get_header();
    while ( have_posts() ) :
        the_post();
?>
    <!-- Banner-area -->
    <section class="about-banner-area">
        <div class="container">
            <div class="banner-text text-center">
                <h1 class=" wow fadeInDown"  data-wow-duration="1s">About Us</h1>
                <a href="<?php echo get_home_url(); ?>">Home <span>/</span></a>
                <a class="about-link" href="javascprit:void(0)">About Us</a>
            </div>
        </div>
    </section>
    <!--h-3 About area -->
    <section class="h3-about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeftBig" data-wow-duration="1.30s">
                    <div class="aboutIsotop">
                        <div class="title">
                        <?php if ( $teaser_title = get_field( 'teaser_title' ) ) : ?>
                            <h6><?php echo '<< ' . esc_html( $teaser_title ). ' >>'; ?></h6>
                        <?php endif; ?>
                        <?php if ( $section_title = get_field( 'section_title' ) ) : ?>
                            <h2><?php echo esc_html( $section_title ); ?></h2>
                        <?php endif; ?>
                       
                        <?php if ( $description = get_field( 'description' ) ) : ?>
                          <?php echo $description; ?>
                        <?php endif; ?>
                            
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="funfact-item">
                                    <span class="completeds"><svg width="48" height="50" viewBox="0 0 48 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.51063 40.9787V5.46383H34.1936V35.2904L39.6585 30.7766V2.73191C39.6585 1.2234 38.4362 0 36.9277 0H2.77872C1.27021 0 0.0478668 1.2234 0.0478668 2.73191V43.7096C0.0478668 45.2181 1.27021 46.4415 2.77872 46.4415H26.617L22.7553 40.9787H5.51063Z" fill="#E81D4F"/>
                                        <path d="M47.5245 29.3713C47.0213 28.8968 46.2479 28.8745 45.7181 29.3106L33.1883 39.666L24.8383 34.6564C24.284 34.3245 23.5745 34.4234 23.133 34.9C22.6947 35.3723 22.6468 36.0883 23.0202 36.616L32.0691 49.4213C32.3223 49.7798 32.734 49.9947 33.1723 49.9989C33.1766 49.9989 33.1808 49.9989 33.1851 49.9989C33.6191 49.9989 34.0287 49.7936 34.2862 49.4404L47.6904 31.1713C48.0947 30.617 48.0255 29.8457 47.5245 29.3713Z" fill="#E81D4F"/>
                                        <path d="M28.0489 9.5617H11.6564C10.1479 9.5617 8.92552 10.7851 8.92552 12.2936C8.92552 13.8021 10.1479 15.0255 11.6564 15.0255H28.0479C29.5564 15.0255 30.7776 13.8021 30.7776 12.2936C30.7776 10.7851 29.5574 9.5617 28.0489 9.5617Z" fill="#E81D4F"/>
                                        <path d="M28.0489 17.7564H11.6564C10.1479 17.7564 8.92552 18.9798 8.92552 20.4883C8.92552 21.9968 10.1479 23.2202 11.6564 23.2202H28.0479C29.5564 23.2202 30.7776 21.9979 30.7776 20.4883C30.7808 18.9798 29.5574 17.7564 28.0489 17.7564Z" fill="#E81D4F"/>
                                        <path d="M28.0489 25.9521H11.6564C10.1479 25.9521 8.92552 27.1755 8.92552 28.684C8.92552 30.1926 10.1479 31.416 11.6564 31.416H28.0479C29.5564 31.416 30.7776 30.1926 30.7776 28.684C30.7808 27.1755 29.5574 25.9521 28.0489 25.9521Z" fill="#E81D4F"/>
                                        </svg>
                                    </span>
                                    <div class="funfact-text">
                                        <?php if ( $counter_first_value = get_field( 'counter_first_value' ) ) : ?>
                                            <h4>
                                                <span class="counter"><?php echo esc_html( $counter_first_value ); ?></span>
                                            </h4>
                                        <?php endif; ?>
                                        <?php if ( $counter_first_text = get_field( 'counter_first_text' ) ) : ?>
                                            <p><?php echo esc_html( $counter_first_text ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="funfact-item">
                                    <span class="completed"><i class="flaticon-steering-wheel"></i>
                                    </span>
                                    <div class="funfact-text">
                                    <?php if ( $counter_second_value = get_field( 'counter_second_value' ) ) : ?>
                                            <h4>
                                                <span class="counter"><?php echo esc_html( $counter_second_value ); ?></span>
                                            </h4>
                                        <?php endif; ?>
                                        <?php if ( $counter_second_text = get_field( 'counter_second_text' ) ) : ?>
                                            <p><?php echo esc_html( $counter_second_text ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="funfact-item items-two">
                                    <span class="completed"><i class="flaticon-manager Author"></i></span>
                                    <div class="funfact-text">
                                        <?php if ( $counter_third_value = get_field( 'counter_third_value' ) ) : ?>
                                            <h4>
                                                <span class="counter"><?php echo esc_html( $counter_third_value ); ?></span>
                                            </h4>
                                        <?php endif; ?>
                                        <?php if ( $counter_third_text = get_field( 'counter_third_text' ) ) : ?>
                                            <p><?php echo esc_html( $counter_third_text ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="funfact-item">
                                    <span class="completed"><i class="flaticon-winner"></i></span>
                                    <div class="funfact-text">
                                        <?php if ( $counter_fourth_value = get_field( 'counter_fourth_value' ) ) : ?>
                                            <h4>
                                                <span class="counter"><?php echo esc_html( $counter_fourth_value ); ?></span>
                                            </h4>
                                        <?php endif; ?>
                                        <?php if ( $counter_fourth_text = get_field( 'counter_fourth_text' ) ) : ?>
                                            <p><?php echo esc_html( $counter_fourth_text ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRightBig" data-wow-duration="1.30s">
                    <div class="images-area">
                    <?php
                    $section_image = get_field( 'section_image' );
                    if ( $section_image ) : ?>
                        <img src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" />
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Driving-strat -->
    <section class=" driving-area h2-driving-area">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-6 wow fadeInLeftBig" data-wow-duration="1s">
                    <div class="driving-text">
                        <?php if ( $learning_section_title = get_field( 'learning_section_title' ) ) : ?>
                            <h2><?php echo esc_html( $learning_section_title ); ?></h2>
                        <?php endif; ?>
                        <?php if ( $learning_section_description = get_field( 'learning_section_description' ) ) : ?>
                            <p><?php echo $learning_section_description; ?></p>
                        <?php endif; ?>
                        <div class="about-number">
                            <span><i class="fas fa-phone"></i></span>
                            <?php if ( $Learning_contact_no = get_field( 'Learning_contact_no' ) ) : ?>
                                <a href="tel:<?php echo esc_html( $Learning_contact_no ); ?>"><?php echo esc_html( $Learning_contact_no ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="driving-img">
                        <div class="bg-and-play-btn">
                            <?php
                            $learning_section_image = get_field( 'learning_section_image' );
                            if ( $learning_section_image ) : ?>
                                <img src="<?php echo esc_url( $learning_section_image['url'] ); ?>" alt="<?php echo esc_attr( $learning_section_image['alt'] ); ?>" />
                            <?php endif; ?>
                            <?php if ( $learning_section_video_url = get_field( 'learning_section_video_url' ) ) : ?>
                                <a class="popup-youtube" href="<?php echo esc_url( $learning_section_video_url ); ?>"><i class="fas fa-play"></i></a>
                                
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team-area -->
    <section class="h3-team-area">
        <div class="container">
            <div class="title text-center">
                <h6><< Our Teams >></h6>
                <h2>Meet Our Trainer</h2>
            </div>
            <div class="row">
                <?php
                $loop = new WP_Query(
                    array(
                        'post_type' => 'our_teams', // This is the name of your post type - change this as required,
                        'posts_per_page' => 6 // This is the amount of posts per page you want to show
                    )
                );
                while ( $loop->have_posts() ) : $loop->the_post();
                // The content you want to loop goes in here:
                ?>    
                <div class="col-lg-4 col-sm-6 wow fadeInUpBig" data-wow-duration="1s">
                    <div class="team-items">
                        <?php
                        if( has_post_thumbnail() ){?>
                        <div class="team-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php } ?>
                        <div class="team-id">
                            <h6><?php the_title(); ?></h6>
                            <?php if ( $desg = get_field('designation')): ?>
                                <p><?php echo $desg; ?></p>
                            <?php endif ?>
                            <ul class="team-links text-center">
                                <?php if (get_field('facebook')): ?>
                                    <li><a href="<?php the_field('facebook'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <?php endif ?>
                                <?php if (get_field('instagram')): ?>
                                    <li><a href="<?php the_field('instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endwhile;  wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php 
endwhile;
get_footer();