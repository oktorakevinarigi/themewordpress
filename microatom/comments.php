<?php
/**
*Comment Template
**/
 ?>
 <div class="col-md-12">
   <?php if ('open' == $post->comment_status) : ?>

   <div id="respond">
     <h4>Comment :</h4>
     <?php cancel_comment_reply_link(); ?>

   <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
   <p>You must be <a href="<?php echo wp_login_url( get_prmalink() ); ?>">logged in</a> to post a comment.</p>
   <?php else : ?>

   <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

   <?php if ( $user_ID ) : ?>

   <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Logout &raquo;</a></p>

   <?php else : ?>

   <p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($reg) echo "arial-required='true'"; ?> />
   <label for="author">Name <?php if ($req) echo "(required)"; ?></label></p>

   <p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($reg) echo "arial-required='true'"; ?> />
   <label for="email">Email (will not be published) <?php if ($req) echo "(required)"; ?></label></p>

   <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
   <label for="url">Website</label></p>

   <?php endif; ?>

   <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

   <p><textarea name="comment" id="comment" tabindex="4"></textarea></p>

   <p>Some HTML is ok: <pre><?php echo allowed_tags(); ?></pre></p>

   <p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
   <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
   </p>
   <?php do_action('comment_form', $post->ID); comment_id_fields(); ?>

   </form>

   <?php endif; // If registration required and not logged in ?>

   <?php endif; // if you delete this the sky will fall on your head ?>
   </div>
 </div>
