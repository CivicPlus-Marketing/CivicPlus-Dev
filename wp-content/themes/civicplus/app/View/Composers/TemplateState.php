<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateState extends Composer {
	public $hero;
	public $content;
	public $demo;

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'template-state',
	];


	/**
	 * Create the page instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->hero    = get_field( 'hero' );
		$this->content = get_field( 'content' );
		$this->demo    = get_field( 'demo' );
	}

	/**
	 * Data to be passed to view before rendering, but after merging.
	 *
	 * @return array
	 */
	public function override() {
		return [
			'hero'   => $this->hero,
			'content' => $this->content,
			'demo'    => $this->demo,
		];
	}

}
