<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Author extends Component {
	public $id;
	public $name;
	public $position;
	public $description;
	public $linkedin;
	public $image;
	public $detail;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $id
	 *
	 * @return void
	 */
	public function __construct( $id, $detail ) {
		$this->id          = $id;
		$this->detail      = $detail;
		$this->name        = get_field( 'name', 'user_' . $this->id );
		$this->position    = get_field( 'position', 'user_' . $this->id );
		$this->description = get_field( 'description', 'user_' . $this->id );
		$this->linkedin    = get_field( 'linkedin', 'user_' . $this->id );
		$this->image       = $this->getImage();
	}

	protected function getImage(){
		return '<a href="' . get_author_posts_url( $this->id ) . '" title="' . $this->name . '">' . wp_get_attachment_image( get_field( 'image', 'user_' . $this->id ), 'author-image' ) . '</a>';
	}
	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.author' );
	}
}