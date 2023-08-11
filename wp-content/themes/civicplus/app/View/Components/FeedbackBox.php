<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class FeedbackBox extends Component {
	public $name;
	public $position;
	public $content;
	public $link;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $data ) {
		$this->name     = $data['name'];
		$this->position = $data['position'];
		$this->content  = $data['content'];
		$this->link     = $data['link'];
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.feedback-box' );
	}
}