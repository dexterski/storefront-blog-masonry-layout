<?php
/*
Plugin Name: StoreFront Blog masonry grid layout
Plugin URI: https://bogaczek.com
Description: This plugin creates fully automatic, responsive masonry grid for Storefront blog, using pure CSS. For WooCommerce StoreFront theme only (but should work with other themes too – may need some CSS tweaking).
Version: 0.7
Author: Black Sun
Author URI: https://bogaczek.com
Text Domain: storefront-blog-masonry-layout
*/
defined('ABSPATH') or die();

// Enqueuing basic styles for plugin
function dexter_storefront_blog_masonry_layout() {
	wp_enqueue_style( 'dexter-storefront-blog-masonry-layout-style', plugins_url( 'assets/css/style.css', __FILE__ ) );
}

add_action('wp_enqueue_scripts', 'dexter_storefront_blog_masonry_layout', 666 );
?>