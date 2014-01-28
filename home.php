<?php
/* The main template file
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */

// make use of <--more--> tag instead of the_excerpt, fully display the more recent post

get_header();
?>
  <!-- main wrapper -->
  <div class="units-row">
    <!-- main content -->
    <section class="unit-75">
      <?php
      if (have_posts()):
          $first_post = true;
          while (have_posts()):
              if ($first_post):
                  $first_post = false;
                  global $more;
                  $more = 1;
              else:
                  global $more;
                  $more = 0;
              endif;
              the_post();
              get_template_part('content', 'home');
          endwhile;
      else:
          get_template_part('content', 'none');
      endif;
      ?>
      <ul class="pagination">
        <li class="pagination-older"><?php previous_posts_link();?></li>
        <li class="pagination-newest pagination-pull"><?php next_posts_link();?></li>
      </ul>
    </section>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>
