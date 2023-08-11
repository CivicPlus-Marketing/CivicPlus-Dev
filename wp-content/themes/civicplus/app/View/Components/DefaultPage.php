<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class DefaultPage extends Component {
	public $title;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $data, $active = '' ) {
		$this->title         = $data['title'];
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.default-page' );
	}
}