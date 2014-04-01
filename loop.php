<?php
/**
 * The main loop file
 *
 * @package alkimia
 * @since alkimia 1.1
 */
?>

<main class="large-75 medium-70 small-100">
  <?php get_template_part('breadcrumb'); ?>
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
  <nav class="ink-navigation prev-next">
    <ul class="pills rounded shadowed flat pull-left">
      <li class="previous"><?php previous_posts_link();?></li>
    </ul>
    <ul class="pills rounded shadowed flat pull-right">
      <li class="next"><?php next_posts_link();?></li>
    </ul>
  </nav>
</main>
