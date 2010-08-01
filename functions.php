<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
    
if (function_exists('register_nav_menus')) {
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'twentyten' ),
    ) );
}
?>
