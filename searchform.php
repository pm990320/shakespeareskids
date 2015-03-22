<form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ); ?>" id="searchform">
	<div class="form-group">
		<div class="col-xs-10">
        <input type="search" class="form-control search-form" name="s" placeholder="Search..." value="<?php echo get_search_query() ?>"/>
        </div>
        <div class="col-xs-2">
        <button type="submit" class="btn btn-default search-button">Search</button>
    	</div>
    </div>
</form>