<?php

function register_my_menu() {
    register_nav_menu('top-bar',__( 'Top Bar' ));
}
add_action('init', 'register_my_menu');


function special_nav_class($classes, $item){
    $classes[] = 'header_navigation-links';
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
