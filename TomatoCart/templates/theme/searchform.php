<form method="get" id="search" action="<?php bloginfo('url'); ?>/">
<h2><?php _e('Search for:'); ?></h2>
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="search-text" />
<input type="submit" id="search-submit" value="Search" />
</div>
</form>
