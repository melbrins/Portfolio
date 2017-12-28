<?php
/* If viewing a singular page, return. */
if ( is_singular() || is_home() )
	return;
?>

<div id="meta-heading">	
<?php if ( is_category() ) : ?>
	<h2><strong><?php esc_html_e('Category','viewpoint'); ?>:</strong> <?php single_cat_title(); ?></h2>
	<p><?php echo category_description(); ?></p>

<?php elseif ( is_tag() ) : ?>
	<h2><strong><?php esc_html_e('Tag','viewpoint'); ?>:</strong> <?php single_tag_title(); ?></h2>
	<p><?php echo tag_description(); ?></p>

<?php elseif ( is_tax() ) : ?>
	<h2><strong><?php esc_html_e('Term','viewpoint'); ?>:</strong> <?php single_term_title(); ?></h2>
	<p><?php echo term_description( '', get_query_var( 'taxonomy' ) ); ?></p>

<?php elseif ( is_author() ) : ?>
	<h2><strong><?php esc_html_e('Author','viewpoint'); ?>:</strong> <?php the_author_meta( 'display_name', get_query_var( 'author' ) ); ?></h2>
	<p><?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?> <?php the_author_meta( 'description' ); ?></p>
	
<?php elseif ( is_search() ) : ?>
	<h2><strong><?php esc_html_e('Search','viewpoint'); ?>:</strong> <?php echo esc_attr( get_search_query() ); ?></h2>

<?php elseif ( is_post_type_archive() ) : ?>
	<?php $post_type = get_post_type_object( get_query_var( 'post_type' ) ); ?>
	<h2><strong><?php esc_html_e('Post Type','viewpoint'); ?>:</strong> <?php post_type_archive_title(); ?></h2>

<?php elseif ( is_day() || is_month() || is_year() ) : ?>
	<?php
		if ( is_day() )
			$date = get_the_time( esc_html__( 'F d, Y', 'viewpoint' ) );
		elseif ( is_month() )
			$date = get_the_time( esc_html__( 'F Y', 'viewpoint' ) );
		elseif ( is_year() )
			$date = get_the_time( esc_html__( 'Y', 'viewpoint' ) );
	?>
	<h2><strong><?php esc_html_e('Archive','viewpoint'); ?>:</strong> <?php echo esc_attr($date); ?></h2>

<?php elseif ( is_archive() ) : ?>
	<h2><strong><?php esc_html_e('Archive','viewpoint'); ?>:</strong> <?php echo esc_attr($date); ?></h2>
	
<?php endif; ?>
</div>
