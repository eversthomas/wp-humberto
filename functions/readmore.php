<?php
/**
 * Make readmore to a link.
 */
function humberto_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow" class="readmore">Read More...</a>';
}
add_filter( 'excerpt_more', 'humberto_excerpt_more' );