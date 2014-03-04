<?php
/**
 * The template for for displaying comments
 *
 * @package wp-alkimia
 * @since wp-alkimia 1.1
 */

if (post_password_required()):
    return;
endif;

if (have_comments()): ?>
<!-- comments -->
<div id="comments">
  <h3><?php _e('Comments', 'wp-alkimia') ?></h3>

  <ol>
  <?php
  wp_list_comments(array(
      'avatar_size' => 64,
      'format' => 'html5',
  ));
  ?>
  </ol>

  <?php paginate_comments_links(); ?>
</div>

<?php if (!comments_open() && get_comments_number()): ?>
<div id="closed" >
  <p class="no-comments"><?php _e('Comments are closed.', 'wp-alkimia'); ?></p>
</div>
<?php endif; ?>

<?php endif; // have_comments ?>
  <!-- comments form -->
  <?php
  ob_start();
  comment_form(array(
      'logged_in_as'  => '',
      'comment_notes_before' => '',
      'fields'        => apply_filters('comment_form_default_fields', array(
          'author'    => '<fieldset class="control-group column-group quarter-gutters"><label class="large-20 content-right" for="author">'.
                         __('Name', 'wp-alkimia').' <span class="required">*</span></label>'.
                         '<div class="control large-80"><input type="text" id="author" name="author" aria-required="true"></div></fieldset>',
          'email'     => '<fieldset class="control-group column-group quarter-gutters"><label class="large-20 content-right" for="email">'.
                         __('Email', 'wp-alkimia').' <span class="required">*</span></label>'.
                         '<div class="control large-80"><input type="email" id="email" name="email" aria-required="true">'.
                         '<p class="tip">'.__('Your email address will not be published.', 'wp-alkimia').'</p></div></fieldset>',
          'url'       => '<fieldset class="control-group column-group quarter-gutters"><label class="large-20 content-right" for="url">'.
                         __('Website', 'wp-alkimia').'</label>'.
                         '<div class="control large-80"><input type="url" id="url" name="url"></div></fieldset>',
      )),
      'comment_field' => '<fieldset class="control-group column-group quarter-gutters"><label class="large-20 content-right" for="comment">'.
                         __('Comment', 'wp-alkimia').' <span class="required">*</span></label>'.
                         '<div class="control large-80"><textarea id="comment" name="comment" rows="8" aria-required="true"></textarea>'.
                         '<p class="tip">'.sprintf(
                             __('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s', 'wp-alkimia'),
                             ' <code>'.allowed_tags().'</code>'
                         ).'</p></div></fieldset>',
      'comment_notes_after' => '',
  ));
  // alter the form styles
  $form = ob_get_clean();
  $form = str_replace('class="comment-form"','class="ink-form"', $form);
  $form = str_replace('id="submit"','class="ink-button flat pull-right"', $form);
  echo $form;
?>
