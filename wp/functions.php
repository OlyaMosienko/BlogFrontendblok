<?php

define( 'BLOGFRONTENDBLOK_THEME_ROOT', get_template_directory_uri() );
define( 'BLOGFRONTENDBLOK_IMG_DIR', BLOGFRONTENDBLOK_THEME_ROOT .'/img' );

// правильный способ подключить стили и скрипты темы
add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );

function theme_add_scripts() {
	// подключаем файл стилей темы
    wp_enqueue_style( 'style-swiper', get_template_directory_uri() .'/styles/swiper-bundle.min.css');
	wp_enqueue_style( 'style-main', get_template_directory_uri() .'/styles/main.css');
    wp_enqueue_style( 'style-media', get_template_directory_uri() .'/styles/media.css');

	// подключаем js файл темы
    wp_enqueue_script( 'script-swiper', get_template_directory_uri() .'/script/swiper-bundle.min.js', array(), '1.0', true );
    wp_enqueue_script( 'script-cursor', get_template_directory_uri() .'/script/cursor.js', array(), '1.0', true );
    wp_enqueue_script( 'script-main', get_template_directory_uri() .'/script/main.js', array(), '1.0', true );
}

add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){

	register_sidebar( array(
		'name'          => 'Categories Sidebar',
		'id'            => 'categories-sidebar',
		'description'   => 'Description',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget menu__categories %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	) );
}