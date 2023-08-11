<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateServices extends Composer {
	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'template-services',
	];

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
			'hero'    => $this->get_clone_group( get_field( 'hero' ), 'hero' ),
			'content' => get_field( 'content' ),
			'demo'    => $this->get_clone_group( get_field( 'demo' ), 'demo' ),
		];
	}

}
