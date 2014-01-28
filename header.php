<?php
/* The template for displaying the header
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(); ?></title>
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
  <![endif]-->
  <?php wp_head(); // must be before stylesheets to overide CSS from plugins ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
  <!-- top header and menu -->
  <header id="header">
    <?php if (get_header_image()) : ?>
    <img src="<?php header_image(); ?>" class="header-image" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo('name'); ?>" />
    <?php else : ?>
    <h1><?php bloginfo('name'); ?></h1>
    <?php endif; ?>
    <nav class="nav-g">
      <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => '')); ?>
    </nav>
  </header>
