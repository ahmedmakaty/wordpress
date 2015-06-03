<?php

define('THEMEROOT',get_stylesheet_directory_uri());
define('IMAGES',THEMEROOT . "/images");
define('JS',THEMEROOT . "/js");

add_filter('show_admin_bar', '__return_false');

register_sidebar( $args );

$args = array(
	'name'          => sprintf( __( 'Sidebar %d' ), $i ),
	'id'            => "sidebar-$i",
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>\n",
);

function register_my_menus(){
	register_nav_menus(array(
		'main-menu'=> 'Main menu',
		));
}

add_action('init','register_my_menus');

if(function_exists('add_theme_support')){
	add_theme_support('post-thumbnails');
	//set_post_thumbnail_size();
}

require_once('wp_bootstrap_navwalker.php');

?>