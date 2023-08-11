<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class CaseCard extends Component {
	public $id;
	public $title;
	public $subtitle;
	public $link;
	public $solution;
	public $municipality;
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
		$this->title = get_the_title($id);
		$this->subtitle = get_field('card_subtitle', $id);
		$this->solution     = get_the_terms( $this->id, 'solutions' );
		$this->population   = get_field('hero_population', $id);
		$this->municipality = get_the_terms( $this->id, 'municipality' );
		$this->link = get_the_permalink($id);
		$this->image = get_the_post_thumbnail( $id, 'post-card' );
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.case-card' );
	}
}