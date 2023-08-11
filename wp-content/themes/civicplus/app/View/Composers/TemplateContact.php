<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateContact extends Composer {
	public $title;
	public $subtitle;
	public $image;
	public $tabs;

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'template-contact',
	];

	/**
	 * Create the post instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->title    = get_field( 'title' );
		$this->subtitle = get_field( 'subtitle' );
		$this->image    = get_field( 'image' );
		$this->tabs     = get_field( 'tabs' );
	}


	/**
	 * Data to be passed to view before rendering, but after merging.
	 *
	 * @return array
	 */
	public function override() {
		return [
			'title'        => $this->title,
			'subtitle'     => $this->subtitle,
			'image'        => $this->image,
			'tabs'         => $this->tabs,
		];
	}
}
