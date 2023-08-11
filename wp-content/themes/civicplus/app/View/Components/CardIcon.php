<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class CardIcon extends Component {
	public $title;
	public $description;
	public $image_id;
	public $link;
	public $image_element;
	public $link_element;
	public $class;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $data, $index ) {
		$this->title         = $data['title'];
		$this->description      = $data['description'];
		$this->link          = $data['link'];
		$this->image_id      = $data['image'];
		$this->image_element = $this->getImage();
		$this->link_element  = $this->getLink();
		$this->class         = 'product-' . $index;
	}

	protected function getImage() {
		if ( ! is_numeric( $this->image_id ) ) {
			return wp_get_attachment_image( $this->image_id['ID'], 'full' );
		}

		return wp_get_attachment_image( $this->image_id, 'full' );
	}

	protected function getLink() {
		if($this->link){
			return '<span class="learn-more">' . $this->link['title'] . '</span>';
		}

		return null;
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.card-icon' );
	}
}