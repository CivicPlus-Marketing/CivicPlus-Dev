<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_646338f12a50f',
		'title' => 'Category',
		'fields' => array(
			array(
				'key' => 'field_64633ef71a4dd',
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
					0 => 'field_646343786e299',
					1 => 'field_646343786e29a',
					2 => 'field_646343786e29b',
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
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => 'all',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'left',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
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