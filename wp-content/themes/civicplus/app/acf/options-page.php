<?php
acf_add_options_page(array(
	'menu_slug' => 'civicplus-settings',
	'page_title' => 'CivicPlus Settings',
	'active' => true,
	'menu_title' => 'CivicPlus Settings',
	'capability' => 'edit_posts',
	'parent_slug' => '',
	'position' => '',
	'icon_url' => '',
	'redirect' => true,
	'post_id' => 'options',
	'autoload' => false,
	'update_button' => 'Update',
	'updated_message' => 'Options Updated',
));

