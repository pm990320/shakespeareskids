<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

			<header>
		    	<?php 
		    	if (!is_page('Home')) :
		    		the_title( '<h1 class="entry-title">', '</h1>' ); 
		    	endif;
		    	?>
			</header>

			<div>
			    <?php the_content(); ?>
			</div>

	<?php endwhile;

get_footer(); ?>
