<?php
register_nav_menu('main', 'Main Navigation Menu');
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name'           => 'Sidebar',
        'id'             => 'sidebar-1',
        'before_widget'  => '<li id="%1$s" style="margin-bottom:40px;">',
        'after_widget'   => '</li>',
        'before_title'   => '<h3>',
        'after_title'    => '</h3>',
    ));
?>