<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_64af1dd093f94',
		'title' => 'Template Careers',
		'fields' => array(
			array(
				'key' => 'field_64af1dd095b94',
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
				'key' => 'field_64af1dd095b9a',
				'label' => 'Hero',
				'name' => 'hero',
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
					0 => 'field_645014f441a37',
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
				'key' => 'field_64af1dd095b9d',
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
				'key' => 'field_64af1dd095ba0',
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
					'layout_64ab4423f050c' => array(
						'key' => 'layout_64ab4423f050c',
						'name' => 'image_text',
						'label' => 'Image Text',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_64af1dd0974a1',
								'label' => 'Content',
								'name' => 'content',
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
									0 => 'field_64ab42a93d0d5',
									1 => 'field_64ab42c53d0d6',
									2 => 'field_64ab43023d0d7',
									3 => 'field_64ab43113d0d8',
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
					'layout_64ab47fced3c0' => array(
						'key' => 'layout_64ab47fced3c0',
						'name' => 'crads',
						'label' => 'Crads',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_64af1dd0974a8',
								'label' => 'Title',
								'name' => 'title',
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
								'key' => 'field_64af1dd0974ab',
								'label' => 'List',
								'name' => 'list',
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
								'layout' => 'block',
								'min' => 0,
								'max' => 0,
								'collapsed' => 'field_64ab482eed3c4',
								'button_label' => 'Add Card',
								'rows_per_page' => 20,
								'sub_fields' => array(
									array(
										'key' => 'field_64af1dd0988eb',
										'label' => 'Image',
										'name' => 'image',
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
										'return_format' => '',
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
										'parent_repeater' => 'field_64af1dd0974ab',
									),
									array(
										'key' => 'field_64af1dd0988ef',
										'label' => 'Title',
										'name' => 'title',
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
										'parent_repeater' => 'field_64af1dd0974ab',
									),
									array(
										'key' => 'field_64af1dd0988f2',
										'label' => 'Description',
										'name' => 'description',
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
										'parent_repeater' => 'field_64af1dd0974ab',
									),
								),
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
					'layout_64af1e5385c05' => array(
						'key' => 'layout_64af1e5385c05',
						'name' => 'process',
						'label' => 'Process',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_64af1e6385c07',
								'label' => 'Title',
								'name' => 'title',
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
								'key' => 'field_64af1e6785c08',
								'label' => 'Subtitle',
								'name' => 'subtitle',
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
								'key' => 'field_64af1e6d85c09',
								'label' => 'List',
								'name' => 'list',
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
								'layout' => 'table',
								'min' => 0,
								'max' => 0,
								'collapsed' => '',
								'button_label' => 'Add Setp',
								'rows_per_page' => 20,
								'sub_fields' => array(
									array(
										'key' => 'field_64af1e8a85c0a',
										'label' => 'Title',
										'name' => 'title',
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
										'parent_repeater' => 'field_64af1e6d85c09',
									),
									array(
										'key' => 'field_64af1ea685c0b',
										'label' => 'Description',
										'name' => 'description',
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
										'parent_repeater' => 'field_64af1e6d85c09',
									),
								),
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
					'layout_64af1edc8310d' => array(
						'key' => 'layout_64af1edc8310d',
						'name' => 'values',
						'label' => 'Values',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_64af1ee68310f',
								'label' => 'Title',
								'name' => 'title',
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
								'key' => 'field_64af1eeb83110',
								'label' => 'List',
								'name' => 'list',
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
								'layout' => 'table',
								'min' => 0,
								'max' => 0,
								'collapsed' => '',
								'button_label' => 'Add Value',
								'rows_per_page' => 20,
								'sub_fields' => array(
									array(
										'key' => 'field_64af1ef383111',
										'label' => 'Title',
										'name' => 'title',
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
										'parent_repeater' => 'field_64af1eeb83110',
									),
									array(
										'key' => 'field_64af1ef783112',
										'label' => 'Description',
										'name' => 'description',
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
										'parent_repeater' => 'field_64af1eeb83110',
									),
								),
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
					'layout_64af1f18ae4de' => array(
						'key' => 'layout_64af1f18ae4de',
						'name' => 'more',
						'label' => 'More',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_64af1f18ae4df',
								'label' => 'Title',
								'name' => 'title',
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
								'key' => 'field_64af1f18ae4e0',
								'label' => 'List',
								'name' => 'list',
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
								'layout' => 'block',
								'min' => 0,
								'max' => 0,
								'collapsed' => 'field_64ab482eed3c4',
								'button_label' => 'Add Card',
								'rows_per_page' => 20,
								'sub_fields' => array(
									array(
										'key' => 'field_64af1f18ae4e1',
										'label' => 'Image',
										'name' => 'image',
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
										'return_format' => 'array',
										'library' => 'all',
										'acfe_thumbnail' => 0,
										'min_width' => '',
										'min_height' => '',
										'min_size' => '',
										'max_width' => '',
										'max_height' => '',
										'max_size' => '',
										'mime_types' => '',
										'preview_size' => 'medium',
										'parent_repeater' => 'field_64af1f18ae4e0',
									),
									array(
										'key' => 'field_64af1f18ae4e2',
										'label' => 'Title',
										'name' => 'title',
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
										'parent_repeater' => 'field_64af1f18ae4e0',
									),
									array(
										'key' => 'field_64af1f18ae4e3',
										'label' => 'Description',
										'name' => 'description',
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
										'parent_repeater' => 'field_64af1f18ae4e0',
									),
								),
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
				'key' => 'field_64af1dd095ba3',
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
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_64af1dd095ba5',
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
		),
		'location' => array(
			array(
				array(
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-careers.blade.php',
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