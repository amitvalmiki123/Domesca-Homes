<?php
/**
 * Parent theme bootstrap.
 *
 * The parent is intentionally minimal. It only registers basic WordPress
 * supports so the child theme can extend it.
 *
 * @package Domesca_Parent
 */

defined( 'ABSPATH' ) || exit;

function domesca_parent_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 174,
		'width'       => 442,
		'flex-height' => true,
		'flex-width'  => true,
	) );
}
add_action( 'after_setup_theme', 'domesca_parent_setup' );
