<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'squareread', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'squareread' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'squareread' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'squareread' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'squareread' ),
	'button_url'  => 'https://wordpress.org/support/theme/squareread/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'squareread' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'squareread' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'squareread' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'squareread' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'squareread' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'squareread' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'squareread' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'squareread' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'squareread' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'squareread' ),
	'description'	=> esc_html__( 'Hide sidebar content on low-resolution mobile devices (320px)', 'squareread' ),
	'section'		=> 'general',
	'default'		=> '1',
	'choices'		=> array(
		'1'			=> esc_html__( 'Show sidebars', 'squareread' ),
		's1'		=> esc_html__( 'Hide primary sidebar', 'squareread' ),
		's2'		=> esc_html__( 'Hide secondary sidebar', 'squareread' ),
		's1-s2'		=> esc_html__( 'Hide both sidebars', 'squareread' ),
	),
) );
// General: Post Comments
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-comments',
	'label'			=> esc_html__( 'Post Comments', 'squareread' ),
	'description'	=> esc_html__( 'Comments on posts', 'squareread' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Page Comments
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'page-comments',
	'label'			=> esc_html__( 'Page Comments', 'squareread' ),
	'description'	=> esc_html__( 'Comments on pages', 'squareread' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Recommended Plugins
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'squareread' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'squareread' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Blog Layout
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-layout',
	'label'			=> esc_html__( 'Blog Layout', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> 'blog-standard',
	'choices'		=> array(
		'blog-standard'	=> esc_html__( 'Standard', 'squareread' ),
		'blog-grid'		=> esc_html__( 'Grid', 'squareread' ),
		'blog-list'		=> esc_html__( 'List', 'squareread' ),
	),
) );
// Blog: Heading
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'squareread' ),
	'description'	=> esc_html__( 'Your blog heading', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'squareread' ),
	'description'	=> esc_html__( 'Your blog subheading', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'squareread' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> '34',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Category
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'squareread' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'squareread' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'squareread' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> '5',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'squareread' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'squareread' ),
	'description'	=> esc_html__( '2 columns of widgets', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'squareread' ),
	'description'	=> esc_html__( '2 columns of widgets', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Thumbnail Comment Count
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Thumbnail Comment Count', 'squareread' ),
	'description'	=> esc_html__( 'Comment count on thumbnails', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'squareread' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'squareread' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'squareread' ),
		'categories'=> esc_html__( 'Related by categories', 'squareread' ),
		'tags'		=> esc_html__( 'Related by tags', 'squareread' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'squareread' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'squareread' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'squareread' ),
		's1'		=> esc_html__( 'Sidebar Primary', 'squareread' ),
		's2'		=> esc_html__( 'Sidebar Secondary', 'squareread' ),
		'content'	=> esc_html__( 'Below content', 'squareread' ),
	),
) );
// Header: Ads
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-ads',
	'label'			=> esc_html__( 'Header Ads', 'squareread' ),
	'description'	=> esc_html__( 'Header widget ads area', 'squareread' ),
	'section'		=> 'header',
	'default'		=> 'off',
) );
// Header: Search
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'squareread' ),
	'description'	=> esc_html__( 'Header search button', 'squareread' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'squareread' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'squareread' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Ads
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'squareread' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'squareread' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'squareread' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'squareread' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'squareread' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'squareread' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'squareread' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'squareread' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'squareread' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'squareread' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'squareread' ),
	'description'	=> esc_html__( 'Footer credit text', 'squareread' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'squareread' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'squareread' ),
	'section'		=> 'layout',
	'default'		=> 'col-3cm',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'squareread' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'squareread' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'squareread' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'squareread' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'squareread' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'squareread' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'squareread' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'squareread' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'squareread' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'squareread' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'squareread' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'squareread' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'squareread' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'squareread' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );


