<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Footer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.footer',
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
	        'logo' => wp_get_attachment_image($general['logo']['ID'], 'logo'),
            'location' => $general['location'],
            'phone' => $general['phone'],
            'awards' => $general['awards'],
            'footer_menu' => get_field('footer_menu', 'options'),
            'footer_links' => $general['footer_links'],
            'copy' => $general['copy'],
        ];
    }
}
