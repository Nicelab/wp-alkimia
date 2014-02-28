<?php
/**
 * The template used for displaying page content
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */

// pages do not display, date, authors, comments, categories and tags
// they are suposed to be used for corporate stuff

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php if (has_post_thumbnail()): ?>
      <div class="entry-thumbnail"><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>
    <h1><?php the_title(); ?></h1>
  </header>
  <section>
    <?php the_content(); ?>
  </section>
  <footer>
    <?php wp_link_pages(); ?>
    <?php if (is_user_logged_in()): ?>
        <i class="icon-pencil"></i>&nbsp;
    <?php edit_post_link(__('Edit', 'wp-kube'));
    endif;
    ?>
  </footer>
</article>
