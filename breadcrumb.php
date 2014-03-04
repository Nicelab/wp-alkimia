<?php
/**
 * Add support for Breadcrumb NavTx plugin
 *
 * @package wp-alkimia
 * @since wp-alkimia 1.1
 */
?>

<nav class="ink-navigation">
  <ul class="breadcrumbs rounded shadowed">
  <?php
  if(function_exists('bcn_display')):
      bcn_display_list();
  endif;
  ?>
  </ul>
</nav>

