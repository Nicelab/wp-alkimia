<?php
/**
 * The template for for displaying comments
 *
 * @package alkimia
 * @since alkimia 1.1
 */

if (post_password_required()):
    return;
endif;

if (have_comments()): ?>
<!-- comments -->
<div id="comments">
  <h3><?php _e('Comments', 'alkimia') ?></h3>

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
  <p class="no-comments"><?php _e('Comments are closed.', 'alkimia'); ?></p>
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
                         __('Name', 'alkimia').' <span class="required">*</span></label>'.
                         '<div class="control large-80"><input type="text" id="author" name="author" aria-required="true"></div></fieldset>',
          'email'     => '<fieldset class="control-group column-group quarter-gutters"><label class="large-20 content-right" for="email">'.
                         __('Email', 'alkimia').' <span class="required">*</span></label>'.
                         '<div class="control large-80"><input type="email" id="email" name="email" aria-required="true">'.
                         '<p class="tip">'.__('Your email address will not be published.', 'alkimia').'</p></div></fieldset>',
          'url'       => '<fieldset class="control-group column-group quarter-gutters"><label class="large-20 content-right" for="url">'.
                         __('Website', 'alkimia').'</label>'.
                         '<div class="control large-80"><input type="url" id="url" name="url"></div></fieldset>',
      )),
      'comment_field' => '<fieldset class="control-group column-group quarter-gutters"><label class="large-20 content-right" for="comment">'.
                         __('Comment', 'alkimia').' <span class="required">*</span></label>'.
                         '<div class="control large-80"><textarea id="comment" name="comment" rows="8" aria-required="true"></textarea>'.
                         '<p class="tip">'.sprintf(
                             __('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s', 'alkimia'),
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
