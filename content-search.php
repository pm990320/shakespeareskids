<article <?php post_class(); ?> >
	<header>
		<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	</header>

	<div>
		<?php the_excerpt(); ?>
	</div>
	
</article>
