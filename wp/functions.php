<?php

define( 'BLOGFRONTENDBLOK_THEME_ROOT', get_template_directory_uri() );
define( 'BLOGFRONTENDBLOK_IMG_DIR', BLOGFRONTENDBLOK_THEME_ROOT .'/img' );

function my_theme_scripts() {
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

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
	wp_enqueue_script( 'script-loadmore', get_template_directory_uri() .'/script/loadmore.js', array(), '1.0', true );
    wp_enqueue_script( 'script-main', get_template_directory_uri() .'/script/main.js', array(), '1.0', true );
}

// Categories Sidebar
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

// Search form
add_filter( 'get_search_form', 'my_search_form' );
function my_search_form( $form ) {

	$form = '
	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
		<label class="screen-reader-text" for="s">Запрос для поиска:</label>
		<input class="search-area__input" type="text" value="" placeholder="Введите запрос"' . get_search_query() . '" name="s" id="s" />
		<button class="search-area__btn" type="submit" id="searchsubmit"></button>
	</form>';

	return $form;
}

// Mobile Menu
add_action( 'after_setup_theme', 'mobile_menu' );

function mobile_menu() {
	register_nav_menu( 'mob', 'Mobile Menu' );
}

// function setPostViews($postID) {
// 	$count_key = 'post_views_count';
// 	$count = get_post_meta($postID, $count_key, true);
// 	if($count==''){
// 		$count = 0;
// 		delete_post_meta($postID, $count_key);
// 		add_post_meta($postID, $count_key, '0');
// 	}
// 	else{
// 		$count++;
// 		update_post_meta($postID, $count_key, $count);
// 	}
// }

// function getPostViews($postID){
// 	$count_key = 'post_views_count';
// 	$count = get_post_meta( $postID, $count_key, true);
// 	if( $count == '' ){
// 		delete_post_meta( $postID, $count_key);
// 		add_post_meta( $postID, $count_key, '0');
// 		return "0";
// 	}
// 	return $count;
// }

// Reading Time
function reading_time() {
	$content = get_the_content($post->ID);
	// $content = get_post_field( 'post_content', $post->ID );
	$content_clean = strip_tags($content);
	$word_count = count(preg_split('/\s+/', $content_clean));
	$readingtime = ceil($word_count / 200);
	if ($readingtime == 1) {
	  $timer = " мин";
	} elseif ($readingtime == 2 || $readingtime == 3 || $readingtime == 4) {
	  $timer = " мин";
	} else {
	  $timer = " мин";
	}
	$totalreadingtime = '~' . $readingtime . $timer;
   
	return $totalreadingtime;
  }

// Attention Blocks
  function add_attention_block_metabox() {
    add_meta_box(
        'attention_block_metabox',
        'Блок внимания',
        'render_attention_block_metabox',
        'post',
        'side',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_attention_block_metabox' );

function render_attention_block_metabox($post) {
    $value = get_post_meta( $post->ID, 'show_attention_block', true );
    ?>
    <label for="show_attention_block">Статья написана учеником?</label>
    <select name="show_attention_block" id="show_attention_block">
        <option value="yes" <?php selected( $value, 'yes' ); ?>>Да</option>
        <option value="no" <?php selected( $value, 'no' ); ?>>Нет</option>
    </select>

	<label for="attention_block_display_2">Отображать блок с рекламой курсов?</label>
    <select name="attention_block_display_2" id="attention_block_display_2">
        <option value="yes" <?php selected($value, 'yes'); ?>>Да</option>
        <option value="no" <?php selected($value, 'no'); ?>>Нет</option>
    </select>
    <?php
}

function save_attention_block_metabox_data( $post_id ) {
    if ( array_key_exists( 'show_attention_block', $_POST ) ) {
        update_post_meta(
            $post_id,
            'show_attention_block',
            $_POST['show_attention_block']
        );
    }
	if (array_key_exists('attention_block_display_2', $_POST)) {
        update_post_meta(
            $post_id,
            'attention_block_display_2',
            $_POST['attention_block_display_2']
        );
    }
}
add_action( 'save_post', 'save_attention_block_metabox_data' );