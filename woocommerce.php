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
  <div class="column-group gutters">
    <!-- main content -->
    <section class="large-75">
    <?php get_template_part('breadcrumb'); ?>
    <?php woocommerce_content(); ?>
    </section>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>
