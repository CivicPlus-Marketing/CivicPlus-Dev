<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class MenuLink extends Component {
	public $link;
	public $image;
	public $description;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $link, $description, $image ) {
		$this->link        = $link;
		$this->description = $description;
		$this->image       = $image;
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.menu-link' );
	}
}