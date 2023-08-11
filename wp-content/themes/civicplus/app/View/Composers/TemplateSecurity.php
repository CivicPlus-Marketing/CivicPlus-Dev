<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateSecurity extends Composer {
	public $hero;
	public $content;
	public $demo;

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'template-security',
	];


	/**
	 * Create the page instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->hero        = $this->get_clone_group(get_field( 'hero' ), 'hero');
		$this->content      = get_field( 'content' );
		$this->demo         = $this->get_clone_group( get_field( 'demo' ), 'demo' );
	}

	public function get_clone_group( $data, $slug ) {
		if ( $data[$slug] ) {
			return $data[$slug];
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
			'hero'    => $this->hero,
			'content' => $this->content,
			'demo'    => $this->demo,
		];
	}

}
