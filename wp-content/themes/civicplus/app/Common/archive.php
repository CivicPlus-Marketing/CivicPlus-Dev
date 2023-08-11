<?php
/**
 * Get the current archive post type name (e.g: post, page, product).
 *
 * @return Array|Boolean  The archive post type name or false if not in an archive page.
 */
function get_archive_post_type() {
	$all_post_types = array(
		'post',
		'brochures',
		'white-papers',
		'webinars',
		'ebooks',
		'fact-sheets',
		'tool-kit',
		'infographics',
		'videos'
	);

	if ( is_archive() && ! is_category() && ! is_tax() && ! is_author()  ) {
		$data = array( 'name' => get_queried_object()->name, 'type' => 'archive', 'tax' => null, 'tax_type' => get_queried_object()->name . '-category');

		return $data;
	} elseif ( is_home() ) {
		$data = array( 'name' => 'post', 'type' => 'home','tax' => null, 'tax_type' => 'home' );

		return $data;
	} elseif ( is_page_template( 'template-resources.blade.php' ) ) {
		$data = array( 'name' => $all_post_types, 'type' => 'resources', 'tax' => null, 'tax_type' => 'resources' );

		return $data;
	} elseif ( is_category() ) {
		$data = array(
			'name' => 'post',
			'tax'  => get_queried_object()->slug,
			'type' => 'category',
			'id'   => get_queried_object()->term_id,
			'tax_type' => 'home',
		);

		return $data;
	} elseif ( is_tax() ) {
		$data = array(
			'name' => $all_post_types,
			'tax'  => get_queried_object()->slug,
			'type' => 'tax',
			'id'   => get_queried_object()->term_id,
			'tax_type' => get_queried_object()->taxonomy,
		);

		return $data;
	}elseif (is_author()  ) {
		$data = array( 'name' => get_queried_object()->user_nicename, 'type' => 'author', 'tax_type' => get_queried_object()->name . '-category');

		return $data;
	}

	return false;
}

function getArgs( $post_type = array( 'post' ), $posts_per_page = 10, $tax = 'category', $selected = null ) {
	$catArr = get_tax( 'topic', 'array' );

	if ( $selected ) {
		$catArr = $selected;
	}

	$args = array(
		'post_status'    => 'publish',
		'post_type'      => $post_type,
		'order'          => 'DESC',
		'posts_per_page' => $posts_per_page,
		'paged'          => ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1,
	);

	if(is_array($tax) && $catArr && $catArr[0] != 'all'){
		$temp = array('relation' => 'OR');
		foreach ($tax as $item){
			array_push($temp, array(
				'taxonomy' => $item,
				'field'    => 'slug',
				'terms'    => $catArr,
			));
		}
		$args += array(
			'tax_query' => $temp
		);
	}elseif ( $catArr && $catArr[0] != 'all' && $tax ) {
		$args += array(
			'tax_query' => array(
				array(
					'taxonomy' => $tax,
					'field'    => 'slug',
					'terms'    => $catArr,
				),
			)
		);
	}

	return $args;
}

function getCatArgs( $postType = 'post', $postsPerPage = 12, $tax = 'category', $cat ) {
	return array(
		'post_type'      => $postType,
		'post_status'    => 'publish',
		'order'          => 'DESC',
		'tax_query'      => array(
			array(
				'taxonomy' => $tax,
				'field'    => 'slug',
				'terms'    => $cat,
			),
		),
		'posts_per_page' => $postsPerPage,
		'paged'          => ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1,
	);
}


/**
 * Gets Categories by Post Type
 *
 * @param $post_type
 * @param $taxonomy
 *
 * @return mixed
 */
function get_categories_for_post_type( $post_type = 'post', $taxonomy = '' ) {
	$exclude    = array();
	$args       = array(
		"taxonomy" => $taxonomy,
	);
	$categories = get_categories( $args );

	// Check ALL categories for posts of given post type
	foreach ( $categories as $category ) {
		$posts = get_posts( array(
			'post_type' => $post_type,
			'tax_query' => array(
				array(
					'taxonomy' => $taxonomy,
					'field'    => 'term_id',
					'terms'    => $category->term_id
				)
			)
		) );

		// If no posts in category, add to exclude list
		if ( empty( $posts ) ) {
			$exclude[] = $category->term_id;
		}
	}

	// If exclude list, add to args
	if ( ! empty( $exclude ) ) {
		$args['exclude'] = implode( ',', $exclude );
	}

	// List categories
	return get_categories( $args );
}

