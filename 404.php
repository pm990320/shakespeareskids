<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<h3>Oh dear, it seems what you were looking for is not found. </br></br>
	Searching may help:</h3>

	<?php get_search_form(); ?>

	<a href="<?php echo get_site_url(); ?>"><h2>Take me home!</h2></a>

<?php get_footer(); ?>
