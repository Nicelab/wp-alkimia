<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package alkimia
 * @since alkimia 1.1
 */

get_header(); ?>
  <!-- main section -->
  <section class="column-group gutters">
    <!-- main content -->
    <main class="large-75 small-100">
      <?php get_template_part('breadcrumb'); ?>
      <article id="404">
        <header>
          <h2><?php _e('Not Found', 'alkimia'); ?></h2>
        </header>
        <section>
          <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'alkimia'); ?></p>
          <div class="large-45 push-center vertical-space">
          <?php get_search_form(); ?>
          </div>
        </section>
      </article>
    </main>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </section>
<?php get_footer(); ?>
