<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package alkimia
 * @since alkimia 1.1
 */
?>

<article id="none">
  <header>
    <h1><?php _e('Nothing Found', 'alkimia'); ?></h1>
  </header>
  <section>
    <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'alkimia'); ?></p>
    <div class="large-45 push-center vertical-space">
    <?php get_search_form(); ?>
    </div>
  </section>
</article>
