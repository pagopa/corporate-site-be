<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60e3086ac3eb2',
	'title' => 'Block - Visual + Text',
	'fields' => array(
		array(
			'key' => 'field_60ec511436532',
			'label' => 'Background color',
			'name' => 'background_color',
			'type' => 'color_picker',
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
			'enable_opacity' => false,
			'return_format' => 'string',
		),
		array(
			'key' => 'field_60e720e4564fd',
			'label' => 'Reverse order',
			'name' => 'reverse',
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
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_60e71fd8ac22f',
			'label' => 'Visual',
			'name' => 'visual',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '40',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_60ec48f781857',
					'label' => 'Width',
					'name' => 'width',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'show_in_graphql' => 1,
					'choices' => array(
						'small' => 'Small',
						'half' => 'Half',
						'big' => 'Big',
						'full' => 'Full',
					),
					'default_value' => 'half',
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'return_format' => 'value',
					'ajax' => 0,
					'placeholder' => '',
					'allow_custom' => 0,
					'search_placeholder' => '',
				),
				array(
					'key' => 'field_60e308ab17ead',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
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
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => 'jpg,jpeg,png,svg',
					'uploader' => '',
					'acfe_thumbnail' => 0,
				),
				array(
					'key' => 'field_614b0c839416a',
					'label' => 'Caption',
					'name' => 'caption',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_60e308ab17ead',
								'operator' => '!=empty',
							),
						),
					),
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
					'key' => 'field_6204ef6e6dea1',
					'label' => 'Youtube video',
					'name' => 'yt_video',
					'type' => 'text',
					'instructions' => 'Video link, adds play button and video modal',
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
			),
			'acfe_seamless_style' => 0,
			'acfe_group_modal' => 0,
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'large',
		),
		array(
			'key' => 'field_60e71f9dac22d',
			'label' => 'Content',
			'name' => 'content',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '60',
				'class' => '',
				'id' => '',
			),
			'show_in_graphql' => 1,
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_60e71f79ac22b',
					'label' => 'Eyelet',
					'name' => 'eyelet',
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
					'key' => 'field_60e3087817eab',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'textarea',
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
					'maxlength' => '',
					'rows' => 2,
					'new_lines' => 'br',
					'acfe_textarea_code' => 0,
				),
				array(
					'key' => 'field_60e3089b17eac',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'wysiwyg',
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
					'tabs' => 'all',
					'toolbar' => 'basic',
					'media_upload' => 0,
					'delay' => 0,
				),
				array(
					'key' => 'field_60e71fb5ac22e',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'show_in_graphql' => 1,
					'return_format' => 'array',
				),
				array(
					'key' => 'field_6335ab6b67870',
					'label' => 'Additional Cta',
					'name' => 'additional_cta',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'show_in_graphql' => 1,
					'layout' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6335ab7867871',
							'label' => 'Text',
							'name' => 'text',
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
							'key' => 'field_6335ab8167872',
							'label' => 'Link',
							'name' => 'link',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'show_in_graphql' => 1,
							'return_format' => 'array',
						),
					),
					'acfe_seamless_style' => 0,
					'acfe_group_modal' => 0,
					'acfe_group_modal_close' => 0,
					'acfe_group_modal_button' => '',
					'acfe_group_modal_size' => 'large',
				),
			),
			'acfe_seamless_style' => 0,
			'acfe_group_modal' => 0,
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => '',
			'acfe_group_modal_size' => 'large',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
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
	'graphql_field_name' => 'editorialVisualText',
	'map_graphql_types_from_location_rules' => 0,
	'graphql_types' => '',
	'modified' => 1668769256,
));

endif;