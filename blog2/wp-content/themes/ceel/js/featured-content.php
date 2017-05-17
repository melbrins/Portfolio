<?php 
/**
 * @package CEEL
 */
$featured_posts = ceel_get_featured_posts();
?>

<div class="news-container">
	<div class="controls">
		<span id="turn-left" class="news-turn">
			<span class="arrow left"></span>
		</span>
		<span id="turn-right" class="news-turn">
			<span class="arrow right"></span>
		</span>
	</div>

	<div class="shadow bottom"></div>

	<div class="slider">

		<?php

				$array_slider = array(
				    "1" => "big",
				    "2" => "medium",
				    "3" => "small left",
				    "4" => "small text",
				);

				$array_image = array(
				    "1" => "slide-big",
				    "2" => "slide-medium",
				    "3" => "slide-small",
				    "4" => "slide-small",
				);

				$max_loop = 3;
				$slide_number = 0;
				$postperpage = 4;

				while ($slide_number < $max_loop){

		?>
		<div class="slide">

			<?php

				
				$offset = (4 * $slide_number) -1;

				if ($offset == -1){ 
					$offset = 0;
				}

				$args = array( 'posts_per_page' => $postperpage, 'meta_key'=>'_thumbnail_id', 'offset'=> $offset);

				$myposts = get_posts( $args );	

				$get_class_name=0;

				foreach ( $myposts as $post ) : setup_postdata( $post ); 
					setup_postdata( $post );
					$get_class_name++;
			?>
					
					<?php 
					if ( has_post_thumbnail() ) : 
					?>
					
					<div class="news big">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $array_image[$get_class_name] ); ?></a>
						<div class="desc">
							<h1><a href="#"><?php echo $get_class_name ?></a></h1>
							<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<?php if ($get_class_name == 4){ ?>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">[Read more]</a>
							<?php } ?>
						</div>
					</div>

					<?php endif; ?>

					<?php if ( $get_class_name == 1){ ?>

						<div class="others">

					<?php } ?>
				
			<?php 

				endforeach; 

				$get_class_name=0;
				wp_reset_postdata();

			?>
				</div>

			</div>
		<!-- end .slide -->
		
		<?php 

			$slide_number++;
			if($slide_number == $max_loop) break;

			}

		?>

		<div class="slide">
			<div class="news big">
				<img src="img1.jpg" alt="Title" />
				<div class="desc">
					<h1><a href="#">Film &amp; Theatre</a></h1>
					<h2><a href="#">Corneliu Porumboiu: The Youngest Voice of the Romanian New Wave</a></h2>
				</div>
			</div>

			<div class="others">
				<div class="news medium">
					<img src="img2.jpg" alt="Title" />
					<div class="desc">
						<h1><a href="#">Music</a></h1>
						<h2><a href="#">Corneliu Porumboiu: The Youngest Voice of the Romanian New Wave</a></h2>
					</div>
				</div>

				<div class="news small left">
					<img src="img3.jpg" alt="Title" />
					<div class="desc">
						<h1><a href="#">Film</a></h1>
						<h2><a href="#">Corneliu Porumboiu: The Youngest Voice of the Romanian New Wave</a></h2>
					</div>
				</div>
				<div class="news text right">
					<div class="desc">
						<h1><a href="#">Visual Arts</a></h1>
						<h2><a href="#">Corneliu Porumboiu: The Youngest Voice of the Romanian New Wave</a></h2>
						<p>
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua...
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- end .slide -->

	</div>
	
	<span class="newsshadow-bottom"></span>
</div>
<!-- end .news-container -->

<!-- .sidebar -->
<?php get_sidebar(); ?>


<div class="all-news col-2 clearfix">

	
	<div class="featured-content">

		<h2>Food &amp; Restaurants</h2>

		<?php query_posts("showposts=1&cat=10"); ?>
		<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'ceel-featured' ); ?></a>
			</div>
			<?php endif; ?>

			<header class="entry-header">
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<p class="date">
					<span class="rating" style="color: #aaa; font-style: italic"><?php the_author_post_rating(); ?></span>
					<?php the_date(); ?>
				</p>
			</header><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">[Read more]</a>
			</div><!-- .entry-summary -->

			<div class="clear"></div>

		</article>

		<?php endwhile; ?>

		<div class="followup fr">

			<?php query_posts("showposts=5&cat=10&offset=1"); ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'ceel-featured' ); ?></a>
				</div>
				<?php endif; ?>

				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<p class="date">
						<span class="rating" style="color: #aaa; font-style: italic"><?php the_author_post_rating(); ?></span>
						<?php the_date(); ?>
					</p>
				</header><!-- .entry-header -->
			</article>
			<?php endwhile; ?>

		</div>

	</div><!-- .featured-content -->


	<div class="featured-content">

		<h2>Film &amp; Theatre</h2>

		<?php query_posts("showposts=1&cat=5"); ?>
		<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'ceel-featured' ); ?></a>
			</div>
			<?php endif; ?>

			<header class="entry-header">
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<p class="date">
					<span class="rating" style="color: #aaa; font-style: italic"><?php the_author_post_rating(); ?></span>
					<?php the_date(); ?>
				</p>
			</header><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">[Read more]</a>
			</div><!-- .entry-summary -->

			<div class="clear"></div>

		</article>
		<?php endwhile; ?>

		<div class="followup fr">

			<?php query_posts("showposts=5&cat=5&offset=1"); ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'ceel-featured' ); ?></a>
				</div>
				<?php endif; ?>

				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<p class="date">
						<span class="rating" style="color: #aaa; font-style: italic"><?php the_author_post_rating(); ?></span>
						<?php the_date(); ?>
					</p>
				</header><!-- .entry-header -->
			</article>
			<?php endwhile; ?>

		</div>

	</div><!-- .featured-content -->


