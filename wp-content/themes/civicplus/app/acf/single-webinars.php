<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_64733afac92da',
		'title' => 'Single Webinasrs',
		'fields' => array(
			array(
				'key' => 'field_64733afacdc21',
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
				'key' => 'field_64733afacdc28',
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
				'key' => 'field_6473473330e37',
				'label' => 'Location and Date',
				'name' => 'location_and_date',
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
				'key' => 'field_64733afacdc30',
				'label' => 'Form',
				'name' => 'form',
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
					0 => 'field_64b150835259a',
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
				'key' => 'field_64733afacdc34',
				'label' => 'Hero Image',
				'name' => 'hero_image',
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
				'key' => 'field_64c2e191207f5',
				'label' => 'With Gradient?',
				'name' => 'with_gradient',
				'aria-label' => '',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
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
				'key' => 'field_64733afacdc3c',
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
				'delay' => 0,
			),
			array(
				'key' => 'field_6473471630e35',
				'label' => 'Panelists Title',
				'name' => 'panelists_title',
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
				'key' => 'field_647346f330e34',
				'label' => 'Panelists',
				'name' => 'panelists',
				'aria-label' => '',
				'type' => 'relationship',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'post_type' => array(
					0 => 'custom-users',
				),
				'taxonomy' => '',
				'filters' => array(
					0 => 'search',
				),
				'return_format' => '',
				'acfe_bidirectional' => array(
					'acfe_bidirectional_enabled' => '0',
				),
				'min' => '',
				'max' => '',
				'elements' => '',
			),
			array(
				'key' => 'field_6473472330e36',
				'label' => 'Host Title',
				'name' => 'host_title',
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
				'key' => 'field_6473469381e91',
				'label' => 'Host',
				'name' => 'host',
				'aria-label' => '',
				'type' => 'relationship',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'post_type' => array(
					0 => 'custom-users',
				),
				'taxonomy' => '',
				'filters' => array(
					0 => 'search',
				),
				'return_format' => 'id',
				'acfe_bidirectional' => array(
					'acfe_bidirectional_enabled' => '0',
				),
				'min' => '',
				'max' => '',
				'elements' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'webinars',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'left',
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