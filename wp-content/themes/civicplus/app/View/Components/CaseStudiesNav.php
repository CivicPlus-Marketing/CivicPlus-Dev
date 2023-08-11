<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class CaseStudiesNav extends Component {
	public $type;
	public $tax;
	public $link;
	public $current_link;
	public $active_topic;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct($type) {
		$this->type = $type;
		$this->tax = $this->get_tax();
	}

	/**
	 * @return array|array[]
	 */
	protected function get_tax() {
		switch ($this->type){
			case 'population':
				return modify_array_categories(get_categories_for_post_type( array( 'case-studies' ), 'population' ));
			case 'solutions':
				return modify_array_categories(get_categories_for_post_type( array( 'case-studies' ), 'solutions' ));
			case 'municipality':
				return modify_array_categories(get_categories_for_post_type( array( 'case-studies' ), 'municipality' ));
			default:
				return modify_array_categories(get_categories_for_post_type( array( 'case-studies' ), 'solutions' ));
		}
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.case-studies-nav' );
	}
}