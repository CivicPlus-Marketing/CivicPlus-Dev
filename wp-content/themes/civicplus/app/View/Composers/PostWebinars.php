<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class PostWebinars extends Composer {
	public $id;
	public $date;
	public $title;
	public $subtitle;
	public $hero_image;
	public $with_gradient;
	public $content;
	public $category;
	public $form;
	public $panelists_title;
	public $panelists;
	public $host_title;
	public $host;

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'single-webinars',
	];

	/**
	 * Create the post instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->id              = get_the_ID();
		$this->title           = get_field( 'title' );
		$this->subtitle        = get_field( 'subtitle' );
		$this->hero_image      = wp_get_attachment_image_url( get_field( 'hero_image' ), 'full' );
		$this->with_gradient   = get_field( 'with_gradient' );
		$this->category        = get_the_terms( $this->id, 'webinars-category' );
		$this->date            = get_field( 'location_and_date' );
		$this->content         = get_field( 'content' );
		$this->form            = $this->get_clone_group( get_field( 'form' ), 'form' );
		$this->panelists_title = get_field( 'panelists_title' );
		$this->panelists       = get_field( 'panelists' );
		$this->host_title      = get_field( 'host_title' );
		$this->host            = get_field( 'host' );
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
			'id'              => $this->id,
			'title'           => $this->title,
			'subtitle'        => $this->subtitle,
			'hero_image'      => $this->hero_image,
			'with_gradient'   => $this->with_gradient,
			'form'            => $this->form,
			'date'            => $this->date,
			'content'         => $this->content,
			'category'        => $this->category,
			'panelists_title' => $this->panelists_title,
			'panelists'       => $this->panelists,
			'host_title'      => $this->host_title,
			'host'            => $this->host,
		];
	}
}