function squareread_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'squareread' ),
		'description'	=> esc_html__( '(is_home) Primary', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-home',
		'label'			=> esc_html__( 'Home', 'squareread' ),
		'description'	=> esc_html__( '(is_home) Secondary', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'squareread' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-single',
		'label'			=> esc_html__( 'Single', 'squareread' ),
		'description'	=> esc_html__( '(is_single) Secondary - If a single post has a unique sidebar, it will override this.', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'squareread' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive',
		'label'			=> esc_html__( 'Archive', 'squareread' ),
		'description'	=> esc_html__( '(is_archive) Secondary', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'squareread' ),
		'description'	=> esc_html__( '(is_category) Primary', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'squareread' ),
		'description'	=> esc_html__( '(is_category) Secondary', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'squareread' ),
		'description'	=> esc_html__( '(is_search) Primary', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-search',
		'label'			=> esc_html__( 'Search', 'squareread' ),
		'description'	=> esc_html__( '(is_search) Secondary', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'squareread' ),
		'description'	=> esc_html__( '(is_404) Primary', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-404',
		'label'			=> esc_html__( 'Error 404', 'squareread' ),
		'description'	=> esc_html__( '(is_404) Secondary', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'squareread' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	Kirki::add_field( 'squareread_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-page',
		'label'			=> esc_html__( 'Default Page', 'squareread' ),
		'description'	=> esc_html__( '(is_page) Secondary - If a page has a unique sidebar, it will override this.', 'squareread' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'squareread' ),
	) );
	
 } 
add_action( 'init', 'squareread_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'squareread' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'squareread' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'squareread' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'squareread' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'squareread' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'squareread' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'squareread' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'squareread' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'squareread' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'squareread' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'squareread' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'squareread' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'squareread' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'squareread' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'squareread' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'squareread' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'squareread' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'squareread' ),
	'description'	=> esc_html__( 'Select font for the theme', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'squareread' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'squareread' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'squareread' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'squareread' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'squareread' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'squareread' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'squareread' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'squareread' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'squareread' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'squareread' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'squareread' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'squareread' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'squareread' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'squareread' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'squareread' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'squareread' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'squareread' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'squareread' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'squareread' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'squareread' ),
		'arial'					=> esc_html__( 'Arial', 'squareread' ),
		'georgia'				=> esc_html__( 'Georgia', 'squareread' ),
		'verdana'				=> esc_html__( 'Verdana', 'squareread' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'squareread' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'squareread' ),
	'description'	=> esc_html__( 'Max-width of the container. If you use 2 sidebars, your container should be at least 1280px. Note: For 700px content (default) use 1440px for 2 sidebars and 1120px for 1 sidebar. If you use a combination of both, try something inbetween.', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> '1440',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Sidebar Width
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'sidebar-padding',
	'label'			=> esc_html__( 'Sidebar Width', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> '30',
	'choices'		=> array(
		'30'	=> esc_html__( '280px primary (30px padding)', 'squareread' ),
		'20'	=> esc_html__( '300px primary (20px padding)', 'squareread' ),
	),
) );
// Styling: Primary Color
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> '#26abd3',
) );
// Styling: Logo Background
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-logo',
	'label'			=> esc_html__( 'Logo Background', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Comments Bubble
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-bubble',
	'label'			=> esc_html__( 'Comments Bubble', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> '#dd5827',
) );
// Styling: Mobile Menu Background
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-mobile-menu',
	'label'			=> esc_html__( 'Mobile Menu Color', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> '#333333',
) );
// Styling: Topbar Menu Background
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-topbar-menu',
	'label'			=> esc_html__( 'Topbar Menu Color', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> '#333333',
) );
// Styling: Header Background
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header',
	'label'			=> esc_html__( 'Header Background', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Footer Menu Background
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer-menu',
	'label'			=> esc_html__( 'Footer Menu Color', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Footer Background
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer',
	'label'			=> esc_html__( 'Footer Background', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> '#333333',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'squareread' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Image Border Radius
Kirki::add_field( 'squareread_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'image-border-radius',
	'label'			=> esc_html__( 'Image Border Radius', 'squareread' ),
	'description'	=> esc_html__( 'Give your thumbnails and layout images rounded corners', 'squareread' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );