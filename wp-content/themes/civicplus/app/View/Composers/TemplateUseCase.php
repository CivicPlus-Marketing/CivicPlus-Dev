<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateUseCase extends Composer {
	public $hero;
	public $content;
	public $demo;

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'template-use-case',
	];


	/**
	 * Create the page instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->hero    = get_clone_group( get_field( 'hero' ), 'hero' );
		$this->content = get_field( 'content' );
		$this->demo    = get_clone_group( get_field( 'demo' ), 'demo' );
	}

	/**
	 * Data to be passed to view before rendering, but after merging.
	 *
	 * @return array
	 */
	public function override() {
		return [
			'hero'    => $this->hero,
			'content' => $this->content,
			'demo'    => $this->demo,
		];
	}

}
