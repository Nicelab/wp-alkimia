<?php
/* The template for the search form
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */
?>
<form role="search" method="get" class="forms" action="<?php echo home_url( '/' ); ?>">
  <label class="forms-inline">
    <input type="search" class="input-search" autofocus="autofocus" value="" name="s" title="'<?php _e('Search for:', 'wp-kube'); ?>" />
    <button class="btn btn-round btn-small"><i class="ion-search"></i>&nbsp; <?php _e('Search', 'wp-kube'); ?></button>
  </label>
</form>
