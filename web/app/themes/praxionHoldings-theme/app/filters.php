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

// Ẩn thanh Admin Bar hoàn toàn ở giao diện bên ngoài (Front-end)
add_filter('show_admin_bar', '__return_false');

/**
 * Keep the official public name and purposeful titles on the upgraded routes.
 *
 * @param  array<string, string>  $parts
 * @return array<string, string>
 */
add_filter('document_title_parts', function ($parts) {
    if (is_front_page()) {
        $parts['title'] = 'PRX Holdings';
        unset($parts['site'], $parts['tagline']);

        return $parts;
    }

    $titles = [
        'services' => __('Pricing', 'sage'),
        'solution' => __('Solution', 'sage'),
        'about-us' => __('About Us', 'sage'),
        'contact' => __('Contact', 'sage'),
    ];

    foreach ($titles as $slug => $title) {
        if (is_page($slug)) {
            $parts['title'] = $title;
            $parts['site'] = 'PRX Holdings';
            break;
        }
    }

    return $parts;
});
