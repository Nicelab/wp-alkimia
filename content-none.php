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
    <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wp-kube'); ?></p>
    <?php get_search_form(); ?>
  </section>
</article>
