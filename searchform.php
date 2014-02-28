<?php
/**
 * The template for the search form
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */
?>

<form role="search" method="get"  class="ink-form" action="<?php echo home_url( '/' ); ?>">
  <fieldset class="control-group">
    <label class="control append-button">
      <span><input type="search" value="" name="s" title="'<?php _e('Search for:', 'wp-kube'); ?>" /></span>
      <button class="ink-button flat">&nbsp;<i class="icon-search"></i>&nbsp;<?php _e('Search', 'wp-kube'); ?></button>
    </label>
  </fieldset>
</form>
