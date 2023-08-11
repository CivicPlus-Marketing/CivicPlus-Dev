<?php

add_action( 'init', 'create_taxonomy' );
function create_taxonomy() {

	/**
	 * Case Studies Taxonomies
	 */
	register_taxonomy( 'solutions', [ 'case-studies' ], [
		'label'             => 'solutions',
		'labels'            => [
			'name'              => 'Solutions',
			'singular_name'     => 'Solution',
			'search_items'      => 'Search Solutions',
			'all_items'         => 'All Solutions',
			'view_item '        => 'View Solution',
			'parent_item'       => 'Parent Solution',
			'parent_item_colon' => 'Parent Solution:',
			'edit_item'         => 'Edit Solution',
			'update_item'       => 'Update Solution',
			'add_new_item'      => 'Add New Solution',
			'new_item_name'     => 'Solution Name',
			'menu_name'         => 'Solutions',
			'back_to_items'     => '← Back to Solutions',
		],
		'description'       => '',
		'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'case-studies' ),
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		'show_admin_column' => true,
		'show_in_rest'      => null,
		'rest_base'         => null,
	] );

	register_taxonomy( 'population', [ 'case-studies' ], [
		'label'              => 'population',
		'labels'             => [
			'name'              => 'Population',
			'singular_name'     => 'Population',
			'search_items'      => 'Search Population',
			'all_items'         => 'All Population',
			'view_item '        => 'View Population',
			'parent_item'       => 'Parent Population',
			'parent_item_colon' => 'Parent Population:',
			'edit_item'         => 'Edit Population',
			'update_item'       => 'Update Population',
			'add_new_item'      => 'Add New Population',
			'new_item_name'     => 'Population Name',
			'menu_name'         => 'Population',
			'back_to_items'     => '← Back to Population',
		],
		'description'        => '',
		'public'             => true,
		'publicly_queryable' => false,
		'hierarchical'       => true,
		'rewrite'            => true,
		'capabilities'       => array(),
		'meta_box_cb'        => null,
		'show_admin_column'  => true,
		'show_in_rest'       => null,
		'rest_base'          => null,
	] );

	register_taxonomy( 'municipality', [ 'case-studies' ], [
		'label'              => 'municipality',
		'labels'             => [
			'name'              => 'Municipality',
			'singular_name'     => 'Municipality',
			'search_items'      => 'Search Municipality',
			'all_items'         => 'All Municipality',
			'view_item '        => 'View Municipality',
			'parent_item'       => 'Parent Municipality',
			'parent_item_colon' => 'Parent Municipality:',
			'edit_item'         => 'Edit Municipality',
			'update_item'       => 'Update Municipality',
			'add_new_item'      => 'Add New Municipality',
			'new_item_name'     => 'Municipality Name',
			'menu_name'         => 'Municipality',
			'back_to_items'     => '← Back to Municipality',
		],
		'description'        => '',
		'public'             => true,
		'publicly_queryable' => false,
		'hierarchical'       => true,
		'rewrite'            => true,
		'capabilities'       => array(),
		'meta_box_cb'        => null,
		'show_admin_column'  => true,
		'show_in_rest'       => null,
		'rest_base'          => null,
	] );

	/**
	 * Brochures Taxonomies
	 */
	register_taxonomy( 'brochures-category', [ 'brochures' ], [
		'label'             => 'brochures-category',
		'labels'            => [
			'name'              => 'Categories',
			'singular_name'     => 'Category',
			'search_items'      => 'Search Categories',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'Category Name',
			'menu_name'         => 'Categories',
			'back_to_items'     => '← Back to Categories',
		],
		'description'       => '',
		'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'brochures', 'hierarchical' => true ),
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		'show_admin_column' => true,
		'show_in_rest'      => null,
		'rest_base'         => null,
		'query_var'     => true,
	] );

	/**
	 * White Papers Taxonomies
	 */
	register_taxonomy( 'white-papers-category', [ 'white-papers' ], [
		'label'             => 'white-papers-category',
		'labels'            => [
			'name'              => 'Categories',
			'singular_name'     => 'Category',
			'search_items'      => 'Search Categories',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'Category Name',
			'menu_name'         => 'Categories',
			'back_to_items'     => '← Back to Categories',
		],
		'description'       => '',
		'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'white-papers' ),
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		'show_admin_column' => true,
		'show_in_rest'      => null,
		'rest_base'         => null,
	] );

	/**
	 * Webinars Taxonomies
	 */
	register_taxonomy( 'webinars-category', [ 'webinars' ], [
		'label'             => 'webinars-category',
		'labels'            => [
			'name'              => 'Categories',
			'singular_name'     => 'Category',
			'search_items'      => 'Search Categories',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'Category Name',
			'menu_name'         => 'Categories',
			'back_to_items'     => '← Back to Categories',
		],
		'description'       => '',
		'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'webinars' ),
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		'show_admin_column' => true,
		'show_in_rest'      => null,
		'rest_base'         => null,
	] );

	/**
	 * Ebooks Taxonomies
	 */
	register_taxonomy( 'ebooks-category', [ 'ebooks' ], [
		'label'             => 'ebooks-category',
		'labels'            => [
			'name'              => 'Categories',
			'singular_name'     => 'Category',
			'search_items'      => 'Search Categories',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'Category Name',
			'menu_name'         => 'Categories',
			'back_to_items'     => '← Back to Categories',
		],
		'description'       => '',
		'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'ebooks' ),
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		'show_admin_column' => true,
		'show_in_rest'      => null,
		'rest_base'         => null,
	] );

	/**
	 * Fact Sheets Taxonomies
	 */
	register_taxonomy( 'fact-sheets-category', [ 'fact-sheets' ], [
		'label'             => 'fact-sheets-category',
		'labels'            => [
			'name'              => 'Categories',
			'singular_name'     => 'Category',
			'search_items'      => 'Search Categories',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'Category Name',
			'menu_name'         => 'Categories',
			'back_to_items'     => '← Back to Categories',
		],
		'description'       => '',
		'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'fact-sheets' ),
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		'show_admin_column' => true,
		'show_in_rest'      => null,
		'rest_base'         => null,
	] );

	/**
	 * Tool Kit Taxonomies
	 */
	register_taxonomy( 'tool-kit-category', [ 'tool-kit' ], [
		'label'             => 'tool-kit-category',
		'labels'            => [
			'name'              => 'Categories',
			'singular_name'     => 'Category',
			'search_items'      => 'Search Categories',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'Category Name',
			'menu_name'         => 'Categories',
			'back_to_items'     => '← Back to Categories',
		],
		'description'       => '',
		'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'tool-kit' ),
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		'show_admin_column' => true,
		'show_in_rest'      => null,
		'rest_base'         => null,
	] );

	/**
	 * Infographics Taxonomies
	 */
	register_taxonomy( 'infographics-category', [ 'infographics' ], [
		'label'             => 'infographics-category',
		'labels'            => [
			'name'              => 'Categories',
			'singular_name'     => 'Category',
			'search_items'      => 'Search Categories',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'Category Name',
			'menu_name'         => 'Categories',
			'back_to_items'     => '← Back to Categories',
		],
		'description'       => '',
		'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'infographics' ),
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		'show_admin_column' => true,
		'show_in_rest'      => null,
		'rest_base'         => null,
	] );

	/**
	 * Videos Taxonomies
	 */
	register_taxonomy( 'videos-category', [ 'videos' ], [
		'label'             => 'videos-category',
		'labels'            => [
			'name'              => 'Categories',
			'singular_name'     => 'Category',
			'search_items'      => 'Search Categories',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'Category Name',
			'menu_name'         => 'Categories',
			'back_to_items'     => '← Back to Categories',
		],
		'description'       => '',
		'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'videos' ),
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		'show_admin_column' => true,
		'show_in_rest'      => null,
		'rest_base'         => null,
	] );

	/**
	 * News Taxonomies
	 */
	register_taxonomy( 'news-category', [ 'news' ], [
		'label'             => 'news-category',
		'labels'            => [
			'name'              => 'Categories',
			'singular_name'     => 'Category',
			'search_items'      => 'Search Categories',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'Category Name',
			'menu_name'         => 'Categories',
			'back_to_items'     => '← Back to Categories',
		],
		'description'       => '',
		'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'news' ),
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		'show_admin_column' => true,
		'show_in_rest'      => null,
		'rest_base'         => null,
	] );

}

