<?php if ( is_single() ) : ?>

	<article <?php hybrid_attr( 'post' ); ?>>
		<!-- Heading ___-->
		<?php if ( is_attachment() ) : ?>
			<h2><?php echo get_the_excerpt();; ?></h2>
		<?php else: ?>
			<h2><?php the_title(); ?></h2>
		<?php endif; ?>
	
		<!-- Post meta ___-->
		<div class="entry-meta">
		<p>
			<?php if ( has_category() ) : ?>
			<span class="entry-category">
				<strong><?php esc_html_e('Category','viewpoint'); ?></strong><br />
				<?php the_category(', '); ?>
			</span>
			<?php endif; ?>
			<span class="entry-date">
				<strong><?php esc_html_e('Date','viewpoint'); ?></strong><br />
				<?php echo get_the_time('d'); ?> <?php echo get_the_time('M'); ?> <?php echo get_the_time('Y'); ?></time>
			</span>
			<span class="entry-readtime">
				<strong><?php esc_html_e('Read time','viewpoint'); ?></strong><br />
				<?php echo viewpoint_estimated_reading_time(); ?>
			</span>
		</p>
		</div>
	
		<?php if ( is_attachment() ) : // If viewing a single attachment. ?>
			<!-- For attachments ___-->
			<?php echo wp_get_attachment_image( get_the_ID(), 'full', false, array( 'class' => 'size-full smaller-margin' ) ); ?>
		<?php endif; ?>

		<!-- WYSIWYG content of post ___-->
		<?php the_content(); ?>
		<!-- END of WYSIWYG content__-->
		
		<!-- Post footer (author, comments, comment form) ___-->
		<div class="entry-footer">
			<?php comments_template( '', true ); // Loads the comments template. ?>
		</div>
				
	</article>
	
<?php else: ?>

	<article>
		<div class="entry-wrapper">
			<!-- Thumb ___-->
			<div class="entry-featured-image">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php get_the_image( array( 'size' => 'post-thumbnail', 'link_to_post' => true ) ); ?>
			<?php endif; ?>
			</div>
			
			<!-- Heading ___-->
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
			<!-- Post meta ___-->
			<div class="entry-meta">
			<p>
				<?php if ( has_category() ) : ?>
				<span class="entry-category">
					<strong><?php esc_html_e('Category','viewpoint'); ?></strong><br />
					<?php the_category(', '); ?>
				</span>
				<?php endif; ?>
				<span class="entry-date">
					<strong><?php esc_html_e('Date','viewpoint'); ?></strong><br />
					<?php echo get_the_time('d'); ?> <?php echo get_the_time('M'); ?> <?php echo get_the_time('Y'); ?></time>
				</span>
				<span class="entry-readtime">
					<strong><?php esc_html_e('Read time','viewpoint'); ?></strong><br />
					<?php echo viewpoint_estimated_reading_time(); ?>
				</span>
				<!--<span class="entry-category">
					<strong><?php esc_html_e('Tags','viewpoint'); ?></strong><br />
					<?php echo get_the_tag_list('',', ',''); ?>
				</span>-->
			</p>
			</div>
		
			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<p><a href="<?php the_permalink(); ?>"><?php esc_html_e('Read more','viewpoint'); ?></a></p>
			</div>
				
		</div><!-- .entry-wrapper -->
		<p class="entry-count"><a class="nr">1</a><span class="divider"></span> 
		<?php  
			global $wp_query;
			echo intval($wp_query->found_posts); 
		?></p>
	</article>

<?php endif; ?>