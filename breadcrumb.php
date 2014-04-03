<?php
/**
 * Add support for Breadcrumb NavTx plugin
 *
 * @package alkimia
 * @since alkimia 1.1
 */
?>

<?php if(function_exists('bcn_display')): ?>
<nav class="ink-navigation half-bottom-space">
  <ul class="breadcrumbs rounded shadowed">
  <?php bcn_display_list(); ?>
  </ul>
</nav>
<?php endif; ?>
