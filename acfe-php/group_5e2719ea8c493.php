<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5e2719ea8c493',
	'title' => 'Alerts & Webcams',
	'fields' => array(
		array(
			'key' => 'field_5e271a02f25c2',
			'label' => 'ALERT Αρχικής Σελίδας',
			'name' => 'alert_homepage_top',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'layout' => 'table',
			'sub_fields' => array(
				array(
					'key' => 'field_5e271a3ff25c3',
					'label' => 'active',
					'name' => 'active',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'message' => '',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_5e271a57f25c4',
					'label' => 'header',
					'name' => 'header',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5e271a5ff25c5',
					'label' => 'text',
					'name' => 'text',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => 140,
					'rows' => 2,
					'new_lines' => '',
				),
				array(
					'key' => 'field_5e271ab0f25c6',
					'label' => 'Dismissable',
					'name' => 'dismissable',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'message' => '',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_5e271ad5f25c7',
					'label' => 'Alert Look',
					'name' => 'alert_look',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'choices' => array(
						'primary' => 'primary',
						'secondary' => 'secondary',
						'warning' => 'warning',
						'danger' => 'danger',
						'success' => 'success',
						'info' => 'info',
						'dark' => 'dark',
					),
					'default_value' => array(
						0 => 'primary',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'return_format' => 'value',
					'ajax' => 0,
					'placeholder' => '',
				),
				array(
					'key' => 'field_5e271b15f25c8',
					'label' => 'Background',
					'name' => 'background',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'message' => '',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => 'Outline',
					'ui_off_text' => 'Filled',
				),
			),
		),
		array(
			'key' => 'field_5e299c42b82aa',
			'label' => 'Webcams',
			'name' => 'webcams',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'acfe_permissions' => '',
			'acfe_repeater_stylised_button' => 1,
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Webcam',
			'sub_fields' => array(
				array(
					'key' => 'field_5e299c56b82ab',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'acfe_permissions' => '',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5e299c61b82ac',
					'label' => 'Webcam Image URL',
					'name' => 'webcam_image_url',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'acfe_permissions' => '',
					'default_value' => '',
					'placeholder' => '',
				),
				array(
					'key' => 'field_5e2dc5c2f3a98',
					'label' => 'Webcam URL Type',
					'name' => 'webcam_url_type',
					'type' => 'button_group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'acfe_permissions' => '',
					'choices' => array(
						'image' => 'image',
						'youtube' => 'youtube',
						'iframe' => 'iframe',
					),
					'allow_null' => 0,
					'default_value' => '',
					'layout' => 'horizontal',
					'return_format' => 'value',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'app-general-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'left',
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
	'modified' => 1585135725,
));

endif;