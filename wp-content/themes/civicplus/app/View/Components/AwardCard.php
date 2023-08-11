<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class AwardCard extends Component {
	public $id;
	public $title;
	public $link;
	public $subtitle;
	public $population;
	public $image;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $id ) {
		$this->id = $id;
		$this->title = get_field('title', $id);
		$this->subtitle = get_field('subtitle', $id);
		$this->link = get_field('link', $id);
		$this->population = get_field('population', $id);
		$this->image = get_the_post_thumbnail( $id, 'post-card' );
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.award-card' );
	}
}