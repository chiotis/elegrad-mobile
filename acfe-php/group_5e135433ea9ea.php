<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5e135433ea9ea',
	'title' => 'Location',
	'fields' => array(
		array(
			'center_lat' => 38.3933389,
			'center_lng' => 24.6203613,
			'zoom' => 6,
			'key' => 'field_5e135439eeed8',
			'label' => 'Point Location',
			'name' => 'point_location',
			'type' => 'open_street_map',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'raw',
			'layers' => array(
				0 => 'OpenStreetMap',
			),
			'allow_map_layers' => 0,
			'height' => 500,
			'max_markers' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'alert',
			),
		),
		array(
			array(
				'param' => 'af_form',
				'operator' => '==',
				'value' => 'form_5e2484f4c34f0',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_permissions' => '',
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1585135554,
));

endif;