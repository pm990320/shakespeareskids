<?php get_header(); ?>

<?php if ( have_posts() ) : // if search content found ?>

	<header>
		<h2>Search Results for: <span style="color:red"><?php echo get_search_query(); ?></span></h2>
	</header>

		<?php
		while ( have_posts() ) : the_post(); 

			get_template_part( 'content', 'search' );

		endwhile;

	else :
		get_template_part( 'content', 'none' );

	endif;
?>

<?php get_footer(); ?>
