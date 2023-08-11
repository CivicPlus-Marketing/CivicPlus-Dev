<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class ContentCardsBox extends Component {
	public $image;
	public $title;
	public $content;
	public $list;
	public $with_feedback;
	public $feedback;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $data, $withFeedback) {
		$this->image         = wp_get_attachment_image( $data['image'], 'full' );
		$this->title         = $data['title'];
		$this->content       = $data['content'];
		$this->list          = $data['list'];
		$this->with_feedback = $withFeedback;
		$this->feedback      = $this->getFeedback( $data );
	}

	protected function getFeedback( $data ) {
		if ( ! $this->with_feedback ) {
			return null;
		}

		return $data['feedback'];
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.content-cards-box' );
	}
}