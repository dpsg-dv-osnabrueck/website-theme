<?php echo get_the_title(); ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<input type="text" name="author" class="comments_input" id="commentfield_author" value="<?php echo $comment_author; ?>" placeholder="Dein Name"/><br>
		<input type="text" name="email" class="comments_input" id="commentfield_email" value="<?php echo $comment_author_email; ?>" tabindex="2" placeholder="Deine  E-Mail Adresse"/>
		<textarea name="comment" class="comments_textarea" id="commentfield_comment" tabindex="3" placeholder="Deine Meinung"></textarea>
		<input name="submit" class="comments_input" type="submit" id="submit" tabindex="5" value="Senden" />
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		<?php do_action('comment_form', $post->ID); ?>
	</form>


<?php foreach ($comments as $comment) : ?>
	<div id="<?php comment_ID() ?>">
	<?php comment_author(); ?>
	<?php comment_date('j.m.Y - H:i') ?>
	<?php comment_text() ?>
	<?php if ($comment->comment_approved == '0') : ?>
		Achtung: Dein Kommentar muss erst noch freigegeben werden.
	<?php endif; ?>
<?php endforeach; ?>