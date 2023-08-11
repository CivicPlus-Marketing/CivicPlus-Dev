<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class PostWithForm extends Composer {
	public $id;
	public $type;
	public $date;
	public $title;
	public $subtitle;
	public $hero_image;
	public $with_gradient;
	public $image;
	public $content;
	public $category;
	public $form;

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'single-brochures',
		'single-ebooks',
		'single-fact-sheets',
		'single-infographics',
		'single-tool-kit',
		'single-videos',
		'single-white-papers'
	];

	/**
	 * Create the post instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->id            = get_the_ID();
		$this->type          = get_post_type();
		$this->title         = get_field( 'title' );
		$this->subtitle      = get_field( 'subtitle' );
		$this->hero_image    = wp_get_attachment_image_url( get_field( 'hero_image' ), 'full' );
		$this->with_gradient = get_field( 'with_gradient' );
		$this->image         = wp_get_attachment_image( get_field( 'image' ), 'full' );
		$this->category      = $this->get_tax();
		$this->date          = get_the_date( 'F j, Y', $this->id );
		$this->content       = get_field( 'content' );
		$this->form          = $this->get_clone_group( get_field( 'form' ), 'form' );
	}

	protected function get_tax() {
		if ( $this->type == 'post' ) {
			return get_the_category( $this->id );
		}

		return get_the_terms( $this->id, $this->type . '-category' );
	}

	public function get_clone_group( $data, $slug ) {
		if ( $data[ $slug ] ) {
			return $data[ $slug ];
		}

		return null;
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
			'hero_image'    => $this->hero_image,
			'with_gradient' => $this->with_gradient,
			'image'         => $this->image,
			'form'          => $this->form,
			'date'          => $this->date,
			'content'       => $this->content,
			'category'      => $this->category,
		];
	}
}
