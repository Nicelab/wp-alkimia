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
  <p class="no-comments"><?php _e('Comments are closed.', 'wp-kube'); ?></p>
</div>
<?php endif; ?>

<?php endif; // have_comments ?>
  <!-- comments form -->
  <?php
  ob_start();
  comment_form(array(
      'logged_in_as' => '',
      'comment_notes_before' => '',
      'comment_notes_after' => '<p class="comment-notes-after">'. __('Your email address will not be published.', 'wp-kube') .'</p>',
  ));
  //alter the form class and submit button
  $form = ob_get_clean();
  $form = str_replace('class="comment-form"','class="forms forms-columnar"', $form);
  $form = str_replace('id="submit"','class="btn"', $form);
  echo $form;
?>
