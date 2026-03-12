<?php
require_once __DIR__ . '/config.php';
$page_title = 'Home';
$page_slug = 'home';

$page = get_page_by_slug('home') ?? ['page_title' => 'Page not found'];
include __DIR__ . '/includes/header.php';

if (!empty($page['body']) ) {
    // foreach( $page['body'] as $id => $data ) {
    //     $visibility = $shortcode_visibility[$id];
    //     if( is_array($visibility) ) {
    //         foreach( $visibility as $slug_check ) {
    //             if( $page_slug === $slug_check ) {
    //                 include __DIR__ . "/shortcodes/".$id.'.php';
    //             }
    //         }
    //     }
    //     else if ($visibility === 1) {
    //         include __DIR__ . "/shortcodes/".$id.'.php';
    //     }
    // }

    foreach ($shortcode_visibility as $id => $visibility) {

        // Check visibility: either enabled for all (1) or enabled for current page
        $show = false;
        if ($visibility === 1) {
            $show = true;
        } elseif (is_array($visibility) && in_array($page_slug, $visibility)) {
            $show = true;
        }

        if (!$show) continue;

        $data = $page['body'][$id] ?? null;
        include __DIR__ . "/shortcodes/{$id}.php";
    }
}
include __DIR__ . '/includes/footer.php';