<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplatePricing extends Composer {
	public $title;
	public $subtitle;
	public $image;
	public $form;

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'template-pricing',
	];

	/**
	 * Create the post instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->title    = get_field( 'title' );
		$this->subtitle = get_field( 'subtitle' );
		$this->image    = wp_get_attachment_image_url( get_field( 'image' ), 'full' );
		$this->form     = get_clone_group(get_field( 'form' ), 'form');
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
			'form'         => $this->form,
		];
	}
}
