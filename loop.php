<?php
/**
 * The main loop file
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */
?>

<section class="unit-75">
  <?php
  if (have_posts()):
      $first_post = true;
      while (have_posts()):
          the_post();
          get_template_part('content', get_post_format());
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
