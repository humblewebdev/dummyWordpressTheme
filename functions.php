<?php
//Register a nav bar
function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


// Regsiter a widget area
if (function_exists('register_sidebar')) {
	register_sidebar(array(
	'name' => 'Footer logo',
	'id'   => 'Footer logo',
	'description'   => 'Hild & Hild footer logo area',
	'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">',
	'after_widget'  => '</div>',
	'before_title'  => '',	
	'after_title'   => ''
			));
}

?>