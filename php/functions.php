<?php
/**
 * proteplici functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package proteplici
 */

/** Отключаем версии стилей и скриптов */
function _remove_script_version($src){
    $parts = explode('?', $src);
    return $parts
}
add_filter('script_loader_src','_remove_script_version',15,1);
add_filter('style_loader_src','_remove_script_version',15,1);

/** Убираем лишние тэги */
remove_filter( 'the_content', 'wpautop' );// для контента
remove_filter( 'the_excerpt', 'wpautop' );// для анонсов
remove_filter( 'comment_text', 'wpautop' );// для комментарий

?>