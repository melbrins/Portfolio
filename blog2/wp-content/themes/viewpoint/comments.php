<?php
/* If a post password is required or no comments are given and comments/pings are closed, return. */
if ( post_password_required() || ( !have_comments() && !comments_open() && !pings_open() ) )
	return;
?>

<div id="comments">

	<?php if ( have_comments() ) { ?>

		<h3><?php esc_html_e('Comments', 'viewpoint'); ?> (<?php echo get_comments_number(); ?>)</h3>

		<ol class="comment-list">
			<?php wp_list_comments(
					array(
						'format' 		=> 'html5',
						'avatar_size'	=> 80,
						'per_page'      => 999
					)
				); ?>
		</ol><!-- .comment-list -->
		
		<?php get_template_part( 'comments-loop-nav' ); // Loads the comments-loop-nav.php template. ?>

	<?php } // End check for comments. ?>

	<?php get_template_part( 'comments-loop-error' ); // Loads the comments-loop-error.php template. ?>

	<?php comment_form(); // Loads the comment form. ?>

</div><!-- #comments -->