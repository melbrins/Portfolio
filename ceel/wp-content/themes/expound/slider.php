<div class="news-container">
	<!-- *** Side shadows removed - 27/04/2014
	<div class="shadow left"></div>
	<div class="shadow right"></div>
	-->

	<div class="contents">

		<div class="shadow bottom"></div>

		<div class="controls">
			<span id="turn-left" class="news-turn">
				<span class="arrow left"></span>
			</span>
			<span id="turn-right" class="news-turn">
				<span class="arrow right"></span>
			</span>
		</div>

	<div class="slider">

		<?php

				$array_slider = array(
				    "1" => "big",
				    "2" => "medium",
				    "3" => "small left",
				    "4" => "text right",
				);

				$array_image = array(
				    "1" => "slide-big",
				    "2" => "slide-medium",
				    "3" => "slide-small",
				    "4" => "slide-small",
				);

				$max_loop = 4;
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
					
					<div class="news <?php echo $array_slider[$get_class_name]?>">
						
						<?php if ($get_class_name != 4){ ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $array_image[$get_class_name] ); ?></a>
						<?php } ?>

						<div class="desc">
							<h1><?php the_category(' '); ?></h1>
							<h2>
								<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 10); ?></a>
							</h2>
							<?php if ($get_class_name == 4){ ?>
									<?php echo string_limit_words(get_the_excerpt(),30)?>
									<a class="more" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">[Read more]</a>
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

	</div>
	<!-- end .slider -->

	</div>
	<!-- end .content -->
	
</div>
<!-- end .news-container -->