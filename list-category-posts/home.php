<?php

// start with this
$lcp_display_output = '<ul class="media-list">';

// loop for every post
foreach ($this->catlist->get_categories_posts() as $single){

$lcp_display_output .= '<li class="media">';

	$lcp_display_output .= '<div class="media-left">';
		$lcp_display_output .= $this->get_thumbnail($single);
	$lcp_display_output .= '</div>';

	$lcp_display_output .= '<div class="media-body">';
		$lcp_display_output .= $this->get_post_title($single, 'h4', 'media-heading');
		$lcp_display_output .= $this->get_excerpt($single, 'p');
	$lcp_display_output .= '</div>';

$lcp_display_output .= '</li>';
}

$lcp_display_output .= '</ul>';

// end with this
$this->lcp_output = $lcp_display_output;