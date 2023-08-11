<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class PostCard extends Component {
	public $id;
	public $title;
	public $link;
	public $type;
	public $image;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct( $id ) {
		$this->id = $id;
		$this->title = get_the_title($id);
		$this->link = get_the_permalink($id);
		$this->type = $this->get_type();
		$this->image = get_the_post_thumbnail( $id, 'post-card' );
	}

	public function get_type (){
		$type =get_post_type_object(get_post_type($this->id));
		return $type->label;
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.post-card' );
	}
}