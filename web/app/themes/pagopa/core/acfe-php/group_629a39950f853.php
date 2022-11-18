<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_629a39950f853',
	'title' => 'CPT fields - Newsletter',
	'fields' => array(
		array(
			'key' => 'field_629a399537114',
			'label' => 'Eyelet',
			'name' => 'eyelet',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'default_value' => 'Newsletter',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_629a399537171',
			'label' => 'Cta',
			'name' => 'cta',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '66',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'return_format' => 'array',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'newsletter',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
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
	'show_in_graphql' => 1,
	'graphql_field_name' => 'newsletterCommonFields',
	'map_graphql_types_from_location_rules' => 0,
	'graphql_types' => '',
	'modified' => 1668767478,
));

endif;