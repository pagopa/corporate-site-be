<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6140a422d3afa',
	'title' => 'Block - Media Highlights',
	'fields' => array(
		array(
			'key' => 'field_6140a4232356e',
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
			'show_in_graphql' => 1,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_6140a5c843925',
			'label' => 'Posts',
			'name' => 'posts',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'post_type' => array(
				0 => 'post',
				1 => 'event',
				2 => 'press-release',
				3 => 'initiative',
				4 => 'newsletter',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
			),
			'elements' => '',
			'min' => 1,
			'max' => 6,
			'return_format' => 'object',
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
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => false,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'show_in_graphql' => 0,
	'graphql_field_name' => 'blockPressRelease',
	'map_graphql_types_from_location_rules' => 0,
	'graphql_types' => '',
	'modified' => 1668767346,
));

endif;