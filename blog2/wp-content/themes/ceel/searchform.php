<?php
/**
 * The template for displaying search forms
 *
 * @package CEEL
 */
?>
	<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<span id="ico-magnify"></span>
		
		<div class="search-inputs">
			<label for="s" class="screen-reader-text"><?php _ex( 'Search', 'assistive text', 'ceel' ); ?></label>
			<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'ceel' ); ?>" />
			<input type="submit" class="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'ceel' ); ?>" />
		</div>
	</form>
