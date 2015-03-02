<?php 
/* 
 *  My index page is never to be accessed, as the front page must be set as static to a predefined home page.
 */
get_header(); ?>
	<h1>Index</h1>
	<p>If you are seeing this page, you are getting an error.</p>
	<a href="<?php echo get_site_url(); ?>">Take me home</a>
<?php get_footer(); ?>
