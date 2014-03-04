<?php
/**
 * The Template for displaying all single posts
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */

get_header();
?>
  <!-- main section -->
  <section class="column-group gutters">
    <!-- main content -->
    <article class="large-75">
    <?php get_template_part('breadcrumb'); ?>
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            get_template_part('content', 'single');
            ?>
            <nav class="ink-navigation prev-next">
              <ul class="pills rounded flat shadowed pull-left">
                <li class="previous"><?php previous_post_link('%link', '&laquo; %title');?></li>
              </ul>
              <ul class="pills rounded flat shadowed pull-right">
                <li class="next"><?php next_post_link('%link', '%title &raquo;');?></li>
              </ul>
            </nav>
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
