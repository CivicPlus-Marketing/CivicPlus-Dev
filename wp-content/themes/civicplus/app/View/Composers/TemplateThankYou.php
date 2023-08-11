<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateThankYou extends Composer {
	public $title;
	public $content;
	public $image;

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'template-thank-you',
	];


	/**
	 * Create the page instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->title   = get_field( 'title' );
		$this->content = get_field( 'content' );
		$this->image   = get_field( 'image' );
	}

	/**
	 * Data to be passed to view before rendering, but after merging.
	 *
	 * @return array
	 */
	public function override() {
		return [
			'title'   => $this->title,
			'content' => $this->content,
			'image' => $this->image,
		];
	}

}
