<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class PostCaseStudies extends Composer {
	public $id;
	public $title;
	public $hero;
	public $content;
	public $demo;
	public $solution;


	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'single-case-studies',
	];

	/**
	 * Create the post instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->id           = get_the_ID();
		$this->solution     = get_the_terms( $this->id, 'solutions' );
		$this->population   = get_the_terms( $this->id, 'population' );
		$this->municipality = get_the_terms( $this->id, 'municipality' );
		$this->title        = get_the_title();
		$this->hero         = get_field( 'hero' );
		$this->content      = get_field( 'content' );
		$this->demo         = get_clone_group( get_field( 'demo' ), 'demo' );
	}



	/**
	 * Data to be passed to view before rendering, but after merging.
	 *
	 * @return array
	 */
	public function override() {
		return [
			'id'           => $this->id,
			'title'        => $this->title,
			'solution'     => $this->solution,
			'population'   => $this->population,
			'municipality' => $this->municipality,
			'hero'         => $this->hero,
			'content'      => $this->content,
			'demo'         => $this->demo,
		];
	}
}
