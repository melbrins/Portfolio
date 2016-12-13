<?php
/**
 * The template for displaying search forms
 *
 * @package Expound
 */
?>
	<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<span id="ico-magnify"></span>
		
		<div class="search-inputs">
			<label for="s" class="screen-reader-text"><?php _ex( 'Search', 'assistive text', 'expound' ); ?></label>
			<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'expound' ); ?>" />
			<input type="submit" class="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'expound' ); ?>" />
		</div>
	</form>
