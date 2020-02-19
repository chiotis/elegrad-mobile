<?php
/**
 * Template Name: Full Map
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
	if ( get_field('fitbounds', 'option') ) {
		$fitBounds = 'fitbounds';
	} else {
		$fitBounds = '!fitbounds';
	}
	$map_center = get_field('map_center', 'option');

	echo do_shortcode('[leaflet-map height="100vh" lat='.$map_center['markers'][0]['lat'].' lng='.$map_center['markers'][0]['lng'].' zoom="' . get_field('zoom', 'option') . '" zoomcontrol !scrollwheel doubleClickZoom dragging ' . $fitBounds . ' !boxZoom !attribution '.get_field('tiles', 'option').']');

	if ( get_field('airports', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-airports.geojson]{popup-text}[/leaflet-geojson]');
	}

	if ( get_field('pamth_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-pamth.geojson color='.get_field('pamth_color', 'option').' dasharray="'.get_field('pamth_dasharray', 'option').'" weight='.get_field('pamth_line_weight', 'option').' fillColor='.get_field('pamth_color', 'option').get_field('pamth_fill_opacity', 'option').']Π. ΑΝΑΤΟΛΙΚΗΣ ΜΑΚΕΔΟΝΙΑΣ - ΘΡΑΚΗΣ[/leaflet-geojson]');
	}
	if ( get_field('patt_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-patt.geojson color='.get_field('patt_color', 'option').' dasharray="'.get_field('patt_dasharray', 'option').'" weight='.get_field('patt_line_weight', 'option').' fillColor='.get_field('patt_color', 'option').get_field('patt_fill_opacity', 'option').']Π. ΑΤΤΙΚΗΣ[/leaflet-geojson]');
	}
	if ( get_field('pba_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-pba.geojson color='.get_field('pba_color', 'option').' dasharray="'.get_field('pba_dasharray', 'option').'" weight='.get_field('pba_line_weight', 'option').' fillColor='.get_field('pba_color', 'option').get_field('pba_fill_opacity', 'option').']Π. ΒΟΡΕΙΟΥ ΑΙΓΑΙΟΥ[/leaflet-geojson]');
	}
	if ( get_field('pde_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-pde.geojson color='.get_field('pde_color', 'option').' dasharray="'.get_field('pde_dasharray', 'option').'" weight='.get_field('pde_line_weight', 'option').' fillColor='.get_field('pde_color', 'option').get_field('pde_fill_opacity', 'option').']Π. ΔΥΤΙΚΗΣ ΕΛΛΑΔΑΣ[/leaflet-geojson]');
	}
	if ( get_field('php_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-php.geojson color='.get_field('php_color', 'option').' dasharray="'.get_field('php_dasharray', 'option').'" weight='.get_field('php_line_weight', 'option').' fillColor='.get_field('php_color', 'option').get_field('php_fill_opacity', 'option').']Π. ΗΠΕΙΡΟΥ[/leaflet-geojson]');
	}
	if ( get_field('pdm_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-pdm.geojson color='.get_field('pdm_color', 'option').' dasharray="'.get_field('pdm_dasharray', 'option').'" weight='.get_field('pdm_line_weight', 'option').' fillColor='.get_field('pdm_color', 'option').get_field('pdm_fill_opacity', 'option').']Π. ΔΥΤΙΚΗΣ ΜΑΚΕΔΟΝΙΑΣ[/leaflet-geojson]');
	}
	if ( get_field('pin_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-pin.geojson color='.get_field('pin_color', 'option').' dasharray="'.get_field('pin_dasharray', 'option').'" weight='.get_field('pin_line_weight', 'option').' fillColor='.get_field('pin_color', 'option').get_field('pin_fill_opacity', 'option').']Π. ΙΟΝΙΩΝ ΝΗΣΩΝ[/leaflet-geojson]');
	}
	if ( get_field('pkm_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-pkm.geojson color='.get_field('pkm_color', 'option').' dasharray="'.get_field('pkm_dasharray', 'option').'" weight='.get_field('pkm_line_weight', 'option').' fillColor='.get_field('pkm_color', 'option').get_field('pkm_fill_opacity', 'option').']Π. ΚΕΝΤΡΙΚΗΣ ΜΑΚΕΔΟΝΙΑΣ[/leaflet-geojson]');
	}
	if ( get_field('pkr_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-pkr.geojson color='.get_field('pkr_color', 'option').' dasharray="'.get_field('pkr_dasharray', 'option').'" weight='.get_field('pkr_line_weight', 'option').' fillColor='.get_field('pkr_color', 'option').get_field('pkr_fill_opacity', 'option').']Π. ΚΡΗΤΗΣ[/leaflet-geojson]');
	}
	if ( get_field('pne_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-pne.geojson color='.get_field('pne_color', 'option').' dasharray="'.get_field('pne_dasharray', 'option').'" weight='.get_field('pne_line_weight', 'option').' fillColor='.get_field('pne_color', 'option').get_field('pne_fill_opacity', 'option').']Π. ΝΟΤΙΟΥ ΑΙΓΑΙΟΥ[/leaflet-geojson]');
	}
	if ( get_field('ppl_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-ppl.geojson color='.get_field('ppl_color', 'option').' dasharray="'.get_field('ppl_dasharray', 'option').'" weight='.get_field('ppl_line_weight', 'option').' fillColor='.get_field('ppl_color', 'option').get_field('ppl_fill_opacity', 'option').']Π. ΠΕΛΟΠΟΝΝΗΣΟΥ[/leaflet-geojson]');
	}
	if ( get_field('pste_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-pste.geojson color='.get_field('pste_color', 'option').' dasharray="'.get_field('pste_dasharray', 'option').'" weight='.get_field('pste_line_weight', 'option').' fillColor='.get_field('pste_color', 'option').get_field('pste_fill_opacity', 'option').']Π. ΣΤΕΡΕΑΣ ΕΛΛΑΔΑΣ[/leaflet-geojson]');
	}
	if ( get_field('pth_active_area', 'option') ) {
		echo do_shortcode('[leaflet-geojson src=https://elegradvault.b-cdn.net/geojson/map-pth.geojson color='.get_field('pth_color', 'option').' dasharray="'.get_field('pth_dasharray', 'option').'" weight='.get_field('pth_line_weight', 'option').' fillColor='.get_field('pth_color', 'option').get_field('pth_fill_opacity', 'option').']Π. ΘΕΣΣΑΛΙΑΣ[/leaflet-geojson]');
	}


	// WP_Query arguments
	$args = array(
		'post_type'				=> array( 'alert' ),
		'post_status'			=> array( 'published' ),
		'facetwp'				=> true,
		'posts_per_page'		=> -1,
	);
	// The Query
	$query_locations = new WP_Query( $args );

	// The Loop
	if ( $query_locations->have_posts() ) {
		while ( $query_locations->have_posts() ) {
			$query_locations->the_post();
			$point_locations = get_field('point_location');
			// print_r($point_locations);
			echo do_shortcode('[leaflet-marker lat='.$point_locations['markers'][0]['lat'].' lng='.$point_locations['markers'][0]['lng'].']<h5>' . get_the_title() . '</h5><p>' . get_the_excerpt() . '</p><a href="'. get_edit_post_link() .'" target="_blank">'. __('Επεξεργασία', 'elegrad-mobile') .'</a>[/leaflet-marker]');
		}
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();

get_footer();
