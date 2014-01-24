<?php
/* The Template for displaying all single posts
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */

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
            get_template_part('content', 'single');
            ?>
            <ul class="pagination">
              <li class="pagination-older"><?php previous_post_link('%link', '&laquo; %title');?></li>
              <li class="pagination-newest pagination-pull"><?php next_post_link('%link', '%title &raquo;');?></li>
            </ul>
            <?php
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