</div><!-- .col-2 -->


<div class="featured-content-secondary">

	<div class="col-1">
		<div class="main-post">

			<?php query_posts("showposts=1&cat=9"); ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2>Travel</h2>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<?php endif; ?>

				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				</header><!-- .entry-header -->
				<p class="date">
					<span class="rating" style="color: #aaa; font-style: italic"><?php the_author_post_rating(); ?></span>
					<?php the_date(); ?>
				</p>
			</article>

			<?php endwhile; ?>

		</div>

		<div class="followup">

			<?php query_posts("showposts=3&cat=9&offset=1"); ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<?php endif; ?>

				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<p class="date">
						<span class="rating" style="color: #aaa; font-style: italic"><?php the_author_post_rating(); ?></span>
						<?php the_date(); ?>
					</p>
				</header><!-- .entry-header -->
			</article>

			<?php endwhile; ?>

		</div>
	</div>

	<div class="col-1">
		<div class="main-post">

			<?php query_posts("showposts=1&cat=8"); ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2>Book</h2>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<?php endif; ?>

				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				</header><!-- .entry-header -->
				<p class="date">
					<span class="rating" style="color: #aaa; font-style: italic"><?php the_author_post_rating(); ?></span>
					<?php the_date(); ?>
				</p>
			</article>

			<?php endwhile; ?>

		</div>

		<div class="followup">

			<?php query_posts("showposts=3&cat=8&offset=1"); ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<?php endif; ?>

				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<p class="date">
						<span class="rating" style="color: #aaa; font-style: italic"><?php the_author_post_rating(); ?></span>
						<?php the_date(); ?>
					</p>
				</header><!-- .entry-header -->
			</article>

			<?php endwhile; ?>
			
		</div>
	</div>

	<div class="col-1">
		<div class="main-post">

			<?php query_posts("showposts=1&cat=6"); ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2>Visual Arts</h2>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<?php endif; ?>

				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				</header><!-- .entry-header -->
				<p class="date">
					<span class="rating" style="color: #aaa; font-style: italic"><?php the_author_post_rating(); ?></span>
					<?php the_date(); ?>
				</p>
			</article>

			<?php endwhile; ?>

		</div>

		<div class="followup">

			<?php query_posts("showposts=3&cat=6&offset=1"); ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<?php endif; ?>

				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<p class="date">
						<span class="rating" style="color: #aaa; font-style: italic"><?php the_author_post_rating(); ?></span>
						<?php the_date(); ?>
					</p>
				</header><!-- .entry-header -->
			</article>

			<?php endwhile; ?>
			
		</div>
	</div>

	<div class="col-1">
		<div class="main-post">

			<?php query_posts("showposts=1&cat=7"); ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2>Music</h2>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<?php endif; ?>

				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				</header><!-- .entry-header -->
				<p class="date">
					<span class="rating" style="color: #aaa; font-style: italic"><?php the_author_post_rating(); ?></span>
					<?php the_date(); ?>
				</p>
			</article>

			<?php endwhile; ?>

		</div>

		<div class="followup">

			<?php query_posts("showposts=3&cat=7&offset=1"); ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<?php endif; ?>

				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceel' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<p class="date">
						<span class="rating" style="color: #aaa; font-style: italic"><?php the_author_post_rating(); ?></span>
						<?php the_date(); ?>
					</p>
				</header><!-- .entry-header -->
			</article>

			<?php endwhile; ?>
			
		</div>
	</div>

		<?php if ( $featured_posts->current_post % 4 == 0 ) : ?>
			<div class="clear"></div>
		<?php endif; // % 4 ?>

</div><!-- .featured-content-secondary -->
