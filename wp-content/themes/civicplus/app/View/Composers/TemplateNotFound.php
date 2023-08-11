<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateNotFound extends Composer {
	public $hero;
	public $content;

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'404',
	];


	/**
	 * Create the page instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->hero        = $this->get_clone_group(get_field( '404_hero', 'options' ), 'hero');
		$this->content      = get_field( '404_content', 'options' );
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
		];
	}

}
