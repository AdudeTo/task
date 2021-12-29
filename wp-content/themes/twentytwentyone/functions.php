<?php
/**
 * Functions and definitions
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}
wp_enqueue_style( 'base', get_template_directory_uri() . '/assets/SCSS/main.css',false,'1.1','all');
