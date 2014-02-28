<?php
/**
 * The main template file
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */

get_header();
?>
  <!-- two collumns wrapper -->
  <div class="column-group gutters">
    <!-- main content -->
    <?php get_template_part('loop'); ?>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>
