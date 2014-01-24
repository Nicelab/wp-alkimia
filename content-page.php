<?php
/* The template used for displaying page content
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <h1><?php the_title(); ?></h1>
    <div>
    </div>
  </header>
  <section>
    <?php the_content(); ?>
  </section>
  <footer>
    <?php wp_link_pages(); ?>
    <?php
    if (!post_password_required() && (comments_open() || get_comments_number())): ?>
      <i class="icon ion-chatbox"></i>&nbsp;
      <?php comments_popup_link(__('Leave a comment', 'wp-kube'), __('1 Comment', 'wp-kube'), __('% Comments', 'wp-kube'));
    endif;
    ?>
    <?php if (is_user_logged_in()): ?>
        &nbsp;&nbsp;<i class="icon ion-edit"></i>&nbsp;
    <?php edit_post_link(__('Edit', 'wp-kube'));
    endif;
    ?>
  </footer>
</article>
