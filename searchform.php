<form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ); ?>" id="searchform">
	<div class="form-group">
        <input type="search" class="form-control search-form" name="s" placeholder="Search..." value="<?php echo get_search_query() ?>"/>
        <button type="submit" class="btn btn-default search-button">Search</button>
    </div>
</form>