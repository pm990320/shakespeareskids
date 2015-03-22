<form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ); ?>" id="searchform">
	<div class="form-group" style="width:100%">
		<div class="col-xs-8 nosidepadding">
        <input type="search" style="width:100%" class="form-control search-form" name="s" placeholder="Search..." value="<?php echo get_search_query() ?>"/>
        </div>
        <div class="col-xs-4 nosidepadding">
        <button type="submit" style="width:100%" class="btn btn-default search-button">Search</button>
    	</div>
    </div>
</form>