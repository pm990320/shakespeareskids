<header>
    <h1><?php _e( 'Nothing Found'); ?></h1>
</header>

<?php if ( is_search() ) : ?>

    <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.'); ?></p>
    <?php get_search_form();

endif; ?>