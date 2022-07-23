<?php
/**
 * driving functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package driving
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function driving_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on driving, use a find and replace
        * to change 'driving' to the name of your theme in all the template files.
        */
    load_theme_textdomain('driving', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'driving'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'driving_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'driving_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function driving_content_width()
{
    $GLOBALS['content_width'] = apply_filters('driving_content_width', 640);
}

add_action('after_setup_theme', 'driving_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function driving_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'driving'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'driving'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'driving_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function driving_scripts()
{
    wp_enqueue_style('driving-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('driving-style', 'rtl', 'replace');

    wp_enqueue_style('magnific-css', get_template_directory_uri() . '/vendors/magnific-popup/magnific-popup.min.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('flaticon-css', get_template_directory_uri() . '/vendors/flaticon/flaticon.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('owl-css', get_template_directory_uri() . '/vendors/OwlCarousel2-2.3.4/owl.carousel.min.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/style.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('simpleLightbox-css', get_template_directory_uri() . '/vendors/lightbox/simpleLightbox.css', array(), wp_get_theme()->get('Version'), 'all');

    wp_enqueue_script('js-jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('js-popper', get_template_directory_uri() . '/js/popper.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('js-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('js-wow', get_template_directory_uri() . '/vendors/wow-js/wow.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('js-waypoints', get_template_directory_uri() . '/vendors/counterup/jquery.waypoints.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('js-counterup', get_template_directory_uri() . '/vendors/counterup/jquery.counterup.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('js-carousel', get_template_directory_uri() . '/vendors/OwlCarousel2-2.3.4/owl.carousel.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('js-magnific', get_template_directory_uri() . '/vendors/magnific-popup/jquery.magnific-popup.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('js-simpleLightbox', get_template_directory_uri() . '/vendors/lightbox/simpleLightbox.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('js-theme', get_template_directory_uri() . '/js/theme.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'driving_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

add_action('wpcf7_init', 'custom_add_form_tag_customlist');

function custom_add_form_tag_customlist()
{
    wpcf7_add_form_tag(array('customlist', 'customlist*'),
        'custom_customlist_form_tag_handler', true);
}

function custom_customlist_form_tag_handler($tag)
{

    $tag = new WPCF7_FormTag($tag);

    if (empty($tag->name)) {
        return '';
    }

    $customlist = '';

    $query = new WP_Query(array(
        'post_type' => 'our-course',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
    ));

    while ($query->have_posts()) {
        $query->the_post();
        $post_title = get_the_title();
        $customlist .= sprintf('<option value="%1$s">%2$s</option>',
            esc_html($post_title), esc_html($post_title));
    }

    wp_reset_query();

    $customlist = sprintf(
        '<select name="%1$s" id="%2$s">%3$s</select>', $tag->name,
        $tag->name . '-options',
        $customlist);

    return $customlist;
}
