<?php
/* The template for the search form */
?>
<form role="search" method="get" class="forms" action="<?php echo home_url( '/' ); ?>">
  <label class="forms-inline">
    <input type="search" class="input-search" autofocus="autofocus" value="" name="s" title="'<?php _e('Search for:'); ?>" />
    <button class="btn btn-round btn-small"><i class="ion-search"></i>&nbsp; <?php _e('Search'); ?></button>
  </label>
</form>
