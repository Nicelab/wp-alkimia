<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */

get_header(); ?>
  <!-- main section -->
  <section class="units-row">
    <!-- main content -->
    <article class="unit-75">
      <?php get_template_part('breadcrumb'); ?>
      <header>
        <h1><?php _e('Not Found', 'wp-kube'); ?></h1>
      </header>
      <section>
        <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'wp-kube'); ?></p>
        <div class="unit-row">
          <div class="unit-centered unit-60">
          <?php get_search_form(); ?>
          </div>
        </div>
      </section>
    </article>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </section>
<?php get_footer(); ?>
