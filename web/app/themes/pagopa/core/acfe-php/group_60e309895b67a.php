<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60e309895b67a',
	'title' => 'CPT fields - Brand asset',
	'fields' => array(
		array(
			'key' => 'field_60e309c91903b',
			'label' => 'Attachment',
			'name' => 'attachment',
			'type' => 'file',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
			'uploader' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'all',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 1,
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'show_in_graphql' => 1,
	'graphql_field_name' => 'documentsFields',
	'map_graphql_types_from_location_rules' => 0,
	'graphql_types' => '',
	'modified' => 1668769300,
));

endif;