<?php
/* wp-kube functions and definitions.
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */

if (!isset($content_width))
    $content_width = 1000;

// Main setup
function wpkube_setup()
{
    // Setup translation directory
    load_theme_textdomain('wp-kube', get_template_directory().'/languages');
    // Adds RSS feed links to <head>
    add_theme_support('automatic-feed-links');
    // Enable header Nav menu
    register_nav_menus(array(
        'header-menu'   => __('Header Menu', 'wp-kube'),
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
    // Add editor style CSS
    add_editor_style('css/editor-style.css');
}
add_action('after_setup_theme', 'wpkube_setup');


// Register sidebars
function wpkube_widgets_init()
{
    // Right sidebar
    register_sidebar(array(
        'name'          => __('Right Sidebar', 'wp-kube'),
        'id'            => 'sidebar-1',
        'description'   => __('Main sidebar that appears on the right.', 'wp-kube'),
        'before_widget' => '<div class="right-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ));
    // Footer bar
    register_sidebar(array(
        'name'          => __('Footer', 'wp-kube'),
        'id'            => 'footerbar-1',
        'description'   => __('Main Footer that appears on the bottom.', 'wp-kube'),
        'before_widget' => '<li class="footer-widget">',
        'after_widget'  => '</li>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ));
}
if (function_exists('register_sidebar'))
{
    add_action( 'widgets_init', 'wpkube_widgets_init' );
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
