<?php
/* The template for displaying all pages */

get_header();
?>
  <!-- main section -->
  <section class="units-row">
    <!-- main content -->
    <article class="unit-75">
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
    </article>

    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>

  </section>

<?php get_footer(); ?>
