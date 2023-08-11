<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ArchiveCaseStudies extends Composer {

	public $post_type;
	public $posts_per_page;
	public $hero;
	public $args;


	/**
	 * Create the template instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->post_type      = get_archive_post_type();
		$this->posts_per_page = 10;
		$this->hero           = $this->get_archive_data();
		$this->args           = $this->get_args();
	}

	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'archive-case-studies',
	];

	/**
	 * Get clone group.
	 *
	 * @return array
	 */
	public function get_clone_group( $data, $slug = 'archive_hero' ) {
		if ( $data[ $slug ] ) {
			return $data[ $slug ];
		}

		return null;
	}

	/**
	 * Get arrchive data.
	 *
	 * @return array
	 */
	public function get_archive_data() {
		if ( $this->post_type ) {
			if ( $this->post_type['type'] == 'home' || $this->post_type['type'] == 'archive' ) {
				switch ( $this->post_type['name'] ) {
					case 'post':
						return  get_field( 'blog', 'options' );
					case 'brochures':
						return get_field( 'brochure', 'options' );
					case 'white-papers':
						return get_field( 'white_paper', 'options' );
					case 'webinars':
						return get_field( 'webinars', 'options' );
					case 'ebooks':
						return get_field( 'ebooks', 'options' );
					case 'fact-sheets':
						return get_field( 'fact_sheets', 'options' );
					case 'tool-kit':
						return get_field( 'tool_kit', 'options' );
					case 'infographic':
						return get_field( 'infographics', 'options' );
					case 'videos':
						return get_field( 'video', 'options' );
					case 'case-studies':
						return get_field( 'case_studies', 'options' );
					default:
						return false;
				}
			} elseif ( $this->post_type['type'] == 'resources' ) {
				return get_field( 'resources', 'options' );
			} elseif ( $this->post_type['type'] == 'category' ) {
				return get_field( 'hero', 'category_' . $this->post_type['id'] ) || get_field( 'resources', 'options' );
			} elseif ( $this->post_type['type'] == 'tax' ) {
				return get_field( 'hero', $this->post_type['tax_type'] .'_' . $this->post_type['id'] );
			}
		}

		return null;
	}
	
	/**
	 * Get arrchive data.
	 *
	 * @return array
	 */
	public function get_args() {
		if ( $this->post_type ) {
			if ( $this->post_type['type'] == 'home' || $this->post_type['type'] == 'archive' || $this->post_type['type'] == 'resources' ) {
				return getArgs($this->post_type['name'], $this->posts_per_page);
			} elseif ( $this->post_type['type'] == 'category' ) {
				return getArgs($this->post_type['name'], $this->posts_per_page, 'category', $this->post_type['tax']);
			} else {
				return getArgs($this->post_type['name'], $this->posts_per_page, $this->post_type['type'], $this->post_type['tax']);
			}
		}
	}

	/**
	 * Data to be passed to view before rendering, but after merging.
	 *
	 * @return array
	 */
	public function override() {
		return [
			'post_type'      => get_archive_post_type(),
			'posts_per_page' => $this->posts_per_page,
			'hero'           => $this->hero,
			'args'           => $this->args,
		];
	}

}
