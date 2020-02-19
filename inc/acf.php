<?php

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'App General Settings',
		'menu_title'	=> 'App Settings',
		'menu_slug' 	=> 'app-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'App Map Settings',
		'menu_title'	=> 'Map',
		'parent_slug'	=> 'app-general-settings',
	));
	
}

// define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
// define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

// // Include the ACF plugin.
// include_once( MY_ACF_PATH . 'acf.php' );

// // Customize the url setting to fix incorrect asset URLs.
// add_filter('acf/settings/url', 'my_acf_settings_url');
// function my_acf_settings_url( $url ) {
//     return MY_ACF_URL;
// }

// // (Optional) Hide the ACF admin menu item.
// add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
// function my_acf_settings_show_admin( $show_admin ) {
//     return false;
// }

function register_forms() {
	af_register_form( array(
		'key' => 'form_5e2484f4c34f0',
		'title' => 'Edit Alert',
		'display' => array(
			'description' => '',
			'success_message' => '<p>Ενημερώθηκε!</p>
	',
		),
		'create_entries' => false,
		'restrictions' => array(
			'entries' => false,
			'user' => false,
			'schedule' => false,
		),
		'emails' => false,
		'editing' => array(
			'user' => false,
			'post' => array(
				'post_type' => 'alert',
				'post_title' => array(
					'field' => 'field_5e248572427c2',
					'format' => '',
				),
				'post_content' => array(
					'field' => 'field_5e2485a4427c3',
					'format' => '',
				),
				'custom_fields' => array(
					0 => 'field_5e248572427c2',
					1 => 'field_5e2485a4427c3',
					2 => 'field_5e2485ab427c4',
					3 => 'field_5e135439eeed8',
				),
			),
			'term' => false,
		),
		'slack' => false,
		'mailchimp' => false,
		'zapier' => false,
		'calculated' => array(
		),
	) );
}
add_action( 'af/register_forms', 'register_forms' );