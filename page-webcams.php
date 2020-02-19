<?php
/**
 * Template Name: Webcams
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elegrad_Mobile
 */
get_header();

// check if the repeater field has rows of data
if ( have_rows('webcams', 'option') ) {

	echo '<div class="section full mt-2 mb-2">';
		echo '<div class="carousel-single owl-carousel owl-theme">';

	// loop through the rows of data
	while ( have_rows('webcams', 'option') ) : the_row();

		if ( get_sub_field('webcam_url_type', 'option') == 'image' ) {
			echo '<div class="item">';
			echo '<h4>'.get_sub_field('title', 'option').'</h4>';
			echo '<img src="'.get_sub_field('webcam_image_url', 'option').'" alt="alt" class="imaged w-100">';
			echo '</div>';
		}

	endwhile;

		echo '</div>';
	echo '</div>';

}

if ( have_rows('webcams', 'option') ) {
	echo '<div class="section full mt-2">';
		echo '<div class="wide-block pt-2 pb-2"><div class="row">';

	// loop through the rows of data
	while ( have_rows('webcams', 'option') ) : the_row();

		if ( get_sub_field('webcam_url_type', 'option') == 'iframe' ) {
			echo '<div class="col-sm-12 col-md-6">';
			echo '<h4>'.get_sub_field('title', 'option').'</h4>';
			echo '<iframe src="'.get_sub_field('webcam_image_url', 'option').'" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="100%" height="380px" ></iframe>';
			echo '</div>';
		}

	endwhile;

		echo '</div></div>';
	echo '</div>';

}

get_footer(); ?>