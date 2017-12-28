<?php if( is_singular() ):  ?>

	<!-- Queried page __-->
	<?php the_content(); ?>
	
	<!-- Page comments __-->
	<?php if ( comments_open() && get_comments_number() ) { //at least 1 comment
		comments_template( '', true ); 
	} ?>
	

<?php elseif( is_search() ):  ?>

	<!-- Page excerpt - displays in search results __-->
	<?php get_template_part('content'); ?>

<?php endif; ?>
