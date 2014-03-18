<?php
/**
 * The main template file
 *
 * @package alkimia
 * @since alkimia 1.1
 */

get_header();
?>
  <!-- two collumns wrapper -->
  <section class="column-group gutters">
    <!-- main content -->
    <?php get_template_part('loop'); ?>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </section>
<?php get_footer(); ?>
