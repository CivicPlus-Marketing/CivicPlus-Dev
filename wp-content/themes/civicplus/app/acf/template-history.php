<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_64ad84b3a97ff',
		'title' => 'Template History',
		'fields' => array(
			array(
				'key' => 'field_64ad84b3ab0a7',
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
				'key' => 'field_64ad84b3ab0ad',
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
				'sub_fields' => array(
					array(
						'key' => 'field_64ad9173a26b7',
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
						'key' => 'field_64ad9188a26b8',
						'label' => 'Subtitle',
						'name' => 'subtitle',
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
						'toolbar' => 'basic',
						'media_upload' => 0,
						'delay' => 1,
					),
					array(
						'key' => 'field_64ad91d9a26bc',
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
					),
					array(
						'key' => 'field_64ad91a1a26b9',
						'label' => 'Columns',
						'name' => 'columns',
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
						'pagination' => 0,
						'min' => 0,
						'max' => 0,
						'collapsed' => '',
						'button_label' => 'Add Column',
						'rows_per_page' => 20,
						'sub_fields' => array(
							array(
								'key' => 'field_64ad91b8a26ba',
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
								'parent_repeater' => 'field_64ad91a1a26b9',
							),
							array(
								'key' => 'field_64ad91c0a26bb',
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
								'parent_repeater' => 'field_64ad91a1a26b9',
							),
						),
					),
					array(
						'key' => 'field_64ad92a49f900',
						'label' => 'Images',
						'name' => 'images',
						'aria-label' => '',
						'type' => 'gallery',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'acfe_save_meta' => 0,
						'return_format' => 'id',
						'library' => 'all',
						'min' => '',
						'max' => '',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
						'insert' => 'append',
						'preview_size' => 'medium',
					),
				),
				'acfe_group_modal' => 0,
				'acfe_group_modal_close' => 0,
				'acfe_group_modal_button' => '',
				'acfe_group_modal_size' => 'large',
			),
			array(
				'key' => 'field_64ad84b3ab0b0',
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
				'key' => 'field_64ad84b3ab0b3',
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
								'key' => 'field_64ad84b3ac978',
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
					'layout_64ad866aa26b1' => array(
						'key' => 'layout_64ad866aa26b1',
						'name' => 'history',
						'label' => 'History',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_64ad86b4a26b3',
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
								'collapsed' => '',
								'button_label' => 'Add Row',
								'rows_per_page' => 20,
								'sub_fields' => array(
									array(
										'key' => 'field_64ad86cda26b4',
										'label' => 'Date',
										'name' => 'date',
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
										'parent_repeater' => 'field_64ad86b4a26b3',
									),
									array(
										'key' => 'field_64ad86d7a26b5',
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
										'parent_repeater' => 'field_64ad86b4a26b3',
									),
									array(
										'key' => 'field_64ad884da26b6',
										'label' => 'Text',
										'name' => 'text',
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
										'rows' => '',
										'placeholder' => '',
										'new_lines' => 'wpautop',
										'parent_repeater' => 'field_64ad86b4a26b3',
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
				'key' => 'field_64ad84b3ab0b5',
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
				'key' => 'field_64ad84b3ab0b8',
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
					'value' => 'template-history.blade.php',
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