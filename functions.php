<?php
    
if (function_exists('register_nav_menus')) {
    register_nav_menus( array(
        'primary' => 'Primary Navigation',
    ) );
}

if ( function_exists('register_sidebars') ) {
    register_sidebars(4, array() );    
}

?>
