<?php
/**
 * This file adds functions to the Moiraine WordPress theme.
 *
 * @package moiraine
 * @author  Jasper Frumau
 * @license GNU General Public License v2 or later
 * @link    https://imagewize.com/moiraine
 */

namespace Moiraine;

/**
 * Set up theme defaults and register various WordPress features.
 */
function setup() {

	// Enqueue editor styles and fonts.
	add_editor_style( 'style.css' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );


/**
 * Enqueue styles.
 */
function enqueue_style_sheet() {
	wp_enqueue_style( sanitize_title( __NAMESPACE__ ), get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style_sheet' );


/**
 * Add block style variations.
 */
function register_block_styles() {

	$block_styles = array(
		'core/list'         => array(
			'list-check'        => __( 'Check', 'moiraine' ),
			'list-check-circle' => __( 'Check Circle', 'moiraine' ),
			'list-boxed'        => __( 'Boxed', 'moiraine' ),
		),
		'core/code'         => array(
			'dark-code' => __( 'Dark', 'moiraine' ),
		),
		'core/cover'        => array(
			'blur-image-less' => __( 'Blur Image Less', 'moiraine' ),
			'blur-image-more' => __( 'Blur Image More', 'moiraine' ),
			'rounded-cover'   => __( 'Rounded', 'moiraine' ),
		),
		'core/column'       => array(
			'column-box-shadow' => __( 'Box Shadow', 'moiraine' ),
		),
		'core/post-excerpt' => array(
			'excerpt-truncate-2' => __( 'Truncate 2 Lines', 'moiraine' ),
			'excerpt-truncate-3' => __( 'Truncate 3 Lines', 'moiraine' ),
			'excerpt-truncate-4' => __( 'Truncate 4 Lines', 'moiraine' ),
		),
		'core/group'        => array(
			'column-box-shadow' => __( 'Box Shadow', 'moiraine' ),
			'background-blur'   => __( 'Background Blur', 'moiraine' ),
		),
		'core/separator'    => array(
			'separator-dotted' => __( 'Dotted', 'moiraine' ),
			'separator-thin'   => __( 'Thin', 'moiraine' ),
		),
		'core/image'        => array(
			'rounded-full' => __( 'Rounded Full', 'moiraine' ),
			'media-boxed'  => __( 'Boxed', 'moiraine' ),
		),
		'core/preformatted' => array(
			'preformatted-dark' => __( 'Dark Style', 'moiraine' ),
		),
		'core/post-terms'   => array(
			'term-button' => __( 'Button Style', 'moiraine' ),
		),
		'core/video'        => array(
			'media-boxed' => __( 'Boxed', 'moiraine' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );


/**
 * Load custom block styles only when the block is used.
 */
function enqueue_custom_block_styles() {

	// Scan our styles folder to locate block styles.
	$files = glob( get_template_directory() . '/assets/styles/*.css' );

	foreach ( $files as $file ) {

		// Get the filename and core block name.
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "moiraine-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', __NAMESPACE__ . '\enqueue_custom_block_styles' );


/**
 * Enqueue WooCommerce specific stylesheet
 */
function enqueue_woocommerce_styles() {

	// Only enqueue if WooCommerce is active.
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style(
			'moiraine-woocommerce-style',
			get_template_directory_uri() . '/assets/styles/woocommerce.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_woocommerce_styles' );


/**
 * Register pattern categories.
 */
function pattern_categories() {

	$block_pattern_categories = array(
		'moiraine/card'           => array(
			'label' => __( 'Cards', 'moiraine' ),
		),
		'moiraine/call-to-action' => array(
			'label' => __( 'Call To Action', 'moiraine' ),
		),
		'moiraine/features'       => array(
			'label' => __( 'Features', 'moiraine' ),
		),
		'moiraine/hero'           => array(
			'label' => __( 'Hero', 'moiraine' ),
		),
		'moiraine/pages'          => array(
			'label' => __( 'Pages', 'moiraine' ),
		),
		'moiraine/posts'          => array(
			'label' => __( 'Posts', 'moiraine' ),
		),
		'moiraine/pricing'        => array(
			'label' => __( 'Pricing', 'moiraine' ),
		),
		'moiraine/testimonial'    => array(
			'label' => __( 'Testimonials', 'moiraine' ),
		),
		'moiraine/menu'           => array(
			'label' => __( 'Menu', 'moiraine' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', __NAMESPACE__ . '\pattern_categories', 9 );


/**
 * Remove last separator on blog/archive if no pagination exists.
 */
function is_paginated() {
	global $wp_query;
	if ( $wp_query->max_num_pages < 2 ) {
		echo '<style>.blog .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .archive .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .blog .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .search .wp-block-post-template .wp-block-post:last-child .wp-block-post-excerpt + .wp-block-separator { display: none; }</style>';
	}
}
add_action( 'wp_head', __NAMESPACE__ . '\is_paginated' );


/**
 * Add a Sidebar template part area
 *
 * @param array $areas Array of template part areas.
 * @return array
 */
function template_part_areas( array $areas ) {
	$areas[] = array(
		'area'        => 'sidebar',
		'area_tag'    => 'section',
		'label'       => __( 'Sidebar', 'moiraine' ),
		'description' => __( 'The Sidebar template defines a page area that can be found on the Page (With Sidebar) template.', 'moiraine' ),
		'icon'        => 'sidebar',
	);

	$areas[] = array(
		'area'        => 'menu',
		'area_tag'    => 'header',
		'label'       => __( 'Menu', 'moiraine' ),
		'description' => __( 'Template parts for mega menu and navigation content.', 'moiraine' ),
		'icon'        => 'menu',
	);

	return $areas;
}
add_filter( 'default_wp_template_part_areas', __NAMESPACE__ . '\template_part_areas' );


/**
 * Assign mega menu template parts to Menu area and set clean titles
 *
 * @param object $template_part The template part object to modify.
 */
function assign_menu_template_parts( $template_part ) {
	if ( $template_part && isset( $template_part->slug ) ) {
		// Check if this is a mega menu template part from parts/menu/ directory.
		if ( strpos( $template_part->slug, 'mega-' ) === 0 ) {
			$template_part->area = 'menu';

			// Set clean titles without double slashes.
			$clean_titles = array(
				'mega-card-1'   => __( 'Mega Card Style 1 - Simple Icon Menu', 'moiraine' ),
				'mega-card-2'   => __( 'Mega Card Style 2 - Feature List Menu', 'moiraine' ),
				'mega-card-3'   => __( 'Mega Card Style 3 - CTA Menu', 'moiraine' ),
				'mega-card-4'   => __( 'Mega Card Style 4 - Service Showcase Menu', 'moiraine' ),
				'mega-panel-1'  => __( 'Mega Panel Style 1 - Multi-column Layout', 'moiraine' ),
				'mega-panel-2'  => __( 'Mega Panel Style 2 - Feature Grid Layout', 'moiraine' ),
				'mega-panel-3'  => __( 'Mega Panel Style 3 - Enterprise Layout', 'moiraine' ),
				'mega-panel-4'  => __( 'Mega Panel Style 4 - Product Showcase Layout', 'moiraine' ),
				'mega-mobile-1' => __( 'Mega Mobile Style 1 - Sectioned Navigation', 'moiraine' ),
				'mega-mobile-2' => __( 'Mega Mobile Style 2 - Category Navigation', 'moiraine' ),
				'mega-mobile-3' => __( 'Mega Mobile Style 3 - Full-screen Navigation', 'moiraine' ),
				'mega-mobile-4' => __( 'Mega Mobile Style 4 - Drawer Navigation', 'moiraine' ),
				'mega-mobile-5' => __( 'Mega Mobile Style 5 - Tab Navigation', 'moiraine' ),
				'mega-mobile-6' => __( 'Mega Mobile Style 6 - Accordion Navigation', 'moiraine' ),
			);

			if ( isset( $clean_titles[ $template_part->slug ] ) ) {
				$template_part->title = $clean_titles[ $template_part->slug ];
			}
		}
	}
	return $template_part;
}
add_filter( 'get_block_template', __NAMESPACE__ . '\assign_menu_template_parts' );


/**
 * Register the Moiraine Mega Menu Block directly in theme
 */
function register_mega_menu_block() {
	register_block_type_from_metadata( get_template_directory() . '/blocks/hm-mega-menu-block' );
}
add_action( 'init', __NAMESPACE__ . '\register_mega_menu_block' );
