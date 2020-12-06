<form role="search" method="get" class="search-form" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<label class="screen-reader-text" for="s">Поиск: </label>
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="search-field" />
	<input type="submit" class="search-submit mkdf-btn" id="searchsubmit" value="найти" />
</form>

