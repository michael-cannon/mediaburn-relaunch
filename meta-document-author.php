<?php
/**
 * Activate Add-ons
 * Here you can enter your activation codes to unlock Add-ons to use in your theme. 
 * Since all activation codes are multi-site licenses, you are allowed to include your key in premium themes. 
 * Use the commented out code to update the database with your activation code. 
 * You may place this code inside an IF statement that only runs on theme activation.
 */

// update_option('acf_repeater_ac', "xxxx-xxxx-xxxx-xxxx");
// update_option('acf_options_ac', "xxxx-xxxx-xxxx-xxxx");


/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => '4fba711c27172',
		'title' => 'Document Meta – Author',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_4f10ba3f6f8b7',
				'label' => 'Staff and Producer Comments',
				'name' => 'staff_comments',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '4',
			),
			1 => 
			array (
				'key' => 'field_4f10ba3fc6ac3',
				'label' => 'Main Credits',
				'name' => 'main_credits',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '8',
			),
			2 => 
			array (
				'key' => 'field_4f10ba3fd2a8c',
				'label' => 'Additional Credits',
				'name' => 'additional_credits',
				'type' => 'textarea',
				'default_value' => '',
				'formatting' => 'br',
				'instructions' => '',
				'order_no' => '9',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'document',
					'order_no' => '0',
				),
			),
			'allorany' => 'all',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>