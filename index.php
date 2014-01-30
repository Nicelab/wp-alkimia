<?php
/**
 * The main template file
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */

get_header();
?>
  <!-- main wrapper -->
  <div class="units-row">
    <!-- main content -->
    <?php get_template_part('loop'); ?>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>
