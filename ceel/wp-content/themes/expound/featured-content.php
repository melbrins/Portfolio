<?php 
/**
 * @package Expound
 */
$featured_posts = expound_get_featured_posts();
?>

<!-- .sidebar -->
<?php get_sidebar(); ?>

<?php
	// These lines are mandatory.
	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;

	// $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	// $scriptVersion = $detect->getScriptVersion();
?>

<div class="all-news col-2 clearfix">
	
	<div class="featured-content">

		<h2 class="red-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>topics/food-restaurant/">Food &amp; Restaurant</a></h2>

		<?php query_posts("showposts=1&cat=10"); ?>
		
		<?php while (have_posts()) : the_post(); ?>


		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-thumbnail">				
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Main-featured' ); ?></a>
			</div>
			<?php endif; ?>

			<header class="entry-header">
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 20); ?></a>
				</h2>
				<div class="rating">
					<div class="clearfix">
						<?php the_author_post_rating(); ?>
						<p class="date"><?php the_date(); ?></p>
					</div>
				</div>
				<div>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">[Read more]</a>
				</div>
			</header><!-- .entry-header -->

			<div class="clear"></div>

		</article>

		<?php endwhile; ?>

		<div class="followup">

			<?php query_posts("showposts=3&cat=10&offset=1"); ?>
			<?php while (have_posts()) : the_post(); ?>

			
				<article id="post-<?php the_ID(); ?>" class="clearfix">
				
					<?php if ( has_post_thumbnail() ) : ?>

					<div class="entry-thumbnail">
						
						<?php
							// Check for mobile environment.
							if ($detect->isIphone()) {

							    ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Second-featured' ); ?></a> <?php

							}else{

								?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'followup-featured' ); ?></a> <?php
							
							}
						?>

					</div>

					<header class="entry-header">
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 20); ?></a>
						</h2>
						<div>
							<?php the_excerpt(); ?>
						</div>
					</header><!-- .entry-header -->
				</article>
				<?php endif; ?>
			<?php endwhile; ?>

		</div>

		<div class="see-more">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>topics/food-restaurant/">See more</a>
		</div>

	</div><!-- .featured-content -->

	<div class="featured-content">

		<h2 class="red-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>topics/culture/film-theatre/">Film &amp; Theatre</a></h2>

		<?php query_posts("showposts=1&cat=5"); ?>
		<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" class="clearfix">

			<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Main-featured' ); ?></a>
			</div>
			<?php endif; ?>

			<header class="entry-header">
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 20); ?></a>
				</h2>
				<div class="rating">
					<div class="clearfix">
						<?php the_author_post_rating(); ?>
						<p class="date"><?php the_date(); ?></p>
					</div>
				</div>
				<div>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">[Read more]</a>
				</div>
			</header><!-- .entry-header -->

			<div class="clear"></div>

		</article>
		<?php endwhile; ?>

		<div class="followup">

			<?php query_posts("showposts=3&cat=5&offset=1"); ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">

					<?php
						// Check for mobile environment.
						if ($detect->isIphone()) {

						    ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Second-featured' ); ?></a> <?php

						}else{

							?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'followup-featured' ); ?></a> <?php
						
						}
					?>

				</div>
				<?php endif; ?>

				<header class="entry-header">
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 20); ?></a>
					</h2>
					<div>
						<?php the_excerpt(); ?>
					</div>
				</header><!-- .entry-header -->
			</article>
			<?php endwhile; ?>

		</div>

		<div class="see-more">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>topics/culture/film-theatre/">See more</a>
		</div>

	</div><!-- .featured-content -->


</div><!-- .col-2 -->


<div class="featured-content secondary">

<div class="row clearfix">
	<div class="col-1">

		<div class="wrap">
			<h2 class="red-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>topics/travel/">Travel</a></h2>

			<div class="main-post">
				<?php query_posts("showposts=1&cat=9"); ?>
				<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-thumbnail">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Main-featured' ); ?></a>
					</div>
					<?php endif; ?>

					<header class="entry-header">
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 20); ?></a>
						</h2>
					</header><!-- .entry-header -->
					<div class="rating">
						<div class="clearfix">
							<?php the_author_post_rating(); ?>
							<p class="date"><?php the_date(); ?></p>
						</div>
					</div>
					<div>
						<?php the_excerpt(); ?>
					</div>
				</article>

				<?php endwhile; ?>

			</div>

			<div class="followup">

				<?php query_posts("showposts=3&cat=9&offset=1"); ?>
				<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-thumbnail">

						<?php
							// Check for mobile environment.
							if ($detect->isIphone()) {

							    ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Second-featured' ); ?></a> <?php

							}else{

								?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'followup-featured' ); ?></a> <?php
							
							}
						?>

					</div>
					<?php endif; ?>

					<header class="entry-header">
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 20); ?></a>
						</h2>
						<div class="rating">
							<p class="date"><?php the_date(); ?></p>
						</div>
						<div>
							<?php
  $excerpt = get_the_excerpt();
  echo string_limit_words($excerpt,25);
