<?php
/**
 * The main template file.
 *
 * Template Name: Language Courses
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CEEL
 */

get_header(); ?>

		<header class="page-header">
			<h1 class="page-title orange">
				<?php printf( __( '%s', 'ceel' ), the_title() ); ?>	
			</h1>
		</header><!-- .page-header -->

	<div id="primary" class="content-area language-courses">
		<div id="content" class="site-content" role="main">

			<?php query_posts('cat=21'); ?>
			<?php if ( have_posts() ) : ?>
			<?php
				$parentCatName = single_cat_title('',false);
				$parentCatID = 21;
				$childCats = get_categories( 'child_of='.$parentCatID );
				if(is_array($childCats)):
				foreach($childCats as $child){ ?>

				<div class="language">
					<div class="head">
						<span class="flag <?php echo $child->slug; ?>"></span>
						<h2><?php echo $child->name; ?></h2>
						<?php query_posts('cat='.$child->term_id);?>
						<div class="reveal"><span></span>Open</div>
					</div>
					
					<div class="body">
					<?php
						while(have_posts()): the_post(); $do_not_duplicate = $post->ID;
							/* Include the Post-Format-specific template for the content.
							 * If you want to overload this in a child theme then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content_course', get_post_format() );					 
						endwhile; 
					?>
					</div>
				</div>

				<?php
				wp_reset_query();
				}
				endif;
			?>


			<?php // ceel_content_nav( 'nav-below' ); ?>
			<?php if(function_exists('tw_pagination')) tw_pagination(); ?>

		<?php elseif ( ! is_home() || is_paged() ) : ?>

			<?php 	
				get_template_part( 'no-results', 'index' ); 
			?>

		<?php else : ?>

			<?php
				$featured_posts = ceel_get_featured_posts();
				if ( ! $featured_posts->have_posts() )
					get_template_part( 'no-results', 'index' );
			?>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<?php
		get_sidebar();
	?>

<?php get_footer(); ?>