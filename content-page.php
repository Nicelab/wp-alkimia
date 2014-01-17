<?php
/* The template used for displaying page content */

the_post_thumbnail();
?>
<header>
  <h1><?php the_title(); ?></h1>
  <div>
  </div>
</header>
<section>
  <?php the_content(); ?>
</section>
<footer>
  <?php if (is_user_logged_in()): ?>
      &nbsp;&nbsp;<i class="icon ion-edit"></i>&nbsp;
  <?php edit_post_link(__('Edit'));
  endif;
  ?>
</footer>
