<?php
/* The template used for displaying single post content */
?>
<header>
  <h1><?php the_title(); ?></h1>
  <div>
    <i class="icon ion-android-clock"></i>&nbsp;<?php the_time(get_option('date_format')); ?>&nbsp;&nbsp;
    <i class="icon ion-person"></i>&nbsp;<?php the_author_posts_link(); ?>&nbsp;&nbsp;
    <i class="icon ion-folder"></i>&nbsp;<?php
    $category = get_the_category();
    echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; ?>
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
