<?php if( is_404() ): ?>	

	<a class="a404">404</a>
	<div class="hero-headline">
		<h2><?php esc_html_e( 'Oops!... Something went wrong.', 'viewpoint' ); ?></h2>
		<h3><a href="#" onclick="window.history.go(-1)" class="button"><?php esc_html_e( 'Go back', 'viewpoint' ); ?></a> / <a href="<?php echo esc_url( home_url('/') ); ?>" class="button"><?php esc_html_e( 'Go home', 'viewpoint' ); ?></a></h3>
	</div>
	
<?php else: ?>
	
	<h2><?php esc_html_e( 'Oops!... Search term not found!', 'viewpoint' ); ?></h2>
	<p><?php esc_html_e( 'Here are our latest posts for you:', 'viewpoint' ); ?></p>
			
<?php endif; ?>