?>
						</div>
					</header><!-- .entry-header -->
				</article>

				<?php endwhile; ?>

			</div>

			<div class="see-more">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>topics/travel/">See more</a>
			</div>

		</div><!-- .wrap -->

	</div>

	<div class="col-1">

		<div class="wrap">
			<h2 class="red-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>topics/culture/books/">Books</a></h2>

			<div class="main-post">

				<?php query_posts("showposts=1&cat=8"); ?>
				<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-thumbnail">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Main-featured' ); ?></a>
					</div>
					<?php endif; ?>

					<header class="entry-header">
						<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 20); ?></a></h2>
					</header><!-- .entry-header -->
					<div class="rating">
						<div class="clearfix">
							<?php the_author_post_rating(); ?>
							<p class="date"><?php the_date(); ?></p>
						</div>
					</div>
					<div>
						<?php the_excerpt(); ?>
					</div>
				</article>

				<?php endwhile; ?>

			</div>

			<div class="followup">

				<?php query_posts("showposts=3&cat=8&offset=1"); ?>
				<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-thumbnail">

						<?php
							// Check for mobile environment.
							if ($detect->isIphone()) {

							    ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Second-featured' ); ?></a> <?php

							}else{

								?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'followup-featured' ); ?></a> <?php
							
							}
						?>

					</div>
					<?php endif; ?>

					<header class="entry-header">
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 20); ?></a>
						</h2>
						<div class="rating">
							<p class="date"><?php the_date(); ?></p>
						</div>
						<div>
							<?php 
								$excerpt = get_the_excerpt();
								echo string_limit_words($excerpt,20);
							?>
						</div>
					</header><!-- .entry-header -->
				</article>

				<?php endwhile; ?>
				
			</div>

			<div class="see-more">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>topics/culture/books/">See more</a>
			</div>

		</div>
	</div>
</div>

<div class="row clearfix">
	<div class="col-1">

		<div class="wrap">
			<h2 class="red-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>topics/culture/visual-arts/">Visual Arts</a></h2>

			<div class="main-post">

				<?php query_posts("showposts=1&cat=6"); ?>
				<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-thumbnail">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Main-featured' ); ?></a>
					</div>
					<?php endif; ?>

					<header class="entry-header">
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 20); ?></a>
						</h2>
					</header><!-- .entry-header -->
					<div class="rating">
						<div class="clearfix">
							<?php the_author_post_rating(); ?>
							<p class="date"><?php the_date(); ?></p>
						</div>
					</div>
					<div>
						<?php the_excerpt(); ?>
					</div>
				</article>

				<?php endwhile; ?>

			</div>

			<div class="followup">

				<?php query_posts("showposts=3&cat=6&offset=1"); ?>
				<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-thumbnail">

						<?php
							// Check for mobile environment.
							if ($detect->isIphone()) {

							    ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Second-featured' ); ?></a> <?php

							}else{

								?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'followup-featured' ); ?></a> <?php
							
							}
						?>

					</div>
					<?php endif; ?>

					<header class="entry-header">
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 20); ?></a>
						</h2>
						<div class="rating">
							<p class="date"><?php the_date(); ?></p>
						</div>
						<div>
							<?php 
								$excerpt = get_the_excerpt();
								echo string_limit_words($excerpt,20);
							?>
						</div>
					</header><!-- .entry-header -->
				</article>

				<?php endwhile; ?>
				
			</div>

			<div class="see-more">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>topics/culture/visual-arts/">See more</a>
			</div>

		</div>
	</div>

	<div class="col-1">

		<div class="wrap">
			<h2 class="red-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>topics/culture/music/">Music</a></h2>


			<div class="main-post">

				<?php query_posts("showposts=1&cat=7"); ?>
				<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-thumbnail">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Main-featured' ); ?></a>
					</div>
					<?php endif; ?>

					<header class="entry-header">
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 20); ?></a>
						</h2>
					</header><!-- .entry-header -->
					<div class="rating">
						<div class="clearfix">
							<?php the_author_post_rating(); ?>
							<p class="date"><?php the_date(); ?></p>
						</div>
					</div>
					<div>
						<?php the_excerpt(); ?>
					</div>
				</article>

				<?php endwhile; ?>

			</div>

			<div class="followup">

				<?php query_posts("showposts=3&cat=7&offset=1"); ?>
				<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-thumbnail">

						<?php
							// Check for mobile environment.
							if ($detect->isIphone()) {

							    ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'Second-featured' ); ?></a> <?php

							}else{

								?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'followup-featured' ); ?></a> <?php
							
							}
						?>

					</div>
					<?php endif; ?>

					<header class="entry-header">
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 20); ?></a>
						</h2>
						<div class="rating">
							<p class="date"><?php the_date(); ?></p>
						</div>
						<div>
							<?php 
								$excerpt = get_the_excerpt();
								echo string_limit_words($excerpt,20);
							?>
						</div>
					</header><!-- .entry-header -->
				</article>

				<?php endwhile; ?>
				
			</div>

			<div class="see-more">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>topics/culture/music/">See more</a>
			</div>

		</div>
	</div>
</div>

		<?php if ( $featured_posts->current_post % 4 == 0 ) : ?>
			<div class="clear"></div>
		<?php endif; // % 4 ?>

</div><!-- .featured-content-secondary -->
