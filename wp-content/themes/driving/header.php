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
                    <li>
                        <span><i class="flaticon-telephone"></i></span>
                        <a href="tel:+123-4562-4256">+123-4562-4256</a>
                    </li>
                    <li>
                        <span class="email"><i class="flaticon-email"></i></span>
                        <a class="maile" href="mailto:larning.driving@example.com">larning.driving@example.com</a>
                    </li>
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
                        <a class="theme-btn" href="courses.html">Book Now</a>
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
                <ul>
                    <li><a data-bs-toggle="collapse" href="#collapseExample">Home +</a>
                        <ul  class="collapse" id="collapseExample">
                            <li><a href="index-2.html">Home v1</a></li>
                            <li><a href="home-v2.html">Home v2</a></li>
                            <li><a href="home-v3.html">Home v3</a></li>
                        </ul>
                    </li>
                    <li><a href="about-us.html">About Us</a></li> 
                    <li><a data-bs-toggle="collapse" href="#Pages">Pages +</a>
                        <ul class="collapse" id="Pages">
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a class="border-0" href="error.html">Error</a></li>
                        </ul>
                    </li>
                    <li><a data-bs-toggle="collapse" href="#coll">Courses +</a>
                        <ul  class="collapse" id="coll">
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="courses-details.html">Courses Details</a></li>
                        </ul>
                    </li>
                    <li><a data-bs-toggle="collapse" href="#Example">News +</a>
                        <ul  class="collapse" id="Example">
                            <li><a href="news.html">News</a></li>
                            <li><a href="news-details.html">News details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="search-option">
                <div class="menu-btn">
                    <a class="theme-btn" href="courses.html">Admission Course</a>
                </div>
            </div>
        </div>
    </div>
<!-- #site-navigation -->

