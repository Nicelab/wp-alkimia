<?php
/* The template for for displaying comments
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */

if (post_password_required()):
    return;
endif;

if (have_comments()): ?>
<!-- comments -->
<div id="comments">
  <h3><?php _e('Comments', 'wp-kube') ?></h3>

  <ol>
  <?php
  $list_args = array (
      'avatar_size' => 64,
      'format' => 'html5',
  );
  wp_list_comments($list_args);
  ?>
  </ol>

  <?php if (! comments_open() && get_comments_number()): ?>
  <p class="no-comments"><?php _e('Comments are closed.', 'wp-kube'); ?></p>
  <?php endif; ?>
</div>

<?php endif; // have_comments ?>
  <!-- comments form -->
  <?php
  $comment_args = array(
      'logged_in_as' => '',
      'comment_notes_before' => '',
      'comment_notes_after' => '<p class="comment-notes-after">'. __('Your email address will not be published.', 'wp-kube') .'</p>',
  );
  ob_start();
  comment_form($comment_args);
  //alter the form class and submit button
  $form = ob_get_clean();
  $form = str_replace('class="comment-form"','class="forms forms-columnar"', $form);
  $form = str_replace('id="submit"','class="btn"', $form);
  echo $form;
?>
