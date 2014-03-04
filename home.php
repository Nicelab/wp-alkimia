<?php
/**
 * The template for displaying home page
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */

// make use of <--more--> tag instead of the_excerpt, fully display the more recent post

get_header();
?>
  <!-- two collumns wrapper -->
  <div class="column-group gutters">
    <!-- main content -->
    <section class="large-75">
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
      <nav class="ink-navigation prev-next">
        <ul class="pills rounded flat shadowed pull-left">
          <li class="previous"><?php previous_posts_link();?></li>
        </ul>
        <ul class="pills rounded flat shadowed pull-right">
          <li class="next"><?php next_posts_link();?></li>
        </ul>
      </nav>
    </section>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>
