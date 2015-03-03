(function($, viewport){

    // Do the same, but only after document has loaded
    $(document).ready(function() {
        if( viewport.is('xs') ) {
            $('body').css('background-color', '#FFE9BF');
            console.log("getting here");
        }
    });

    // Execute code each time window size changes
    $(window).bind('resize', function() {
        viewport.changed(function(){
            if( viewport.is('xs') ) {
                $('body').css('background-color', '#FFE9BF');
                console.log("ghetto hero");
            } else {
                $('body').css('background', 'none');
            }
        }, 0);
    });

})(jQuery, ResponsiveBootstrapToolkit);