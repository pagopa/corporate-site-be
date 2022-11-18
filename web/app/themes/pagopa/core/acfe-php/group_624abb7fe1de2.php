<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_624abb7fe1de2',
	'title' => 'CPT fields - University Collaboration',
	'fields' => array(
		array(
			'key' => 'field_624abb80036fc',
			'label' => 'Collaboration type title',
			'name' => 'collaboration_type',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 2,
			'new_lines' => 'br',
			'acfe_textarea_code' => 0,
		),
		array(
			'key' => 'field_624abc2346e22',
			'label' => 'Is active',
			'name' => 'is_active',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'message' => '',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'uni_collaboration',
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
	'graphql_field_name' => 'collaborationFields',
	'map_graphql_types_from_location_rules' => 0,
	'graphql_types' => '',
	'modified' => 1668767494,
));

endif;