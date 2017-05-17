			</div><!-- END .entry-content -->
		</div><!-- END .wrapper -->
	</section>
	<!-- END #content -->

	<!-- FOOTER _____________________________________________-->
	<footer id="footer">
		<p class="copyright"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?> &copy; <?php echo date_i18n( 'Y' ); ?> </p>
		<p class="back-to-top"><a href="#content"><?php esc_html_e('Back to top','viewpoint'); ?></a></p>
		<div class="entry-social">
			<p> 
				<?php if( function_exists( 'ev_post_views' ) ) ev_post_views(); ?>
			</p>
		</div>
		<ul class="social-icons">
			<?php if ( get_theme_mod( 'viewpoint_flickr' ) ) : ?><li><a href="<?php echo get_theme_mod( 'viewpoint_flickr' ); ?>" target="_blank" title="Flickr"><i class="icon-flickr"></i></a></li><?php endif; ?>	
			<?php if ( get_theme_mod( 'viewpoint_facebook' ) ) : ?><li><a href="<?php echo get_theme_mod( 'viewpoint_facebook' ); ?>" target="_blank" title="Facebook"><i class="icon-facebook"></i></a></li><?php endif; ?>
			<?php if ( get_theme_mod( 'viewpoint_twitter' ) ) : ?><li><a href="<?php echo get_theme_mod( 'viewpoint_twitter' ); ?>" target="_blank" title="Twitter"><i class="icon-twitter"></i></a></li><?php endif; ?>
			<?php if ( get_theme_mod( 'viewpoint_linkedin' ) ) : ?><li><a href="<?php echo get_theme_mod( 'viewpoint_linkedin' ); ?>" target="_blank" title="LinkedIn"><i class="icon-linkedin"></i></a></li><?php endif; ?>	
			<?php if ( get_theme_mod( 'viewpoint_skype' ) ) : ?><li><a href="<?php echo get_theme_mod( 'viewpoint_skype' ); ?>" target="_blank" title="Skype"><i class="icon-skype"></i></a></li><?php endif; ?>
			<?php if ( get_theme_mod( 'viewpoint_tumblr' ) ) : ?><li><a href="<?php echo get_theme_mod( 'viewpoint_tumblr' ); ?>" target="_blank" title="Tumblr"><i class="icon-tumblr"></i></a></li><?php endif; ?>
			<?php if ( get_theme_mod( 'viewpoint_dribbble' ) ) : ?><li><a href="<?php echo get_theme_mod( 'viewpoint_dribbble' ); ?>" target="_blank" title="Dribbble"><i class="icon-dribbble"></i></a></li><?php endif; ?>
			<?php if ( get_theme_mod( 'viewpoint_youtube' ) ) : ?><li><a href="<?php echo get_theme_mod( 'viewpoint_youtube' ); ?>" target="_blank" title="Youtube"><i class="icon-youtube"></i></a></li><?php endif; ?>
			<?php if ( get_theme_mod( 'viewpoint_pinterest' ) ) : ?><li><a href="<?php echo get_theme_mod( 'viewpoint_pinterest' ); ?>" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a></li><?php endif; ?>
			<?php if ( get_theme_mod( 'viewpoint_gplus' ) ) : ?><li><a href="<?php echo get_theme_mod( 'viewpoint_gplus' ); ?>" target="_blank" title="Google Plus"><i class="icon-google-plus"></i></a></li><?php endif; ?>
			<?php if ( get_theme_mod( 'viewpoint_instagram' ) ) : ?><li><a href="<?php echo get_theme_mod( 'viewpoint_instagram' ); ?>" target="_blank" title="Instagram"><i class="icon-instagram"></i></a></li><?php endif; ?>
		</ul>	
	</footer>
	<!-- END footer -->
	
	<?php wp_footer(); ?>

</body>
</html>
