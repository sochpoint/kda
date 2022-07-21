<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package driving
 */

get_header();
?>

<div class="error-area">
    <div class="container text-center">
        <h1 class=" wow fadeInDown"  data-wow-duration="1s">4<span>0</span>4</h1>
        <h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'driving' ); ?></h2>
        <p>Sorry, but the page you are looking for does not existing</p>
        <a class="theme-btn" href="<?php echo get_home_url(); ?>">Go To Home Page</a>
    </div>
</div>
<?php
get_footer();
