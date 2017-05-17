<?php
/**
 * @package CEEL
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1><?php the_title(); ?></h1>

		<div class="rating">
			<div class="clearfix">
				<?php the_author_post_rating(); ?>
				<p class="date"><?php the_date(); ?></p>
			</div>
		</div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ceel' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<div class="entry-meta">
        <?php userphoto_the_author_thumbnail() ?>
		<?php ceel_posted_on(); ?>
	</div><!-- .entry-meta -->

	<!-- <footer class="entry-meta">
		<?php ceel_posted_in(); ?>
	</footer><! .entry-meta -->
</article><!-- #post-## -->