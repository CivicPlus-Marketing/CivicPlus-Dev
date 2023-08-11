<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('global')->enqueue();
	bundle( 'icomoon' )->enqueue();

	if ( is_page_template( 'template-home.blade.php' ) ) {
		bundle( 'home' )->enqueue();
	}

	if ( is_page_template( 'template-state.blade.php' ) ) {
		bundle( 'state' )->enqueue();
	}

	if ( is_page_template( 'template-thank-you.blade.php' ) ) {
		bundle( 'thankYou' )->enqueue();
	}

	if ( is_page_template( 'template-use-case.blade.php' ) ) {
		bundle( 'useCase' )->enqueue();
	}

	if ( is_page_template( 'template-security.blade.php' ) ) {
		bundle( 'security' )->enqueue();
	}

	if ( is_page_template( 'template-product.blade.php' ) ) {
		bundle( 'product' )->enqueue();
	}

	if ( is_page_template( 'template-products-archive.blade.php' ) ) {
		bundle( 'productsArchive' )->enqueue();
	}

	if ( is_page_template( 'template-tool.blade.php' ) ) {
		bundle( 'tool' )->enqueue();
	}

	if ( is_page_template( 'template-contact.blade.php' ) ) {
		bundle( 'contact' )->enqueue();
	}

	if ( is_page_template( 'template-about.blade.php' ) ) {
		bundle( 'about' )->enqueue();
	}

	if ( is_page_template( 'template-default-page.blade.php' ) ) {
		bundle( 'default-page' )->enqueue();
	}

	if ( is_page_template( 'template-demo.blade.php' ) ) {
		bundle( 'demo' )->enqueue();
	}

	if ( is_page_template( 'template-awards.blade.php' ) ) {
		bundle( 'awards' )->enqueue();
	}

	if ( is_page_template( 'template-demo-success.blade.php' ) ) {
		bundle( 'demoSuccess' )->enqueue();
	}

	if ( is_page_template( 'template-tools-archive.blade.php' ) ) {
		bundle( 'toolsArchive' )->enqueue();
	}

	if ( is_singular( 'case-studies' )) {
		bundle( 'singleCaseStudies' )->enqueue();
	}

	if ( is_singular( 'post' ) || is_singular( 'news' )) {
		bundle( 'single' )->enqueue();
	}

	if(is_singular( 'webinars' )){
		bundle( 'singleWebinars' )->enqueue();
	}

	if ( is_singular( 'brochures' ) || is_singular( 'white-papers' ) || is_singular( 'ebooks' ) || is_singular( 'fact-sheets' ) || is_singular( 'tool-kit' ) || is_singular( 'infographics' ) || is_singular( 'videos' )) {
		bundle( 'singleWithForm' )->enqueue();
	}

	if(is_author()){
		bundle( 'author' )->enqueue();
	}

	if ( (is_archive() || is_home() || is_page_template( 'template-resources.blade.php' )) && !is_post_type_archive('case-studies') && !is_tax('solutions') && !is_author()) {
		bundle( 'archive' )->enqueue();
	}

	if(is_post_type_archive('case-studies') || is_tax('solutions')){
		bundle( 'archiveCaseStudies' )->enqueue();
	}

    if ( is_page_template( 'template-pricing.blade.php' ) ) {
        bundle( 'pricing' )->enqueue();
    }

	if ( is_page_template( 'template-history.blade.php' ) ) {
		bundle( 'history' )->enqueue();
	}

    if ( is_page_template( 'template-services.blade.php' ) ) {
        bundle( 'services' )->enqueue();
    }

	if ( is_page() && !is_page_template() ) {
		bundle( 'default' )->enqueue();
	}

	if ( is_404() ) {
		bundle( 'notFound' )->enqueue();
	}
}, 100);


/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     *
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls',
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);
