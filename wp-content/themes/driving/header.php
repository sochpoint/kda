<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package driving
 */

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from emran-khan.com/drivel/home-v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 12:41:57 GMT -->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    
    
    
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- header-top-area -->
    <header class="header-area">
        <div class="container">
            <div class="top-header">
                <ul class="left-item">
                    <?php if ( $contact_phone_no = get_field( 'contact_phone_no' ) ) : ?>
                        <li>
                            <span><i class="flaticon-telephone"></i></span>
                            <a href="tel:<?php echo esc_html( $contact_phone_no ); ?>"><?php echo esc_html( $contact_phone_no ); ?></a></li>
                    <?php endif; ?>
                    <?php if ( $contact_email = get_field( 'contact_email' ) ) : ?>
                        <li>
                            <span class="email"><i class="flaticon-email"></i></span>
                            <a class="maile" href="mailto:<?php echo esc_html( $contact_email ); ?>"><?php echo esc_html( $contact_email ); ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
                <ul class="right-item">
                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.googleplus.com/"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- header-menu-area -->
        <div class="header-menu main-header-area">
            <div class="container">
                <div class="menu-flax">
                    <div class="header-logo">
						<?php the_custom_logo(); ?>
                    </div>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container_class'=> 'menu-item',
							)
						);
					?>
                       
                    <div class="search-option">
                        
                        <!-- Search elament -->
                        <a class="theme-btn" href="<?php echo get_permalink('183') ?>">Book Now</a>
                        <!-- sidebar-menu -->
                        <ul class="sidebar-menu">
                            <li><a class="menu-oparetor " id="menu-opener"><i class="fal fa-ellipsis-v"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- sidebar_menu -->
    <div class="sidebar-menus">
        <div class="container">
            <div class="remove-one"><i class="fal fa-times"></i></div>
			<div class="header-menu-item">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>
			</div>
            <div class="search-option">
                <div class="menu-btn">
                    <a class="theme-btn" href="<?php echo get_permalink('183') ?>">Book Now</a>
                </div>
            </div>
        </div>
    </div>
<!-- #site-navigation -->

