<?php if ( is_home() || is_archive() || is_search() ) : ?>
	
	<?php the_posts_pagination(
		array( 
			'prev_text' => '&larr;', 
			'next_text' => '&rarr;'
		) 
	); ?>
<?php endif; ?>

<?php if ( is_single() ) : ?>
	<?php wp_link_pages(); ?>
<?php endif; ?>
