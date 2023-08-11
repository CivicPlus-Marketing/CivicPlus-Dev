<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Card extends Component {
	public $title;
	public $subtitle;
	public $description;
	public $image_element;
	public $image_id;
	public $with_subtitle;
	public $link;


	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $data, $withSubtitle = false, $withLink = false ) {
		$this->title         = $data['title'];
		$this->with_subtitle = $withSubtitle;
		$this->link          = $this->getLink( $withLink, $data );
		$this->subtitle      = $this->getSubtitle( $data );
		$this->description   = $data['description'];
		$this->image_id      = $data['image'];
		$this->image_element = $this->getImage();
	}

	protected function getLink( $withLink, $data ) {
		if ( $withLink && $data['link'] ) {
			return '<a url="' . $data['link']['url'] . '" title="' . $data['link']['title'] . '" class="learn-more">' . $data['link']['title'] . '</a>';
		}

		return false;
	}

	protected function getImage() {
		if ( ! is_numeric( $this->image_id ) ) {
			return wp_get_attachment_image( $this->image_id['ID'], 'full' );
		}

		return wp_get_attachment_image( $this->image_id, 'full' );
	}

	protected function getSubtitle( $data ) {
		if ( ! $this->with_subtitle ) {
			return null;
		}

		return $data['subtitle'];
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.card' );
	}
}