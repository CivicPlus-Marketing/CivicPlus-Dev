<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class SidebarState extends Component {
	public $title;
	public $list;
	public $cta;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $data ) {
		$this->title = $data['title'];
		$this->list  = $data['list'];
		$this->cta   = $data['cta_box'];
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.sidebar-state' );
	}
}