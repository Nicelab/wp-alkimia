<?php
/**
 * wp-alkimia functions and definitions.
 *
 * @package wp-alkimia
 * @since wp-alkimia 1.1
 */

if (!isset($content_width))
    $content_width = 1000;

// Main setup
function wpkube_setup()
{
    // Setup translation directory
    load_theme_textdomain('wp-alkimia', get_template_directory().'/languages');
    // Adds RSS feed links to <head>
    add_theme_support('automatic-feed-links');
    // Enable header Nav menu
    register_nav_menus(array(
        'primary'   => __('Top primary menu', 'wp-alkimia'),
    ));
    // Enable html5 forms
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list',
    ));
    // Enable custom header
    add_theme_support('custom-header', array(
        'height'      => 100,
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
    // Enable backend editor style
    add_editor_style('css/editor-style.css');
}
add_action('after_setup_theme', 'wpkube_setup');


// Enqueue scripts and styles for the front end
function wpkube_scripts_styles()
{
    // Adds JavaScript to pages with the comment form to support sites with threaded comments
    if (is_singular() && comments_open() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply');

    // Add Ink framework JS helpers
    //wp_enqueue_script('kube-buttons-js', get_template_directory_uri().'/js/kube.buttons.js', array('jquery'), '1.0.1');
    //wp_enqueue_script('kube-tabs-js', get_template_directory_uri().'/js/kube.tabs.js', array('jquery'), '3.0.0');

    // Add Ink framework minified CSS
    wp_enqueue_style('ink-min', get_template_directory_uri().'/css/ink-min.css', array(), '2.2.1');
    // Add our custom CSS for the Opening Hours plugin (can be changed by child themes)
    wp_enqueue_style('opening-hours-frontend', get_stylesheet_directory_uri().'/css/opening-hours-frontend.css', array(), null);
    // Loads our main stylesheet.
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'wpkube_scripts_styles');


// Register sidebars
function wpkube_widgets_init()
{
    // Right sidebar
    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'wp-alkimia'),
        'id'            => 'sidebar-1',
        'description'   => __('Main sidebar that appears on the right.', 'wp-alkimia'),
        'before_widget' => '<div class="right-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ));
    // Footer bar
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'wp-alkimia'),
        'id'            => 'footerbar-1',
        'description'   => __('Appears in the footer section of the site.', 'wp-alkimia'),
        'before_widget' => '<li class="footer-widget large-25">',
        'after_widget'  => '</li>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ));
}
if (function_exists('register_sidebar'))
{
    add_action('widgets_init', 'wpkube_widgets_init');
}

// remove  the #more anchor
function remove_more_link_scroll($link)
{
    $link = preg_replace('|#more-[0-9]+|', '', $link);
    return $link;
}
add_filter('the_content_more_link', 'remove_more_link_scroll');


// Add a "more..." link to the_excerpt
function new_excerpt_more($more)
{
    global $post;
    return '<p><a href="'.get_permalink($post->ID).'">'.'(more&hellip;)'.'</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>
