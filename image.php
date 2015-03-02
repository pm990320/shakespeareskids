<?php get_header(); 
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>

            <header>
                <?php the_title( '<h2>', '</h2>' ); ?>
            </header>

            <div>

                <div class="attachment">
                    <?php
                        echo wp_get_attachment_image( get_the_ID(), $image_size );
                    ?>

                    <?php if ( has_excerpt() ) : ?>
                        <div>
                            <?php the_excerpt(); ?>
                        </div>
                    <?php endif; ?>

                </div>

                <?php
                    the_content();
                ?>
            </div>

        <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        // End the loop.
        endwhile;
    ?>
<?php get_footer(); ?>
