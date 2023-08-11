<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Faq extends Component {
	public $title;
	public $description;
	public $is_active;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $data, $active = '' ) {
		$this->title         = $data['title'];
		$this->description   = $data['content'];
		$this->is_active     = $active;
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.faq' );
	}
}