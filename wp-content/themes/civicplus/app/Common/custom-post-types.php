<?php

/**
 * Add Custom post types
 */
add_action( 'init', 'register_post_types' );

function register_post_types() {

	/**
	 * Case Studies
	 */
	register_post_type( 'case-studies', [
		'label'         => 'case-studies',
		'labels'        => [
			'name'               => 'Case Study',
			'singular_name'      => 'Case Study',
			'add_new'            => 'Add Case Study',
			'add_new_item'       => 'Add Case Study',
			'edit_item'          => 'Edit Case Study',
			'new_item'           => 'New Case Study',
			'view_item'          => 'View Case Study',
			'search_items'       => 'Search Case Studies',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Empty',
			'menu_name'          => 'Case Studies',
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => true,
		'show_in_rest'  => null,
		'rest_base'     => null,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-analytics',
		'hierarchical'  => false,
		'supports'      => [
			'title',
			'author',
			'editor',
			'thumbnail',
			'revisions',
			'page-attributes',
			'post-formats'
		],
		'taxonomies'    => [ 'solutions', 'population', 'municipality' ],
		'has_archive'   => 'case-studies',
		'rewrite'       => array( 'slug' => 'case-studies/%category%' ),
		'query_var'     => true,
	] );

	/**
	 * Brochures
	 */
	register_post_type( 'brochures', [
		'label'         => 'brochures',
		'labels'        => [
			'name'               => 'Brochure',
			'singular_name'      => 'Brochure',
			'add_new'            => 'Add Brochure',
			'add_new_item'       => 'Add Brochure',
			'edit_item'          => 'Edit Brochure',
			'new_item'           => 'New Brochure',
			'view_item'          => 'View Brochure',
			'search_items'       => 'Search Brochures',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Empty',
			'menu_name'          => 'Brochures',
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => true,
		'show_in_rest'  => null,
		'rest_base'     => null,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-format-aside',
		'hierarchical'  => false,
		'supports'      => [
			'title',
			'author',
			'editor',
			'thumbnail',
			'revisions',
			'page-attributes',
			'post-formats'
		],
		'taxonomies'    => [ 'brochures-category' ],
		'has_archive'   => 'brochures',
		'rewrite'       => array(
			'slug'       => 'brochures/%category%',
			'with_front' => true,
		),
		'query_var'     => true,
	] );

	/**
	 * White Papers
	 */
	register_post_type( 'white-papers', [
		'label'         => 'white-papers',
		'labels'        => [
			'name'               => 'White Paper',
			'singular_name'      => 'White Paper',
			'add_new'            => 'Add White Paper',
			'add_new_item'       => 'Add White Paper',
			'edit_item'          => 'Edit White Papers',
			'new_item'           => 'New White Papers',
			'view_item'          => 'View White  Paper',
			'search_items'       => 'Search White Papers',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Empty',
			'menu_name'          => 'White Papers',
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => true,
		'show_in_rest'  => null,
		'rest_base'     => null,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-media-document',
		'hierarchical'  => false,
		'supports'      => [
			'title',
			'author',
			'editor',
			'thumbnail',
			'revisions',
			'page-attributes',
			'post-formats'
		],
		'taxonomies'    => [ 'white-papers-category' ],
		'has_archive'   => 'white-papers',
		'rewrite'       => array( 'slug' => 'white-papers/%category%' ),
		'query_var'     => true,
	] );

	/**
	 * Webinars
	 */
	register_post_type( 'webinars', [
		'label'         => 'webinars',
		'labels'        => [
			'name'               => 'Webinar',
			'singular_name'      => 'Webinar',
			'add_new'            => 'Add Webinar',
			'add_new_item'       => 'Add Webinar',
			'edit_item'          => 'Edit Webinar',
			'new_item'           => 'New Webinar',
			'view_item'          => 'View Webinars',
			'search_items'       => 'Search Webinars',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Empty',
			'menu_name'          => 'Webinars',
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => true,
		'show_in_rest'  => null,
		'rest_base'     => null,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-megaphone',
		'hierarchical'  => false,
		'supports'      => [
			'title',
			'author',
			'thumbnail',
			'revisions',
			'page-attributes',
			'post-formats'
		],
		'taxonomies'    => [ 'webinars-category' ],
		'has_archive'   => 'webinars',
		'rewrite'       => array( 'slug' => 'webinars/%category%' ),
		'query_var'     => true,
	] );

	/**
	 * ebooks
	 */
	register_post_type( 'ebooks', [
		'label'         => 'ebooks',
		'labels'        => [
			'name'               => 'eBook',
			'singular_name'      => 'eBook',
			'add_new'            => 'Add eBook',
			'add_new_item'       => 'Add eBook',
			'edit_item'          => 'Edit eBook',
			'new_item'           => 'New eBook',
			'view_item'          => 'View eBook',
			'search_items'       => 'Search eBooks',
			'not_found'          => 'Not Found',
			'not_found_in_trash' => 'Empty',
			'menu_name'          => 'eBooks',
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => true,
		'show_in_rest'  => null,
		'rest_base'     => null,
		'menu_position' => 10,
		'menu_icon'     => 'dashicons-tablet',
		'hierarchical'  => false,
		'supports'      => [
			'title',
			'author',
			'thumbnail',
			'revisions',
			'page-attributes',
			'post-formats'
		],
		'taxonomies'    => [ 'ebooks-category' ],
		'has_archive'   => 'ebooks',
		'rewrite'       => array( 'slug' => 'ebooks/%category%' ),
		'query_var'     => true,
	] );

	/**
	 * Fact Sheets
	 */
	register_post_type( 'fact-sheets', [
		'label'         => 'fact-sheets',
		'labels'        => [
			'name'               => 'Fact Sheet',
			'singular_name'      => 'Fact Sheet',
			'add_new'            => 'Add Fact Sheet',
			'add_new_item'       => 'Add Fact Sheet',
			'edit_item'          => 'Edit Fact Sheet',
			'new_item'           => 'New Fact Sheet',
			'view_item'          => 'View Fact Sheet',
			'search_items'       => 'Search Fact Shees',
			'not_found'          => 'Not Found',
			'not_found_in_trash' => 'Empty',
			'menu_name'          => 'Fact Sheet',
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => true,
		'show_in_rest'  => null,
		'rest_base'     => null,
		'menu_position' => 10,
		'menu_icon'     => 'dashicons-media-text',
		'hierarchical'  => false,
		'supports'      => [
			'title',
			'author',
			'thumbnail',
			'revisions',
			'page-attributes',
			'post-formats'
		],
		'taxonomies'    => [ 'fact-sheets-category' ],
		'has_archive'   => 'fact-sheets',
		'rewrite'       => array( 'slug' => 'fact-sheets/%category%' ),
		'query_var'     => true,
	] );

	/**
	 * Tool Kit
	 */
	register_post_type( 'tool-kit', [
		'label'         => 'tool-kit',
		'labels'        => [
			'name'               => 'Tool Kit',
			'singular_name'      => 'Tool Kit',
			'add_new'            => 'Add Tool Kit',
			'add_new_item'       => 'Add Tool Kit',
			'edit_item'          => 'Edit Tool Kit',
			'new_item'           => 'New Tool Kit',
			'view_item'          => 'View Tool Kit',
			'search_items'       => 'Search Tool Kit',
			'not_found'          => 'Not Found',
			'not_found_in_trash' => 'Empty',
			'menu_name'          => 'Tool Kit',
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => true,
		'show_in_rest'  => null,
		'rest_base'     => null,
		'menu_position' => 10,
		'menu_icon'     => 'dashicons-archive',
		'hierarchical'  => false,
		'supports'      => [
			'title',
			'author',
			'thumbnail',
			'revisions',
			'page-attributes',
			'post-formats'
		],
		'taxonomies'    => [ 'tool-kit-category' ],
		'has_archive'   => 'tool-kit',
		'rewrite'       => array( 'slug' => 'tool-kit/%category%' ),
		'query_var'     => true,
	] );

	/**
	 * Infographics
	 */
	register_post_type( 'infographics', [
		'label'         => 'infographics',
		'labels'        => [
			'name'               => 'Infographic',
			'singular_name'      => 'Infographic',
			'add_new'            => 'Add Infographic',
			'add_new_item'       => 'Add Infographic',
			'edit_item'          => 'Edit Infographic',
			'new_item'           => 'New Infographic',
			'view_item'          => 'View Infographic',
			'search_items'       => 'Search Infographic',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Empty',
			'menu_name'          => 'Infographics',
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => true,
		'show_in_rest'  => null,
		'rest_base'     => null,
		'menu_position' => 10,
		'menu_icon'     => 'dashicons-welcome-learn-more',
		'hierarchical'  => false,
		'supports'      => [
			'title',
			'author',
			'thumbnail',
			'revisions',
			'page-attributes',
			'post-formats'
		],
		'taxonomies'    => [ 'infographics-category' ],
		'has_archive'   => 'infographics',
		'rewrite'       => array( 'slug' => 'infographics/%category%' ),
		'query_var'     => true,
	] );

	/**
	 * Videos
	 */
	register_post_type( 'videos', [
		'label'         => 'videos',
		'labels'        => [
			'name'               => 'Video',
			'singular_name'      => 'Video',
			'add_new'            => 'Add Video',
			'add_new_item'       => 'Add Video',
			'edit_item'          => 'Edit Video',
			'new_item'           => 'New Video',
			'view_item'          => 'View Video',
			'search_items'       => 'Search Videos',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Empty',
			'menu_name'          => 'Videos',
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => true,
		'show_in_rest'  => null,
		'rest_base'     => null,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-youtube',
		'hierarchical'  => false,
		'supports'      => [
			'title',
			'author',
			'thumbnail',
			'revisions',
			'page-attributes',
			'post-formats'
		],
		'taxonomies'    => [ 'videos-category' ],
		'has_archive'   => 'videos',
		'rewrite'       => array( 'slug' => 'videos/%category%' ),
		'query_var'     => true,
	] );

	/**
	 * News
	 */
	register_post_type( 'news', [
		'label'         => 'news',
		'labels'        => [
			'name'               => 'News',
			'singular_name'      => 'News',
			'add_new'            => 'Add News',
			'add_new_item'       => 'Add News',
			'edit_item'          => 'Edit News',
			'new_item'           => 'New News',
			'view_item'          => 'View News',
			'search_items'       => 'Search News',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Empty',
			'menu_name'          => 'News',
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => true,
		'show_in_rest'  => null,
		'rest_base'     => null,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-rss',
		'hierarchical'  => false,
		'supports'      => [
			'title',
			'author',
			'editor',
			'thumbnail',
			'revisions',
			'page-attributes',
			'post-formats'
		],
		'taxonomies'    => [ 'news-ategory' ],
		'has_archive'   => 'news',
		'rewrite'       => array( 'slug' => 'news/%category%' ),
		'query_var'     => true,
	] );

	/**
	 * Custom Users
	 */
	register_post_type( 'custom-users', [
		'label'              => 'custom-users',
		'labels'             => [
			'name'               => 'All Custom Users',
			'singular_name'      => 'Custom User',
			'add_new'            => 'Add Custom User',
			'add_new_item'       => 'New Custom User',
			'edit_item'          => 'Edit Custom User',
			'new_item'           => 'New Custom User',
			'view_item'          => 'View Custom User',
			'search_items'       => 'Search Custom Users',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Custom Users',
		],
		'description'        => '',
		'public'             => true,
		'show_in_menu'       => true,
		'menu_position'      => 15,
		'menu_icon'          => 'dashicons-groups',
		'hierarchical'       => false,
		'supports'           => [
			'title',
			'author',
			'thumbnail',
			'custom-fields',
			'revisions',
		],
		'has_archive'        => false,
		'rewrite'            => false,
		'query_var'          => true,
		'publicly_queryable' => false,
	] );

	/**
	 * HubSpot Accounts
	 */
	register_post_type( 'hubspot-accounts', [
		'label'              => 'hubspot-accounts',
		'labels'             => [
			'name'               => 'All HubSpot Accounts',
			'singular_name'      => 'HubSpot Account',
			'add_new'            => 'Add HubSpot Account',
			'add_new_item'       => 'New HubSpot Account',
			'edit_item'          => 'Edit HubSpot Account',
			'new_item'           => 'New HubSpot Account',
			'view_item'          => 'View HubSpot Account',
			'search_items'       => 'Search HubSpot Accounts',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'HubSpot Accounts',
		],
		'description'        => '',
		'public'             => true,
		'show_in_menu'       => true,
		'menu_position'      => 15,
		'menu_icon'          => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IS0tIFVwbG9hZGVkIHRvOiBTVkcgUmVwbywgd3d3LnN2Z3JlcG8uY29tLCBHZW5lcmF0b3I6IFNWRyBSZXBvIE1peGVyIFRvb2xzIC0tPgo8c3ZnIGZpbGw9IiMwMDAwMDAiIHdpZHRoPSI4MDBweCIgaGVpZ2h0PSI4MDBweCIgdmlld0JveD0iMCAwIDI0IDI0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHJvbGU9ImltZyI+PHRpdGxlPkh1YlNwb3QgaWNvbjwvdGl0bGU+PHBhdGggZD0iTTE4LjE2NCA3LjkzMVY1LjA4NWEyLjE5OCAyLjE5OCAwIDAgMCAxLjI2Ni0xLjk3OFYzLjA0QTIuMTk5IDIuMTk5IDAgMCAwIDE3LjIzOC44NDdoLS4wNjdhMi4xOTkgMi4xOTkgMCAwIDAtMi4xOTMgMi4xOTJ2LjA2N2EyLjE5NiAyLjE5NiAwIDAgMCAxLjI1MiAxLjk3M2wuMDEzLjAwNnYyLjg1MmE2LjIyIDYuMjIgMCAwIDAtMi45NjkgMS4zMWwuMDEyLS4wMDktNy44MjgtNi4wOTZhMi40OTcgMi40OTcgMCAxIDAtMS4xNTcgMS41MTVsLS4wMTIuMDA2IDcuNjk2IDUuOTkxYTYuMTc2IDYuMTc2IDAgMCAwLTEuMDM4IDMuNDQ2YzAgMS4zNDMuNDI1IDIuNTg4IDEuMTQ3IDMuNjA2bC0uMDEzLS4wMTktMi4zNDIgMi4zNDJhMS45NjggMS45NjggMCAwIDAtLjU4LS4wOTVoLS4wMDJhMi4wMzMgMi4wMzMgMCAxIDAgMi4wMzMgMi4wMzMgMS45NzggMS45NzggMCAwIDAtLjA5OS0uNTk1bC4wMDQuMDE0IDIuMzE3LTIuMzE3YTYuMjQ3IDYuMjQ3IDAgMSAwIDQuNzgyLTExLjEzM2wtLjAzNi0uMDA1em0tLjk2NCA5LjM3N2EzLjIwNiAzLjIwNiAwIDEgMSAzLjIxNC0zLjIwNnYuMDAyYTMuMjA2IDMuMjA2IDAgMCAxLTMuMjA2IDMuMjA2eiIvPjwvc3ZnPg==',
		'hierarchical'       => false,
		'supports'           => [
			'title',
			'author',
			'thumbnail',
			'custom-fields',
			'revisions',
		],
		'has_archive'        => false,
		'rewrite'            => false,
		'query_var'          => true,
		'publicly_queryable' => false,
	] );

	/**
	 * Awards
	 */
	register_post_type( 'awards', [
		'label'              => 'awards',
		'labels'             => [
			'name'               => 'All Awards',
			'singular_name'      => 'Award',
			'add_new'            => 'Add Award',
			'add_new_item'       => 'New Award',
			'edit_item'          => 'Edit Award',
			'new_item'           => 'New Award',
			'view_item'          => 'View Award',
			'search_items'       => 'Search Awards',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Awards',
		],
		'description'        => '',
		'public'             => true,
		'show_in_menu'       => true,
		'menu_position'      => 15,
		'menu_icon'          => 'dashicons-superhero-alt',
		'hierarchical'       => false,
		'supports'           => [
			'title',
			'author',
			'thumbnail',
			'custom-fields',
			'revisions',
		],
		'has_archive'        => false,
		'rewrite'            => false,
		'query_var'          => true,
		'publicly_queryable' => false,
	] );
}

/**
 * Resources post rewrite rules
 * @param $rules
 *
 * @return array
 */
function mmp_rewrite_rules( $rules ) {
	$newRules                           = array();

	/*Blog*/
	$newRules['blog/page/([0-9]{1,})/?$'] = 'index.php?post_type=blog&paged=$matches[1]';
	$newRules['blog/(.+)/(.+)/?$'] = 'index.php?name=$matches[2]';

	/*Case Studies*/
	$newRules['case-studies/page/([0-9]{1,})/?$'] = 'index.php?post_type=case-studies&paged=$matches[1]';
	$newRules['case-studies/(.+)/(.+)/?$'] = 'index.php?case-studies=$matches[2]';
	$newRules['case-studies/(.+)/?$']      = 'index.php?solutions=$matches[1]';

	/*Brochures*/
	$newRules['brochures/page/([0-9]{1,})/?$'] = 'index.php?post_type=brochures&paged=$matches[1]';
	$newRules['brochures/(.+)/(.+)/?$'] = 'index.php?brochures=$matches[2]';
	$newRules['brochures/(.+)/?$']      = 'index.php?brochures-category=$matches[1]';

	/*White Papers*/
	$newRules['white-papers/page/([0-9]{1,})/?$'] = 'index.php?post_type=white-papers&paged=$matches[1]';
	$newRules['white-papers/(.+)/(.+)/?$'] = 'index.php?white-papers=$matches[2]';
	$newRules['white-papers/(.+)/?$']      = 'index.php?white-papers-category=$matches[1]';

	/*Wbinars*/
	$newRules['webinars/page/([0-9]{1,})/?$'] = 'index.php?post_type=webinars&paged=$matches[1]';
	$newRules['webinars/(.+)/(.+)/?$'] = 'index.php?webinars=$matches[2]';
	$newRules['weninars/(.+)/?$']      = 'index.php?webinars-category=$matches[1]';

	/*eBooks*/
	$newRules['ebooks/page/([0-9]{1,})/?$'] = 'index.php?post_type=ebooks&paged=$matches[1]';
	$newRules['ebooks/(.+)/(.+)/?$'] = 'index.php?ebooks=$matches[2]';
	$newRules['ebooks/(.+)/?$']      = 'index.php?ebooks-category=$matches[1]';

	/*Fact Sheets*/
	$newRules['fact-sheets/page/([0-9]{1,})/?$'] = 'index.php?post_type=fact-sheets&paged=$matches[1]';
	$newRules['fact-sheets/(.+)/(.+)/?$'] = 'index.php?fact-sheets=$matches[2]';
	$newRules['fact-sheets/(.+)/?$']      = 'index.php?fact-sheets-category=$matches[1]';

	/*Tool Kit*/
	$newRules['tool-kit/page/([0-9]{1,})/?$'] = 'index.php?post_type=tool-kit&paged=$matches[1]';
	$newRules['tool-kit/(.+)/(.+)/?$'] = 'index.php?tool-kit=$matches[2]';
	$newRules['tool-kit/(.+)/?$']      = 'index.php?tool-kit-category=$matches[1]';

	/*Infographics*/
	$newRules['infographics/page/([0-9]{1,})/?$'] = 'index.php?post_type=infographics&paged=$matches[1]';
	$newRules['infographics/(.+)/(.+)/?$'] = 'index.php?infographics=$matches[2]';
	$newRules['infographics/(.+)/?$']      = 'index.php?infographics-category=$matches[1]';

	/*Videos*/
	$newRules['videos/page/([0-9]{1,})/?$'] = 'index.php?post_type=videos&paged=$matches[1]';
	$newRules['videos/(.+)/(.+)/?$'] = 'index.php?videos=$matches[2]';
	$newRules['videos/(.+)/?$']      = 'index.php?videos-category=$matches[1]';

	/*News*/
	$newRules['news/page/([0-9]{1,})/?$'] = 'index.php?post_type=news&paged=$matches[1]';
	$newRules['news/(.+)/(.+)/?$'] = 'index.php?news=$matches[2]';
	$newRules['news/(.+)/?$']      = 'index.php?news-category=$matches[1]';

	return array_merge( $newRules, $rules );
}
add_filter( 'rewrite_rules_array', 'mmp_rewrite_rules' );

/**
 * Change blog post link
 *
 * @param $args
 * @param $post_type
 *
 * @return mixed
 */
function post_to_blog( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['labels'] = [
			'name'      => 'Blog',
			'menu_name' => 'Blog',
		];
	}

	return $args;
}

/**
 * Change blog post link
 *
 * @param  string  $permalink  The site's permalink structure.
 * @param  WP_Post  $post  The post in question.
 * @param  bool  $leavename  Whether to keep the post name.
 */
function cps_pre_post_link( $permalink, $post, $leavename ) {
	if ( $post instanceof WP_Post && $post->post_type == 'post' ) {
		$permalink = '/blog' . $permalink;
	}

	return $permalink;
}

add_filter( 'register_post_type_args', 'post_to_blog', 1, 2 );


add_filter( 'pre_post_link', 'cps_pre_post_link', 20, 3 );
add_filter( 'post_rewrite_rules', 'cps_post_rewrite_rules' );

/**
 * @param  array  $post_rewrite  The rewrite rules for posts.
 */
function cps_post_rewrite_rules( $post_rewrite ) {
	if ( is_array( $post_rewrite ) ) {
		$rw_prefix = [];
		foreach ( $post_rewrite as $k => $v ) {
			$rw_prefix[ '/blog/' . $k ] = $v;
		}
		//
		// merge to keep original rules
		$post_rewrite = array_merge( $rw_prefix, $post_rewrite );
		//
		// or return only prefixed:
//         $post_rewrite = $rw_prefix;
	}

	return $post_rewrite;
}


/**
 * Resources post rewrite link
 *
 * @param $post_link
 * @param $id
 *
 * @return array|mixed|string|string[]
 */
function cps_resources_post_link( $post_link, $id = 0 ) {
	$post = get_post( $id );
	if ( is_object( $post ) && $post->post_type == 'brochures' || is_object( $post ) && $post->post_type == 'white-papers' || is_object( $post ) && $post->post_type == 'webinars' || is_object( $post ) && $post->post_type == 'ebooks' || is_object( $post ) && $post->post_type == 'fact-sheets' || is_object( $post ) && $post->post_type == 'tool-kit' || is_object( $post ) && $post->post_type == 'infographics' || is_object( $post ) && $post->post_type == 'videos' || is_object( $post ) && $post->post_type == 'news' ) {
		$terms = wp_get_object_terms( $post->ID, $post->post_type . '-category' );
		if ( ! empty( $terms ) ) {
			return str_replace( '%category%', $terms[0]->slug, $post_link );
		}
	}

	return $post_link;
}

add_filter( 'post_type_link', 'cps_resources_post_link', 1, 3 );


/**
 * Case Studies rewrite link
 *
 * @param $post_link
 * @param $id
 *
 * @return array|mixed|string|string[]
 */
function cps_case_studies_link( $post_link, $id = 0 ) {
	$post = get_post( $id );
	if ( is_object( $post ) && $post->post_type == 'case-studies' ) {
		$terms = wp_get_object_terms( $post->ID, 'solutions' );
		if ( ! empty( $terms ) ) {
			return str_replace( '%category%', $terms[0]->slug, $post_link );
		}
	}

	return $post_link;
}

add_filter( 'post_type_link', 'cps_case_studies_link', 1, 3 );


