<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class TopicsNav extends Component {
	public $post_type;
	public $topics;
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
	public function __construct() {
		$this->post_type = get_archive_post_type();
		$this->topics = $this->get_topics();
		$this->link = $this->get_link();
		$this->current_link = $this->get_current_link();
		$this->active_topic = get_active_topics( 'string' );
	}

	/**
	 * @return array|array[]
	 */
	protected function get_topics() {
		switch ($this->post_type['tax_type']){
			case 'home':
				return modify_array_categories(get_categories_for_post_type( array( 'post' ), 'category' ));
			case 'brochures-category':
				return modify_array_categories(get_categories_for_post_type( array( 'brochures' ), 'brochures-category' ));
			case 'white-papers-category':
				return modify_array_categories(get_categories_for_post_type( array( 'white-papers' ), 'white-papers-category' ));
			case 'webinars-category':
				return modify_array_categories(get_categories_for_post_type( array( 'webinars' ), 'webinars-category' ));
			case 'ebooks-category':
				return modify_array_categories(get_categories_for_post_type( array( 'ebooks' ), 'ebooks-category' ));
			case 'fact-sheets-category':
				return modify_array_categories(get_categories_for_post_type( array( 'fact-sheets' ), 'fact-sheets-category' ));
			case 'tool-kit-category':
				return modify_array_categories(get_categories_for_post_type( array( 'tool-kit' ), 'tool-kit-category' ));
			case 'infographics-category':
				return modify_array_categories(get_categories_for_post_type( array( 'infographics' ), 'infographics-category' ));
			case 'videos-category':
				return modify_array_categories(get_categories_for_post_type( array( 'videos' ), 'videos-category' ));
			case 'news-category':
				return modify_array_categories(get_categories_for_post_type( array( 'news' ), 'news-category' ));
			default:
				$all_cats = modify_array_categories(get_categories_for_resources_archive());
				return unique_multidim_array($all_cats, 'slug');
		}
	}

	/**
	 * @return mixed
	 */
	protected function get_link() {
		switch ($this->post_type['tax_type']){
			case 'home':
				return home_url('/blog/');
			case 'brochures-category':
				return home_url('/brochures/');
			case 'white-papers-category':
				return home_url('/white-papers/');
			case 'webinars-category':
				return home_url('/webinars/');
			case 'ebooks-category':
				return home_url('/ebooks/');
			case 'fact-sheets-category':
				return home_url('/fact-sheets/');
			case 'tool-kit-category':
				return home_url('/tool-kit/');
			case 'infographics-category':
				return home_url('/infographics/');
			case 'videos-category':
				return home_url('/videos/');
			case 'news-category':
				return home_url('/news/');
			default:
				return home_url('/resources/');

		}
	}

	/**
	 * @return mixed
	 */
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
		return $this->view( 'components.topics-nav' );
	}
}