<?php
/**
 * The default template for displaying content
 *
 * @package alkimia
 * @since alkimia 1.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php if (has_post_thumbnail()): ?>
      <div class="entry-thumbnail"><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>
    <?php the_title('<h2 class="entry-title"><a href="'.esc_url(get_permalink()).'" rel="bookmark">', '</a></h2>'); ?>
    <div class="entry-meta">
      <i class="icon-calendar"></i>&nbsp;<a href="<?php the_permalink(); ?>"><span class="date updated"><?php the_time(get_option('date_format')); ?></span></a>&nbsp;&nbsp;
      <i class="icon-user"></i>&nbsp;<span class="vcard author"><span class="fn"><?php the_author_posts_link(); ?></span></span>&nbsp;&nbsp;
      <?php if (!post_password_required() && (comments_open() || get_comments_number())): ?>
        <i class="icon-comment"></i>&nbsp;
        <?php comments_popup_link(__('Leave a comment', 'alkimia'), __('1 Comment', 'alkimia'), __('% Comments', 'alkimia'));
      endif; ?>
    </div>
    <div class="entry-meta">
      <i class="icon-sitemap"></i>&nbsp;<?php the_category(', '); ?>
      &nbsp;&nbsp;
      <?php if (has_tag()): ?>
        <i class="icon-tag"></i>&nbsp;<?php the_tags(''); ?>
      <?php endif; ?>
    </div>
  </header>
  <section>
    <?php the_content();?>
  </section>
  <footer>
    <?php
    wp_link_pages();
    if (is_user_logged_in()) : ?>
        <i class="icon-pencil"></i>&nbsp;
    <?php edit_post_link(__('Edit', 'alkimia'));
    endif;
    ?>
  </footer>
</article>
