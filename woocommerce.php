<?php
/**
 * The template for displaying WooCommerce pages
 *
 * @package alkimia
 * @since alkimia 1.1.2
 */

get_header();
?>
  <!-- main wrapper -->
  <section class="column-group gutters">
    <!-- main content -->
    <main class="large-75 small-100">
    <?php get_template_part('breadcrumb'); ?>
    <?php woocommerce_content(); ?>
    </main>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </section>
<?php get_footer(); ?>
