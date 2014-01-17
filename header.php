<?php
/* The template for displaying the header */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(); ?></title>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
  <![endif]-->
  <?php wp_head(); // must be before stylesheet to overide CSS from plugins ?>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
</head>

<body itemscope itemtype="http://schema.org/WebPage">
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
