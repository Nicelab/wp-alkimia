<?php
/**
 * alkimia functions and definitions.
 *
 * @package alkimia
 * @since alkimia 1.1
 */


if (!isset($content_width))
    $content_width = 1200;

// Main setup
function alkimia_setup()
{
    // Setup translation directory
    load_theme_textdomain('alkimia', get_template_directory().'/languages');
    // Adds RSS feed links to <head>
    add_theme_support('automatic-feed-links');
    // Enable header Nav menu
    register_nav_menus(array(
        'primary'   => __('Top primary menu', 'alkimia'),
    ));
    // Enable html5 forms
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list',
    ));
    // Enable custom header
    add_theme_support('custom-header', array(
        'height'      => 80,
        'header-text' => false,
        'uploads'     => true,
    ));
    // Enable custom background
    add_theme_support('custom-background', array(
        'default-color' => '',
        'default-image' => '',
    ));
    // Enable Post Thumbnail
    add_theme_support('post-thumbnails');
    // declare WooCommerce support
    add_theme_support('woocommerce');
    // Enable backend editor style
    add_editor_style('css/editor-style.css');
}
add_action('after_setup_theme', 'alkimia_setup');


// Enqueue scripts and styles for the front end
function alkimia_scripts_styles()
{
    // Adds JavaScript to pages with the comment form to support sites with threaded comments
    if (is_singular() && comments_open() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply');

    // Add Ink framework JS helpers
    //wp_enqueue_script('ink-core-js', get_template_directory_uri().'/js/ink.min.js.js', array(), '2.2.1');
    //wp_enqueue_script('ink-carrousel-js', get_template_directory_uri().'/js/ink.carousel.js', array(), '2.2.1');
    //wp_enqueue_script('ink-gallery-js', get_template_directory_uri().'/js/ink.gallery.js', array(), '2.2.1');
    //wp_enqueue_script('ink-autoload-js', get_template_directory_uri().'/js/ink.autoload.js', array(), '2.2.1');

    // Add Ink framework minified CSS
    wp_enqueue_style('ink-min', get_template_directory_uri().'/css/ink-min.css', array(), '2.2.1');
    // Add our custom CSS for the Opening Hours plugin (can be changed by child themes)
    wp_enqueue_style('alkimia-opening-hours-frontend', get_stylesheet_directory_uri().'/css/opening-hours-frontend.css', array(), '1.1.0');
    // Loads our main stylesheet.
    wp_enqueue_style('alkimia', get_stylesheet_uri(), array(), '1.1.0');
}
add_action('wp_enqueue_scripts', 'alkimia_scripts_styles');


// Register sidebars
function alkimia_widgets_init()
{
    // Right sidebar
    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'alkimia'),
        'id'            => 'sidebar-1',
        'description'   => __('Main sidebar that appears on the right.', 'alkimia'),
        'before_widget' => '<div class="right-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ));
    // Home page
    register_sidebar(array(
        'name'          => __('Home Page Widget Area', 'alkimia'),
        'id'            => 'sidebar-2',
        'description'   => __('Appears only on the home page, above articles.', 'alkimia'),
        'before_widget' => '<div class="homepage-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ));
    // Footer
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'alkimia'),
        'id'            => 'sidebar-3',
        'description'   => __('Appears in the footer section of the site.', 'alkimia'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ));

}
if (function_exists('register_sidebar'))
{
    add_action('widgets_init', 'alkimia_widgets_init');
}

// remove  the #more anchor
function alkimia_remove_more_link_scroll($link)
{
    $link = preg_replace('|#more-[0-9]+|', '', $link);
    return $link;
}
add_filter('the_content_more_link', 'alkimia_remove_more_link_scroll');


// Add a "more..." link to the_excerpt
function alkimia_new_excerpt_more($more)
{
    global $post;
    return '<p><a href="'.get_permalink($post->ID).'">'.'(more&hellip;)'.'</a></p>';
}
add_filter('excerpt_more', 'alkimia_new_excerpt_more');

// Remove the default gallery style
add_filter('use_default_gallery_style', '__return_false');

?>
