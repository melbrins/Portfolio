<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="searchbar">
	<fieldset>
		<input type="text" name="s" id="searchbar-input" value="<?php the_search_query(); ?>" placeholder="<?php esc_html_e('Search site','viewpoint'); ?>" />
		<button type="submit" id="searchbar-submit"><i class="icon-search"></i></button>
	</fieldset>
</form>