<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Breadcrumbs extends Component {
	public $type;
	public $list;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $type ) {
		$this->type = $type;
		$this->list = $this->get_list();
	}

	protected function get_list() {
		switch ( $this->type ) {
			case 'resources':
				$post_type = get_post_type_object( get_post_type() );
				$post_name = $post_type->name;
				if ( $post_name == 'post' ) {
					$post_name = 'blog';
				}
				$array = array(
					array( 'title' => 'Resources', 'link' => home_url( '/resources' ) ),
					array( 'title' => $post_type->labels->all_items, 'link' => home_url( '/' . $post_name ) ),
					array( 'title' => get_the_title(), 'link' => false ),
				);

				return $array;
			case 'about':
				$array = array(
					array( 'title' => 'About', 'link' => false ),
					array( 'title' => get_the_title(), 'link' => false ),
				);

				return $array;
			case 'use-case':
				$array = array(
					array( 'title' => 'Use cases', 'link' => false ),
					array( 'title' => get_the_title(), 'link' => false ),
				);

				return $array;
			case 'case-studies':
				$post_type = get_post_type_object( get_post_type() );
				$post_name = $post_type->name;
				if ( $post_name == 'post' ) {
					$post_name = 'blog';
				}
				$array = array(
					array( 'title' => $post_type->labels->all_items, 'link' => home_url( '/' . $post_name ) ),
					array( 'title' => get_the_title(), 'link' => false ),
				);

				return $array;
			case 'page':
				$parent = get_post_parent();
				if ( $parent ) {
					$array = array(
						array( 'title' => $parent->post_title, 'link' => get_the_permalink( $parent->ID ) ),
						array( 'title' => get_the_title(), 'link' => false ),
					);

					return $array;
				}

				return null;
			case 'author':
				$array = array(
					array( 'title' => 'Resources', 'link' => home_url( '/resources' ) ),
					array( 'title' => get_field( 'name', 'user_' . get_the_author_meta( 'ID' ) ), 'link' => false ),
				);

				return $array;
			default:
				return null;
		}


	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public
	function render() {
		return $this->view( 'components.breadcrumbs' );
	}
}