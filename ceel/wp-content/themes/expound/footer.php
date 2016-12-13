<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Expound
 */
?>

	</div><!-- #main -->
</div><!-- #page -->


<?php wp_reset_query(); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	
	<div class="footer-head">
		<div class="box">
			<div class="box-1 fl">
				<h3>Categories</h3>
			</div>
			<div class="box-2 fl">
				<h3>Recent Articles</h3>
			</div>
			<div class="box-2 fl">
				<h3>Cultural Diary</h3>
			</div>
			<div class="box-1 fl last">
				<h3>CEEL.org.uk</h3>
			</div>
		</div>
	</div>

	<div class="footer-links clearfix">
		<div class="box">
			<div class="box-1 fl">
				<ul>
					<?php wp_list_categories('orderby=name&exclude=21&title_li='); ?> 
				</ul>
			</div>
			<div class="box-2 fl">
				<ul>
					<?php


						$postperpage = 5;

						$args = array( 'posts_per_page' => $postperpage, 'category' => '8, 5, 7, 6, 10, 3, 9');

						$myposts = get_posts( $args );	

						foreach ( $myposts as $post ) : setup_postdata( $post ); 
							setup_postdata( $post );
					?>
							
							<li><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'expound' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php  echo short_title('...', 10); ?></a></li>
						
					<?php 

						endforeach; 
					?>
		
				</ul>
			</div>
			<div class="box-2 cultural fl">
				<?php
					/* footer sidebar */
					if ( ! is_404() ) : ?>
						<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar-5' ); ?>
						<?php endif; ?>
				<?php endif; ?>
			</div>
			<div class="box-1 fl last">
				<ul>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/">About Us</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/">Contact Us</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>useful-contacts/">Useful Contacts</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>events/">Cultural Diary</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>languages-courses/">Language Courses</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="copyright-wrapper">
		<div class="box">
			<p id="copyright">&copy;2014 CEEL.org.uk <span>All Rights Reserved</span></p>
			<div class="footer-social">
				<!-- Social media icons commented out for later use: 02/05/2014
				 Activate social media links from plugins page and configure your links through the settings -->
				<?php echo do_shortcode('[feather_follow skin="balloon" size="28"]'); ?>
			</div>
		</div>
	</div>

	<!--<div class="site-info">
		<?php // do_action( 'expound_credits' ); ?>
	</div> .site-info -->
</footer><!-- #colophon -->
<?php 
	wp_footer(); 
?>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom/main.js"></script>

<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-includes/js/jquery/jquery.js?ver=1.11.0"></script><style type="text/css"></style>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1"></script>
<script type="text/javascript">
/* <![CDATA[ */
var tribe_bootstrap_datepicker_strings = {"dates":{"days":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"daysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat","Sun"],"daysMin":["S","M","T","W","T","F","S","S"],"months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"clear":"Clear","today":"Today"}};
/* ]]> */
</script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/the-events-calendar/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js?ver=3.2"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/the-events-calendar/vendor/jquery-placeholder/jquery.placeholder.min.js?ver=2.0.7"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/the-events-calendar/vendor/jquery-resize/jquery.ba-resize.min.js?ver=1.1"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/the-events-calendar/resources/tribe-events.min.js?ver=3.5.1"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/the-events-calendar/resources/tribe-events-bar.min.js?ver=3.5.1"></script>



</body>
</html>
