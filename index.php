<?php
require_once __DIR__ . '/config.php';
$page_title = 'Home';
$page_slug = 'home';

$page = get_page_by_slug('home') ?? ['page_title' => 'Page not found'];
include __DIR__ . '/includes/header.php';

if (!empty($page['body']) ) {
    $body = $page['body'];
    
    foreach( $page['body'] as $id => $data ) {
        $visibility = $shortcode_visibility[$id];
        if( is_array($visibility) ) {
            foreach( $visibility as $slug_check ) {
                if( $page_slug === $slug_check ) {
                    include __DIR__ . "/shortcodes/".$id.'.php';
                }
            }
        }
        else if ($visibility === 1) {
            include __DIR__ . "/shortcodes/".$id.'.php';
        }
    }
}
include __DIR__ . '/includes/footer.php';