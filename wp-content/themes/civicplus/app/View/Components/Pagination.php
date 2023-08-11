<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Pagination extends Component {
	public $type;
	public $post_per_page;
	public $paged;
	public $current_page;
	public $prev_page;
	public $next_page;
	public $link;
	public $loop;


	/**
	 * Create the component instance.
	 *
	 * @param  array  $id
	 *
	 * @return void
	 */
	public function __construct( $type, $perPage, $loop ) {
		$this->type          = $type;
		$this->loop          = $loop;
		$this->post_per_page = $perPage;
		$this->paged         = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		$this->link          = $this->getLink();
	}

	public function getLink() {
		if ( $this->type['tax'] ) {
			return home_url( '/category/' . $this->type['tax'] . '/page/' );
		} elseif ( $this->type['name'] == 'post' ) {
			return home_url( '/blog/page/' );
		} elseif($this->type['type'] == 'author'){
			return home_url( '/author/' . $this->type['name'] . '/page/' );
		}

		return home_url( '/' . $this->type['name'] . '/page/' );
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render() {
		return $this->view( 'components.pagination' );
	}
}
