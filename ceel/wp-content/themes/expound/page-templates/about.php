<?php
/**
 * The main template file.
 *
 * Template Name: About Us
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Expound
 */

get_header(); ?>

		<header class="page-header">
			<h1 class="page-title orange">
				<?php printf( __( '%s', 'expound' ), the_title() ); ?>	
			</h1>
		</header><!-- .page-header -->

	<div id="primary" class="content-area language-courses">
		<div id="content" class="site-content" role="main">

					  	<p class="main-para">Test Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

						<h2>Film Editor</h2>
						<?php echo ('[authoravatars roles=film show_name=true show_biography=true user_link=website avatar_size=180]') ?> 

						<br>
						<br>

						<h2>Theatre Editor</h2>
						[authoravatars roles=theatre show_name=true show_biography=true user_link=website avatar_size=180]

						<br>
						<br>

						<h2>Travel Editor</h2>
						[authoravatars roles=travel show_name=true show_biography=true user_link=website avatar_size=180]

						<br>
						<br>

						<h2>Food Editor</h2>
						[authoravatars roles=food show_name=true show_biography=true user_link=website avatar_size=180]

						<br>
						<br>

						<h2>Literary Editor</h2>
						[authoravatars roles=literary show_name=true show_biography=true user_link=website avatar_size=180]

						<br>
						<br>

						<h2>Music Editor</h2>
						[authoravatars roles=Music show_name=true show_biography=true user_link=website avatar_size=180]

						<br>
						<br>

						<h2>Visual Arts Editor</h2>
						[authoravatars roles=visual show_name=true show_biography=true user_link=website avatar_size=180]


		</div><!-- #content -->
	</div><!-- #primary -->

	<?php
		get_sidebar();
	?>

<?php get_footer(); ?>
