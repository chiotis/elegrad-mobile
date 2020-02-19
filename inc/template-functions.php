<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Elegrad_Mobile
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function elegrad_mobile_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'elegrad_mobile_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function elegrad_mobile_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'elegrad_mobile_pingback_header' );


// Number Pagination Function 

function elegrad_number_pagination() {
 
	if( is_singular() )
		return;
 
	global $wp_query;
 
	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;
 
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );
 
	/** Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;
 
	/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
 
	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
 
	echo '<nav class="mt-3"><ul class="pagination justify-content-center">' . "\n";
 
	/** Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li class="page-item"><a class="page-link" href="%s">'. __('Νεότερα', 'elegrad-mobile') .'</a></li>' . "\n", get_previous_posts_page_link() );
 
	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="page-item active"' : ' class="page-item"';
 
		printf( '<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
		if ( ! in_array( 2, $links ) )
			echo '<li class="page-item">…</li>';
	}
 
	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="page-item active"' : ' class="page-item"';
		printf( '<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}
 
	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li class="page-item">…</li>' . "\n";
 
		$class = $paged == $max ? ' class="page-item active"' : ' class="page-item"';
		printf( '<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}
 
	/** Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li class="page-item"><a class="page-link" href="%s">'. __('Παλαιότερα', 'elegrad-mobile') .'</a></li>' . "\n", get_next_posts_page_link() );
 
	echo '</ul></nav>' . "\n";
 
}

// add CSS class to custom logo
add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {
	$html = str_replace( 'custom-logo', 'img-fluid sidebar-logo p-2', $html );
	// $html = str_replace( 'custom-logo-link', 'your-custom-class', $html );
	return $html;
}