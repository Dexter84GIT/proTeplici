<?php

/** Убираем лишние тэги */
remove_filter( 'the_content', 'wpautop' );// для контента
remove_filter( 'the_excerpt', 'wpautop' );// для анонсов
remove_filter( 'comment_text', 'wpautop' );// для комментарий

/** пагинация */
// Replace WooCommerce Default Pagination with WP-PageNavi Pagination
remove_action('woocommerce_pagination', 'woocommerce_pagination', 10);
 
function woocommerce_pagination() {
    wp_pagenavi();     
}
 
add_action( 'woocommerce_pagination', 'woocommerce_pagination', 10);

?>