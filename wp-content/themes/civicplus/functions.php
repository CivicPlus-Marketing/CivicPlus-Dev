<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if ( ! file_exists( $composer = __DIR__ . '/vendor/autoload.php' ) ) {
	wp_die( __( 'Error locating autoloader. Please run <code>composer install</code>.', 'sage' ) );
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if ( ! function_exists( '\Roots\bootloader' ) ) {
	wp_die(
		__( 'You need to install Acorn to use this theme.', 'sage' ),
		'',
		[
			'link_url' => 'https://roots.io/acorn/docs/installation/',
			'link_text' => __( 'Acorn Docs: Installation', 'sage' ),
		]
	);
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect( [ 'setup', 'filters' ] )
	->each( function ( $file ) {
		if ( ! locate_template( $file = "app/{$file}.php", true, true ) ) {
			wp_die(
			/* translators: %s is replaced with the relative file path */
				sprintf( __( 'Error locating <code>%s</code> for inclusion.', 'sage' ), $file )
			);
		}
	} );

/*Common*/
collect( [
	'functions',
	'taxonomies',
	'custom-post-types',
	'archive' ] )
	->each( function ( $file ) {
		if ( ! locate_template( $file = "app/Common/{$file}.php", true, true ) ) {
			wp_die(
			/* translators: %s is replaced with the relative file path */
				sprintf( __( 'Error locating <code>%s</code> for inclusion.', 'sage' ), $file )
			);
		}
	} );

/*ACF*/
if (class_exists( 'ACF' ) ) {
	collect( [
		'category',
		'civicplus-settings',
		'common-fields',
		'options-page',
		'page-general',
		'single-awards',
		'single-blog',
		'single-case-studies',
		'single-custom-users',
		'single-hubspot-accounts',
		'single-resources-with-form',
		'single-webinars',
		'template-about',
		'template-awards',
		'template-careers',
		'template-contact',
		'template-default-page',
		'template-demo',
		'template-demo-success',
		'template-history',
		'template-home',
		'template-pricing',
		'template-product',
		'template-products-archive',
		'template-security',
		'template-services',
		'template-state',
		'template-thank-you',
		'template-tool',
		'template-tools-archive',
		'template-use-case',
		'template-video',
		'user',
	] )
		->each( function ( $file ) {
			if ( ! locate_template( $file = "app/acf/{$file}.php", true, true ) ) {
				wp_die(
				/* translators: %s is replaced with the relative file path */
					sprintf( __( 'Error locating <code>%s</code> for inclusion.', 'sage' ), $file )
				);
			}
		} );
}

