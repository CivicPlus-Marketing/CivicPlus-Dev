<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateHistory extends Composer {
	public $hero;
	public $content;

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'template-history',
	];


	/**
	 * Create the page instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->hero    = get_field( 'hero' );
		$this->content = get_field( 'content' );
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
			'hero'    => $this->hero,
			'content' => $this->content,
		];
	}
}
