(function($, viewport){

    $(document).ready(function() {
        if( viewport.is('sm') ) {
            $('#side-content').appendTo('#content-row');
            $('#side-content').removeClass('desktop-sidebar');
            $('#side-content').addClass('mobile-sidebar');
        }
    });

    // Execute code each time window size changes
    $(window).bind('resize', function() {
        viewport.changed(function(){
            if( viewport.is('sm') ) {
                $('#side-content').appendTo('#content-row');
                $('#side-content').removeClass('desktop-sidebar');
                $('#side-content').addClass('mobile-sidebar');
            } else {
                $('#side-content').prependTo('#content-row');
                $('#side-content').removeClass('mobile-sidebar');
                $('#side-content').addClass('desktop-sidebar');
            }
        }, 0);
    });

})(jQuery, ResponsiveBootstrapToolkit);