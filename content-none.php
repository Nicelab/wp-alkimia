<?php
/* The template for displaying a "No posts found" message
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */
?>
<article>
  <header>
    <h1><?php _e('Nothing Found', 'wp-kube'); ?></h1>
  </header>
  <section>
    <p><?php _e('Apologies, but no results were found. Perhaps searching will help find a related post.', 'wp-kube'); ?></p>
    <?php get_search_form(); ?>
  </section>
</article>
