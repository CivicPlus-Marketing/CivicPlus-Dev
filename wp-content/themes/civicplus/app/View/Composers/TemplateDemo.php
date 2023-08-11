<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateDemo extends Composer {
	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'template-demo',
	];


	/**
	 * Data to be passed to view before rendering, but after merging.
	 *
	 * @return array
	 */
	public function override() {
		return [
			'hero'         => get_clone_group( get_field( 'hero' ), 'hero' ),
			'buttons'      => get_field( 'buttons' ),
			'content'      => get_field( 'content' ),
			'current_link' => get_the_permalink(),
		];
	}

}
