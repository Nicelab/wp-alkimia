<?php
/**
 * The main loop file
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */
?>

<section class="large-75">
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
  <nav class="ink-navigation">
    <ul class="pills rounded shadowed pull-left">
      <li class="previous"><?php previous_posts_link();?></li>
    </ul>
    <ul class="pills rounded shadowed pull-right">
      <li class="next"><?php next_posts_link();?></li>
    </ul>
  </nav>
</section>
