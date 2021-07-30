<?php
/**
 * Delete die Emojis Scripts and Styles in Frontend
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* Entfernt die Emojis/Scripte/Styles im Backend */

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );