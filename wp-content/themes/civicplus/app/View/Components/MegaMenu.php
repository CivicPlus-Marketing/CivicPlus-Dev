<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class MegaMenu extends Component {
	public $menu;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $data ) {
		$this->menu         = $data;
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.mega-menu' );
	}
}