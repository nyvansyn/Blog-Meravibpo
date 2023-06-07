<?php
/**
 * ------------------------------------------------------
 *  Required files for this module
 * ------------------------------------------------------
 *
 * @since 1.0
 * @package Fansee Blog WordPress Theme
 */
function fansee_blog_tgm_files( $files ){

	$new_files = array(
		'class-tgm-plugin-activation.php',
	);

	return array_merge( $files, $new_files );
}
add_filter( 'fansee_blog_modules_tgm', 'fansee_blog_tgm_files' );

/**
 * ------------------------------------------------------
 *  Required plugins
 * ------------------------------------------------------
 *
 * @since 1.8
 * @package Fansee Blog WordPress Theme
 */
function fansee_blog_register_required_plugins(){
	$plugins = array(
		array(
			'name'     => esc_html__( 'One Click Demo Import', 'fansee-blog' ),
			'slug'     => 'one-click-demo-import',
			'required' => false,
		),
		array(
			'name'     => esc_html__( 'Fansee Themes Demo Data', 'fansee-blog' ),
			'slug'     => 'fansee-themes-demo-data',
			'required' => false
		),
	);

	tgmpa( $plugins );
}
add_action( 'tgmpa_register', 'fansee_blog_register_required_plugins' );