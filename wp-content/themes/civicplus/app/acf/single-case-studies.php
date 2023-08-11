<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_647a008e609da',
		'title' => 'Single Case Studies',
		'fields' => array(
			array(
				'key' => 'field_647a008eaf330',
				'label' => 'Hero',
				'name' => '',
				'aria-label' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_647a00caaf331',
				'label' => 'Hero',
				'name' => 'hero',
				'aria-label' => '',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'layout' => 'block',
				'acfe_seamless_style' => 1,
				'acfe_group_modal' => 0,
				'acfe_group_modal_close' => 0,
				'acfe_group_modal_button' => '',
				'acfe_group_modal_size' => 'large',
				'sub_fields' => array(
					array(
						'key' => 'field_647a0548af337',
						'label' => 'Hero Image',
						'name' => 'hero_image',
						'aria-label' => '',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'acfe_save_meta' => 0,
						'uploader' => '',
						'return_format' => 'url',
						'acfe_thumbnail' => 0,
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
						'preview_size' => 'medium',
						'library' => 'all',
					),
					array(
						'key' => 'field_64c2de240b0e2',
						'label' => 'With Gradient?',
						'name' => 'with_gradient',
						'aria-label' => '',
						'type' => 'true_false',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'acfe_save_meta' => 0,
						'message' => '',
						'default_value' => 1,
						'ui' => 0,
						'ui_on_text' => '',
						'ui_off_text' => '',
					),
					array(
						'key' => 'field_647a0121af332',
						'label' => 'Keys to Project:',
						'name' => 'keys_to_project',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'acfe_save_meta' => 0,
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_647fa0fcb70df',
						'label' => 'City/Country',
						'name' => 'city_country',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'acfe_save_meta' => 0,
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_647fa123b70e0',
						'label' => 'Population',
						'name' => 'population',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'acfe_save_meta' => 0,
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_647fa15ff79cb',
						'label' => 'Products',
						'name' => 'products',
						'aria-label' => '',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'acfe_save_meta' => 0,
						'acfe_repeater_stylised_button' => 0,
						'layout' => '',
						'pagination' => 0,
						'min' => 0,
						'max' => 0,
						'collapsed' => '',
						'button_label' => 'Add Product',
						'rows_per_page' => 20,
						'sub_fields' => array(
							array(
								'key' => 'field_647fa168f79cc',
								'label' => 'Link',
								'name' => 'link',
								'aria-label' => '',
								'type' => 'link',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'acfe_save_meta' => 0,
								'return_format' => '',
								'parent_repeater' => 'field_647fa15ff79cb',
							),
						),
					),
					array(
						'key' => 'field_647a0143af333',
						'label' => 'Logo',
						'name' => 'logo',
						'aria-label' => '',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'acfe_save_meta' => 0,
						'uploader' => '',
						'return_format' => 'id',
						'acfe_thumbnail' => 0,
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
						'preview_size' => 'medium',
						'library' => 'all',
					),
					array(
						'key' => 'field_647a0155af334',
						'label' => 'Challenge',
						'name' => 'challenge',
						'aria-label' => '',
						'type' => 'textarea',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'acfe_save_meta' => 0,
						'default_value' => '',
						'acfe_textarea_code' => 0,
						'maxlength' => '',
						'rows' => 4,
						'placeholder' => '',
						'new_lines' => '',
					),
					array(
						'key' => 'field_647a0524af335',
						'label' => 'Solution',
						'name' => 'solution',
						'aria-label' => '',
						'type' => 'textarea',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'acfe_save_meta' => 0,
						'default_value' => '',
						'acfe_textarea_code' => 0,
						'maxlength' => '',
						'rows' => 4,
						'placeholder' => '',
						'new_lines' => '',
					),
					array(
						'key' => 'field_647a0532af336',
						'label' => 'Result',
						'name' => 'result',
						'aria-label' => '',
						'type' => 'textarea',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'acfe_save_meta' => 0,
						'default_value' => '',
						'acfe_textarea_code' => 0,
						'maxlength' => '',
						'rows' => 4,
						'placeholder' => '',
						'new_lines' => '',
					),
				),
			),
			array(
				'key' => 'field_647a0757af338',
				'label' => 'Content',
				'name' => '',
				'aria-label' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_647a076daf339',
				'label' => 'Content',
				'name' => 'content',
				'aria-label' => '',
				'type' => 'flexible_content',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'acfe_flexible_advanced' => 1,
				'acfe_flexible_stylised_button' => 0,
				'acfe_flexible_hide_empty_message' => 0,
				'acfe_flexible_empty_message' => 'Add Section',
				'acfe_flexible_layouts_templates' => 0,
				'acfe_flexible_layouts_placeholder' => 0,
				'acfe_flexible_layouts_thumbnails' => 1,
				'acfe_flexible_layouts_settings' => 0,
				'acfe_flexible_async' => array(
					0 => 'layout',
				),
				'acfe_flexible_add_actions' => array(
					0 => 'title',
					1 => 'toggle',
					2 => 'copy',
				),
				'acfe_flexible_remove_button' => array(
				),
				'acfe_flexible_layouts_state' => 'user',
				'acfe_flexible_modal_edit' => array(
					'acfe_flexible_modal_edit_enabled' => '0',
					'acfe_flexible_modal_edit_size' => 'large',
				),
				'acfe_flexible_modal' => array(
					'acfe_flexible_modal_enabled' => '1',
					'acfe_flexible_modal_title' => 'Add Section',
					'acfe_flexible_modal_size' => 'full',
					'acfe_flexible_modal_col' => '4',
					'acfe_flexible_modal_categories' => '0',
				),
				'layouts' => array(
					'layout_647a07744c536' => array(
						'key' => 'layout_647a07744c536',
						'name' => 'simple',
						'label' => 'Simple',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_647a07cdaf33a',
								'label' => 'Content',
								'name' => 'content',
								'aria-label' => '',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'acfe_save_meta' => 0,
								'default_value' => '',
								'tabs' => 'all',
								'toolbar' => 'full',
								'media_upload' => 1,
								'delay' => 1,
							),
						),
						'min' => '',
						'max' => '',
						'acfe_flexible_thumbnail' => '',
						'acfe_flexible_render_template' => false,
						'acfe_flexible_render_style' => false,
						'acfe_flexible_render_script' => false,
						'acfe_flexible_settings' => false,
						'acfe_flexible_settings_size' => 'medium',
						'acfe_flexible_modal_edit_size' => false,
						'acfe_flexible_category' => false,
					),
					'layout_647a07efaf33b' => array(
						'key' => 'layout_647a07efaf33b',
						'name' => 'feedback',
						'label' => 'Feedback',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_648721f4888bd',
								'label' => 'Feedback',
								'name' => 'feedback',
								'aria-label' => '',
								'type' => 'clone',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'acfe_save_meta' => 0,
								'clone' => array(
									0 => 'field_64872199291fd',
									1 => 'field_648721cb291fe',
									2 => 'field_648721d2291ff',
									3 => 'field_648721da29200',
								),
								'display' => 'seamless',
								'layout' => 'block',
								'prefix_label' => 0,
								'prefix_name' => 0,
								'acfe_seamless_style' => 0,
								'acfe_clone_modal' => 0,
								'acfe_clone_modal_close' => 0,
								'acfe_clone_modal_button' => '',
								'acfe_clone_modal_size' => 'large',
							),
						),
						'min' => '',
						'max' => '',
						'acfe_flexible_thumbnail' => '',
						'acfe_flexible_render_template' => false,
						'acfe_flexible_render_style' => false,
						'acfe_flexible_render_script' => false,
						'acfe_flexible_settings' => false,
						'acfe_flexible_settings_size' => 'medium',
						'acfe_flexible_modal_edit_size' => false,
						'acfe_flexible_category' => false,
					),
					'layout_64c2cf5dd89cc' => array(
						'key' => 'layout_64c2cf5dd89cc',
						'name' => 'video',
						'label' => 'Video',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_64c2cf67d89ce',
								'label' => 'Video',
								'name' => 'video',
								'aria-label' => '',
								'type' => 'clone',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'acfe_save_meta' => 0,
								'clone' => array(
									0 => 'field_64c2ce65b3e08',
								),
								'display' => 'seamless',
								'layout' => 'block',
								'prefix_label' => 0,
								'prefix_name' => 0,
								'acfe_seamless_style' => 0,
								'acfe_clone_modal' => 0,
								'acfe_clone_modal_close' => 0,
								'acfe_clone_modal_button' => '',
								'acfe_clone_modal_size' => 'large',
							),
						),
						'min' => '',
						'max' => '',
						'acfe_flexible_thumbnail' => '',
						'acfe_flexible_render_template' => false,
						'acfe_flexible_render_style' => false,
						'acfe_flexible_render_script' => false,
						'acfe_flexible_settings' => false,
						'acfe_flexible_settings_size' => 'medium',
						'acfe_flexible_modal_edit_size' => false,
						'acfe_flexible_category' => false,
					),
				),
				'min' => '',
				'max' => '',
				'button_label' => 'Add Section',
				'acfe_flexible_layouts_previews' => false,
			),
			array(
				'key' => 'field_647a0872af340',
				'label' => 'Demo',
				'name' => '',
				'aria-label' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_647a0879af341',
				'label' => 'Demo',
				'name' => 'demo',
				'aria-label' => '',
				'type' => 'clone',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'clone' => array(
					0 => 'field_644fc17a8680b',
				),
				'display' => 'seamless',
				'layout' => 'block',
				'prefix_label' => 0,
				'prefix_name' => 0,
				'acfe_seamless_style' => 0,
				'acfe_clone_modal' => 0,
				'acfe_clone_modal_close' => 0,
				'acfe_clone_modal_button' => '',
				'acfe_clone_modal_size' => 'large',
			),
			array(
				'key' => 'field_6485aec805c3f',
				'label' => 'Card Settings',
				'name' => '',
				'aria-label' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_6485aee205c40',
				'label' => 'Card Subtitle',
				'name' => 'card_subtitle',
				'aria-label' => '',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'default_value' => '',
				'acfe_textarea_code' => 0,
				'maxlength' => '',
				'rows' => 4,
				'placeholder' => '',
				'new_lines' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'case-studies',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'the_content',
		),
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
		'acfe_display_title' => '',
		'acfe_autosync' => '',
		'acfe_form' => 0,
		'acfe_meta' => '',
		'acfe_note' => '',
	));

endif;