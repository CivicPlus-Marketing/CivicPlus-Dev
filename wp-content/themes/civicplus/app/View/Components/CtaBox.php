<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class CtaBox extends Component {
	public $title;
	public $link;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $data ) {
		$this->title = $data['title'];
		$this->link  = $data['link'];
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.cta-box' );
	}
}