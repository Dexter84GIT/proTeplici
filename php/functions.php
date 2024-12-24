<?php
/**
 * proteplici functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package proteplici
 */

/** Убираем лишние тэги */
remove_filter( 'the_content', 'wpautop' );// для контента
remove_filter( 'the_excerpt', 'wpautop' );// для анонсов
remove_filter( 'comment_text', 'wpautop' );// для комментарий

/** Отключить зум */
remove_theme_support( 'wc-product-gallery-zoom' );
/** ACF */
add_filter('acf/settings/remove_wp_meta_box', '__return_false')
?>