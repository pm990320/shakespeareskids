<form role="search" method="get" class="form-inline col-xs-12" action="<?php echo home_url( '/' ); ?>" id="searchform">
	<div class="form-group">
		<div class="col-xs-8">
        <input type="search" style="width:100%" class="form-control search-form" name="s" placeholder="Search..." value="<?php echo get_search_query() ?>"/>
        </div>
        <div class="col-xs-4">
        <button type="submit" style="width:100%" class="btn btn-default search-button">Search</button>
    	</div>
    </div>
</form>