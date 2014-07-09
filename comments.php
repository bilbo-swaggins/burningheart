<!-- Credit: Mike Sinkula www.github.com/msinkula -->
<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
?>

<!-- You can start editing here. -->
<div id="post-commments">
<?php if ($comments) : ?>
	<h2>Comments</h2>

	<div class="commentlist">
	<?php foreach ($comments as $comment) : ?>

		<div class="comment-wrap" id="comment-<?php comment_ID() ?>">
			<div class="comment-meta">

        <div class="cgravatar"> <?php echo show_avatar( $comment, 300 ); ?> </div>

				<div class="comment-author">
				<?php comment_author_link() ?><br/>
          <?php comment_date('M j, Y') ?>
        </div>

                </div>
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>
      <div class="comment-text">
			<?php comment_text() ?>
      </div>
    </div>

	<?php
		/* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = 'alt2';
		else $oddcomment = 'alt';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</div>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h3>Reply:</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

<?php else : ?>
<p>Don't forget to get your <a href="http://en.gravatar.com/" target="_blank">Globally Recognized Avatar</a>.</p>
<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" />
<label for="author"><strong>Name</strong> <?php if ($req) echo "(required)"; ?></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" />
<label for="email"><strong>Mail</strong> <em>(will not be published)</em> <?php if ($req) echo "(required)"; ?></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" />
<label for="url"><strong>Website</strong></label></p>

<?php endif; ?>

<p><textarea name="comment" id="comment" cols="40" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>


<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

</div>
