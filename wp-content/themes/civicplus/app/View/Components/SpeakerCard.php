<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class SpeakerCard extends Component {
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
		$this->name        = get_field( 'name', $this->id );
		$this->position    = get_field( 'position', $this->id );
		$this->description = get_field( 'description',  $this->id );
		$this->linkedin    = get_field( 'linkedin',  $this->id );
		$this->image       = wp_get_attachment_image( get_field( 'image', $this->id ), 'author-image' );
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.speaker-card' );
	}
}