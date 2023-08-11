<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Author extends Composer {
	public $id;
	public $image;
	public $name;
	public $position;
	public $description;
	public $linkedin;
	public $args;
	public $post_type;

	public function __construct() {
		$this->post_type   = get_archive_post_type();
		$this->id          = get_the_author_meta( 'ID' );
		$this->image       = wp_get_attachment_image( get_field( 'image', 'user_' . $this->id ), 'author-image' );
		$this->name        = get_field( 'name', 'user_' . $this->id );
		$this->position    = get_field( 'position', 'user_' . $this->id );
		$this->description = get_field( 'detail_description', 'user_' . $this->id );
		$this->linkedin    = get_field( 'linkedin', 'user_' . $this->id );
		$this->args        = $this->getArgs();
	}

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'author',
	];

	public function getArgs() {
		$args = getArgs( array( 'post', 'news', 'white-papers' ), 10 );
		$args += array( 'author' => $this->id );

		return $args;
	}

	/**
	 * Data to be passed to view before rendering, but after merging.
	 *
	 * @return array
	 */
	public function override() {
		return [
			'id'          => $this->id,
			'image'       => $this->image,
			'name'        => $this->name,
			'position'    => $this->position,
			'description' => $this->description,
			'linkedin'    => $this->linkedin,
			'args'        => $this->args,
			'post_type'   => $this->post_type,
		];
	}

}
