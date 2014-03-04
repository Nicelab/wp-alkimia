<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package wp-alkimia
 * @since wp-alkimia 1.1
 */
?>

<article>
  <header>
    <h1><?php _e('Nothing Found', 'wp-alkimia'); ?></h1>
  </header>
  <section>
    <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wp-alkimia'); ?></p>
    <?php get_search_form(); ?>
  </section>
</article>
