<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer {
	public $id;
	public $type;
	public $author_id;
	public $date;
	public $time_to_read;
	public $title;
	public $subtitle;
	public $image;
	public $with_gradient;

	public $content;
	public $faqs;
	public $related;
	public $demo;
	public $category;

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'single',
	];

	/**
	 * Create the post instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->id            = get_the_ID();
		$this->type          = get_post_type();
		$this->author_id     = get_post_field( 'post_author', $this->id );
		$this->title         = get_field( 'title' );
		$this->subtitle      = get_field( 'subtitle' );
		$this->image         = wp_get_attachment_image_url( get_field( 'hero_image' ), 'full' );
		$this->with_gradient = get_field( 'with_gradient' );
		$this->time_to_read  = get_field( 'time_to_read' );
		$this->category      = $this->get_tax();
		$this->date          = get_the_date( 'F j, Y', $this->id );
		$this->content       = get_field( 'content' );
		$this->faqs          = $this->get_clone_group( get_field( 'faqs' ), 'faq' );
		$this->related       = $this->get_clone_group( get_field( 'related' ), 'related' );
		$this->demo          = get_field( 'demo', 'options' );
	}

	public function get_clone_group( $data, $slug ) {
		if ( $data[ $slug ] ) {
			return $data[ $slug ];
		}

		return null;
	}

	protected function get_tax() {
		if ( $this->type == 'post' ) {
			return get_the_category( $this->id );
		}

		return get_the_terms( $this->id, $this->type . '-category' );
	}

	/**
	 * Data to be passed to view before rendering, but after merging.
	 *
	 * @return array
	 */
	public function override() {
		return [
			'id'            => $this->id,
			'title'         => $this->title,
			'subtitle'      => $this->subtitle,
			'image'         => $this->image,
			'with_gradient' => $this->with_gradient,
			'time_to_read'  => $this->time_to_read,
			'date'          => $this->date,
			'content'       => $this->content,
			'author_id'     => $this->author_id,
			'faqs'          => $this->faqs,
			'related'       => $this->related,
			'demo'          => $this->demo,
			'category'      => $this->category,
		];
	}
}
