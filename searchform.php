<form method="get" action="<?php echo esc_url( site_url() ) ?>">
	<input type="search" name="s" placeholder="<?php esc_attr_e( 'Search', 'siteorigin-unwind') ?>" value="<?php echo get_search_query() ?>" />
	<input type="submit" value="<?php esc_attr_e('Search', 'siteorigin-unwind') ?>" />
</form>
