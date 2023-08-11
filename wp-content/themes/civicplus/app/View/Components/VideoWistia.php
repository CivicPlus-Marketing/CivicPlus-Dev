<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class VideoWistia extends Component {
	public $id;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $id ) {
		$this->id = $id;
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.video-wistia' );
	}
}