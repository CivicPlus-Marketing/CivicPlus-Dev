<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class TypesNav extends Component {
	public $types;
	public $current_link;

	/**
	 * Create the component instance.
	 *
	 * @param  array  $data
	 *
	 * @return void
	 */
	public function __construct() {
		$this->types = $this->get_types();
		$this->current_link = $this->get_current_link();
	}

	protected function get_types() {
		$array = array(
			array(
				'title' => 'All',
				'type'  => 'all',
				'link'  => home_url('/resources/'),
				'class' => 'all'
			),
			array(
				'title' => 'Blog',
				'type'  => 'post',
				'link'  => home_url('/blog/'),
				'class' => 'blog'
			),
			array(
				'title' => 'Brochure',
				'type'  => 'brochures',
				'link'  => home_url('/brochures/'),
				'class' => 'brochures'
			),
			array(
				'title' => 'White Paper',
				'type'  => 'white-papers',
				'link'  => home_url('/white-papers/'),
				'class' => 'white-papers'
			),
			array(
				'title' => 'Webinar',
				'type'  => 'webinars',
				'link'  => home_url('/webinars/'),
				'class' => 'webinars'
			),
			array(
				'title' => 'eBook',
				'type'  => 'ebooks',
				'link'  => home_url( '/ebooks/' ),
				'class' => 'ebooks'
			),
			array(
				'title' => 'Fact Sheet',
				'type'  => 'fact-sheets',
				'link'  => home_url( '/fact-sheets/' ),
				'class' => 'fact-sheets'
			),
			array(
				'title' => 'Tool Kit',
				'type'  => 'tool-kit',
				'link'  => home_url( '/tool-kit/' ),
				'class' => 'tool-kit'
			),
			array(
				'title' => 'Infographic',
				'type'  => 'infographic',
				'link'  => home_url( '/infographics/' ),
				'class' => 'infographic'
			),
			array(
				'title' => 'Video',
				'type'  => 'videos',
				'link'  => home_url( '/videos/' ),
				'class' => 'videos'
			),
		);

		return $array;
	}

	protected function get_current_link() {
		global $wp;
		return home_url( add_query_arg( array(), $wp->request ) ) . '/';
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.types-nav' );
	}
}