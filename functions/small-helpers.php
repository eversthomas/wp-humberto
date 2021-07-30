<?php
/**
 * remove wordpress version
 */
function wpb_remove_version() {
    return '';
}
add_filter('the_generator', 'wpb_remove_version');

/**
 * change dashboard welcome footrt text
 */
function remove_footer_admin () {
    echo 'Willkommen auf Deiner Wordpress Seite!';
}
add_filter('admin_footer_text', 'remove_footer_admin');