<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Share extends Component {
	public $link;
	public $twitter;
	public $linkedin;
	public $facebook;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct() {
		$this->link = get_the_permalink();
		$this->twitter = $this->get_twitter();
		$this->linkedin = $this->get_linkedin();
		$this->facebook = $this->get_facebook();
	}

	public function get_twitter (){
		return '<a href="https://twitter.com/intent/tweet?url=' . $this->link . '" title="Share Twitter" target="_blank"><i class="icon-twitter"></i></a>';
	}

	public function get_linkedin (){
		return '<a href="https://www.linkedin.com/sharing/share-offsite/?url=' . $this->link . '" title="Share Linkedin" target="_blank"><i class="icon-linkedin"></i></a>';
	}

	public function get_facebook (){
		return '<a href="https://www.facebook.com/sharer/sharer.php?u=' . $this->link . '" title="Share Facebook" target="_blank"><i class="icon-facebook"></i></a>';
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.share' );
	}
}