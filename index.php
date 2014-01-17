<?php
/* The main template file */

get_header();
?>
  <!-- main section -->
  <section class="units-row">

    <!-- main content -->
    <?php get_template_part('loop'); ?>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>

  </section>

<?php get_footer(); ?>
