<?php
/* The template used for displaying single post content
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php if (has_post_thumbnail()): ?>
      <div class="entry-thumbnail"><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>
    <h1><?php the_title(); ?></h1>
    <div>
      <i class="icon ion-android-clock"></i>&nbsp;<?php the_time(get_option('date_format')); ?>&nbsp;&nbsp;
      <i class="icon ion-person"></i>&nbsp;<?php the_author_posts_link(); ?>&nbsp;&nbsp;
      <?php if (!post_password_required() && (comments_open() || get_comments_number())): ?>
        <i class="icon ion-chatbox"></i>&nbsp;
        <?php comments_popup_link(__('Leave a comment', 'wp-kube'), __('1 Comment', 'wp-kube'), __('% Comments', 'wp-kube'));
      endif; ?>
    </div>
    <div>
      <i class="icon ion-folder"></i>&nbsp;
      <?php the_category(', '); ?>
      <?php // display only the fist category
          // $category = get_the_category();
          // echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
      ?>&nbsp;&nbsp;
      <?php if (has_tag()): ?>
        <i class="icon ion-pricetag"></i>&nbsp;<?php the_tags(''); ?>
      <?php endif; ?>
    </div>
  </header>
  <section>
    <?php the_content(); ?>
  </section>
  <footer>
    <?php
    wp_link_pages();
    if (is_user_logged_in()): ?>
        &nbsp;&nbsp;<i class="icon ion-edit"></i>&nbsp;
    <?php edit_post_link(__('Edit', 'wp-kube'));
    endif;
    ?>
  </footer>
</article>
