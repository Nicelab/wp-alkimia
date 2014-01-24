<?php
/* The default template for displaying content
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php the_title('<h1><a href="'.esc_url(get_permalink()).'" rel="bookmark">', '</a></h1>'); ?>
    <div>
      <i class="icon ion-android-clock"></i>&nbsp;<?php the_time(get_option('date_format')); ?>&nbsp;&nbsp;
      <i class="icon ion-person"></i>&nbsp;<?php the_author_posts_link(); ?>&nbsp;&nbsp;
      <i class="icon ion-folder"></i>&nbsp;<?php
      $category = get_the_category();
      echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; ?>
    </div>
  </header>
  <section>
    <?php the_content();?>
  </section>
  <footer>
    <?php wp_link_pages(); ?>
    <?php
    if (!post_password_required() && (comments_open() || get_comments_number())): ?>
      <i class="icon ion-chatbox"></i>&nbsp;
      <?php comments_popup_link(__('Leave a comment', 'wp-kube'), __('1 Comment', 'wp-kube'), __('% Comments', 'wp-kube'));
    endif;
    if (is_user_logged_in()) : ?>
        &nbsp;&nbsp;<i class="icon ion-edit"></i>&nbsp;
    <?php edit_post_link(__('Edit', 'wp-kube'));
    endif;
    ?>
  </footer>
</article>
