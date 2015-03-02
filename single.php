<?php get_header();

        while ( have_posts() ) : the_post(); ?>

            <h2><?php the_title(); ?></h2>
        
        <?php the_content();

        // End the loop.
        endwhile;

        $options = array(
            'before' => '<p>' . __('Pages:'),
            'after' => '</p>',
            'link_before' => '',
            'link_after' => '',
            'next_or_number' => 'number',
            'separator' => ' ',
            'nextpagelink' => __( 'Next page' ),
            'previouspagelink' => __( 'Previous page' ),
            'pagelink' => '%',
            'echo' => 1
        );

        wp_link_pages( $options );

get_footer(); ?>