/**
 * Gets Categories for resources archive
 *
 * @return array|mixed
 */
function get_categories_for_resources_archive() {
	$categories = array();
	$array = array(
		array( 'type' => 'post', 'tax' => 'category' ),
		array( 'type' => 'brochures', 'tax' => 'brochures-category' ),
		array( 'type' => 'white-papers', 'tax' => 'white-papers-category' ),
		array( 'type' => 'webinars', 'tax' => 'webinars-category' ),
		array( 'type' => 'ebooks', 'tax' => 'ebooks-category' ),
		array( 'type' => 'fact-sheets', 'tax' => 'fact-sheets-category' ),
		array( 'type' => 'tool-kit', 'tax' => 'tool-kit-category' ),
		array( 'type' => 'infographics', 'tax' => 'infographics-category' ),
		array( 'type' => 'videos', 'tax' => 'videos-category' ),
	);

	foreach ($array as $item){
		foreach (get_categories_for_post_type($item['type'], $item['tax']) as $s_intem){
			array_push($categories, $s_intem);
		}
	}

	return $categories;
}

/**
 * @param $categories
 *
 * @return array
 */
function modify_array_categories ($categories){
	$array = array();

	foreach ($categories as $cat){
		array_push($array, array('id' => $cat->term_id, 'name' => $cat->name, 'slug' => $cat->slug, 'taxonomy' => $cat->taxonomy));
	}

	return $array;
}

/**
 * @param $array
 * @param $key
 *
 * @return array[]
 */
function unique_multidim_array($array, $key) : array {
	$uniq_array = array();
	$dup_array = array();
	$key_array = array();

	foreach($array as $val) {
		if (!in_array($val[$key], $key_array)) {
			$key_array[] = $val[$key];
			$uniq_array[] = $val;
		} else {
			$dup_array[] = $val;
		}
	}
	return $uniq_array;
}

/**
 * Topics
 *
 * @param $format
 *
 * @return array|mixed|string|string[]|void
 */
function get_active_topics( $format ) {
	if ( isset( $_GET['topic'] ) && $_GET['topic'] != '' ) {
		$topic = $_GET['topic'];
		switch ( $format ) {
			case 'array':
				return explode( ',', $topic );
			case 'string':
				return $topic;
		}
	} else {
		switch ( $format ) {
			case 'array':
				return array();
			case 'string':
				return null;
		}
	}
}

/**
 * Get tax
 *
 * @param $tax
 * @param $format
 *
 * @return array|mixed|string|string[]|void
 */
function get_tax( $tax, $format ) {
	if ( isset( $_GET[ $tax ] ) && $_GET[ $tax ] != '' ) {
		$temp = $_GET[ $tax ];
		switch ( $format ) {
			case 'array':
				return explode( ',', $temp );
			case 'string':
				return $temp;
		}
	} else {
		switch ( $format ) {
			case 'array':
				return array();
			case 'string':
				return '';
		}
	}
}

function get_cat_ID_label( $topic_name
)  // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
{
	$cat = get_term_by( 'slug', $topic_name, 'category' );

	if ( $cat ) {
		return $cat->term_id;
	}

	return 0;
}

function get_cat_id_array( $array, $format ) {
	$topics    = '';
	$catsArray = [];
	$i         = 0;
	switch ( $format ) {
		case 'string':
			foreach ( $array as $item ) {
				if ( $i !== 1 || $i !== 0 ) {
					$topics .= ', ' . get_cat_ID_label( $item );
				} elseif ( $i !== 0 ) {
					$topics .= get_cat_ID_label( $item );
				}
				$i ++;
			}

			return $topics;

		case 'array':
			foreach ( $array as $item ) {
				array_push( $catsArray, get_cat_ID_label( $item ) );
			}

			return $catsArray;
	}


	return $topics;
}

function getAllCats() {
	$arr = array();

	$topics = get_categories( [
		'show_option_none' => '',
		'hide_empty'       => 0,
		'taxonomy'         => 'category'
	] );

	foreach ( $topics as $item ) {
		array_push( $arr, $item->term_taxonomy_id );
	}

	return $arr;
}

