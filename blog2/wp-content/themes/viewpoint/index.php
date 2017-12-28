<?php get_header(); // Loads the header.php template. ?>

	<?php if ( !is_singular() && !is_404() ) : // If viewing a multi-post page ?>
		<?php locate_template( array( 'loop-meta.php' ), true ); ?>
	<?php endif; ?>
	

	<?php if ( have_posts() ) : // Checks if any posts were found. ?>
	
		<?php while ( have_posts() ) : // Begins the loop through found posts. ?>

			<?php the_post(); ?>
			<?php hybrid_get_content_template(); // Loads the content-*.php template. ?>

		<?php endwhile; ?>

	<?php else : // If no posts were found. ?>
		<?php locate_template( array( 'loop-error.php' ), true ); // Loads the error template. ?>
	<?php endif;  ?>
	
	<?php locate_template( array( 'loop-nav.php' ), true ); // Loads the nav template. ?>

<?php get_footer(); // Loads the footer.php template. ?>
