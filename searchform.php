<?php
/**
 * The template for the search form
 *
 * @package alkimia
 * @since alkimia 1.1
 */
?>

<form role="search" method="get"  class="ink-form" action="<?php echo home_url( '/' ); ?>">
  <fieldset class="control-group">
    <label class="control append-button">
      <span><input type="search" value="" name="s" title="'<?php _e('Search for:', 'alkimia'); ?>" /></span>
      <button class="ink-button flat">&nbsp;<i class="icon-search"></i>&nbsp;<?php _e('Search', 'alkimia'); ?></button>
    </label>
  </fieldset>
</form>
