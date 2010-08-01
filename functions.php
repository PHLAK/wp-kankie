<?php
if ( function_exists('register_sidebar') ) {
    // Default sidebar widget area    
    register_sidebar();
    
    // Footer sidebar left
    register_sidebar( array(
        'name' => 'Footer Widget Left',
        'id' => 'footerWidgetLeft',
        'description' => 'Footer Widget Left',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

    // Footer sidebar center
    register_sidebar( array(
        'name' => 'Footer Widget Center',
        'id' => 'footerWidgetCenter',
        'description' => 'Footer Widget Center',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

    // Footer sidebar right
    register_sidebar( array(
        'name' => 'Footer Widget Right',
        'id' => 'footerWidgetRight',
        'description' => 'Footer Widget Right',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
}
    
if (function_exists('register_nav_menus')) {
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'twentyten' ),
    ) );
}
?>
