<?php
/**
 * The template for displaying all pages
 *
 * @package alkimia
 * @since alkimia 1.1
 */

get_header();
?>
  <!-- main wrapper -->
  <section class="column-group gutters">
    <!-- main content -->
    <main class="large-75 medium-70 small-100">
    <?php get_template_part('breadcrumb'); ?>
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            get_template_part('content', 'page');
            if (comments_open() || get_comments_number()):
                comments_template();
            endif;
        endwhile;
    endif;
    ?>
    </main>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </section>
<?php get_footer(); ?>
