<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_image_size( 'logo', 142, 18 );
add_image_size( 'author-image', 60, 60 );
add_image_size( 'tour', 300, 192 );
add_image_size( 'image-card', 350, 250 );
add_image_size( 'post-card', 350, 215 );
add_image_size( 'menu-icon', 48, 48 );


add_filter( 'big_image_size_threshold', '__return_false' );