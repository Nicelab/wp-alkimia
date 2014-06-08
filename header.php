<?php
/**
 * The template for displaying the header
 *
 * @package alkimia
 * @since alkimia 1.1
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<!-- main wrapper -->
<div id="main-wrapper" class="ink-grid">
  <!-- top header and menu -->
  <header id="header">
    <?php if (get_header_image()) : ?>
    <img src="<?php header_image(); ?>" class="logo" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo('name'); ?>" />
    <?php else : ?>
    <h1><?php bloginfo('name'); ?></h1>
    <?php endif; ?>
    <nav class="ink-navigation pull-right">
      <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => '', 'menu_class' => 'menu horizontal rounded shadowed white flat')); ?>
    </nav>
  </header>
