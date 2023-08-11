<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.header',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
	    $general = get_field('general', 'options');

        return [
            'header_links' => $general['header_links'],
            'header_buttons' => $general['header_buttons'],
            'logo' => wp_get_attachment_image($general['logo']['ID'], 'logo'),
	        'header_menu' => get_field('header_menu', 'options'),
	        'phone' => $general['phone'],
        ];
    }
}
