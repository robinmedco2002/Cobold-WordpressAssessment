<?php
/**
 * Cobold-WordpressAssessment functions and definitions
 *
 * @package WordPress
 * @subpackage Cobold-WordpressAssessment
 * @since Cobold-WordpressAssessment 1.0
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Cobold-WordpressAssessment 1.0
 */
 load_theme_textdomain( 'Cobold-WordpressAssessment' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'Cobold-WordpressAssessment' ),
		'header'  => __( 'Header menu', 'Cobold-WordpressAssessment' ),
		'footer'  => __( 'Footer menu', 'Cobold-WordpressAssessment' ),
	) );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );
	/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */
 
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>
<?php
}
/*
* Creating a function to create widget
*/
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'Cobold-WordpressAssessment' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'Cobold-WordpressAssessment' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

/*
* Creating a function to create our slider
*/

function slider_post_type() {
	$labels = array(
		'name'                => _x( 'Slider', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'slider', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'slider', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent slider', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All slider', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View slider', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New slider', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit slider', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update slider', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search slider', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'Slider', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'Slider news and reviews', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_post_type', 0 );





/*
* Creating a function to create our service
*/

function service_post_type() {
	$labels = array(
		'name'                => _x( 'service', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'service', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'service', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent service', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All service', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View service', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New service', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit service', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update service', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search service', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'service', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'service news and reviews', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'service', $args );
}
add_action( 'init', 'service_post_type', 0 );




/*
* Creating a function to create our feature
*/

function feature_post_type() {
	$labels = array(
		'name'                => _x( 'feature', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'feature', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'feature', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent feature', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All feature', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View feature', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New feature', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit feature', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update feature', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search feature', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'feature', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'feature news and reviews', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'feature', $args );
}
add_action( 'init', 'feature_post_type', 0 );




/*
* Creating a function to create our about
*/

function about_post_type() {
	$labels = array(
		'name'                => _x( 'about', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'about', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'about', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent about', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All about', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View about', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New about', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit about', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update about', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search about', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'about', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'about news and reviews', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'about', $args );
}
add_action( 'init', 'about_post_type', 0 );



/*
* Creating a function to create our aboutright
*/

function aboutright_post_type() {
	$labels = array(
		'name'                => _x( 'aboutright', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'aboutright', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'aboutright', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent aboutright', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All aboutright', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View aboutright', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New aboutright', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit aboutright', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update aboutright', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search aboutright', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'aboutright', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'aboutright news and reviews', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'aboutright', $args );
}
add_action( 'init', 'aboutright_post_type', 0 );



/*
* Creating a function to create our workprocess
*/

function workprocess_post_type() {
	$labels = array(
		'name'                => _x( 'workprocess', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'workprocess', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'workprocess', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent workprocess', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All workprocess', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View workprocess', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New workprocess', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit workprocess', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update workprocess', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search workprocess', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'workprocess', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'workprocess news and reviews', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'workprocess', $args );
}
add_action( 'init', 'workprocess_post_type', 0 );




/*
* Creating a function to create our work
*/

function work_post_type() {
	$labels = array(
		'name'                => _x( 'work', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'work', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'work', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent work', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All work', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View work', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New work', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit work', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update work', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search work', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'work', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'work news and reviews', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'work', $args );
}
add_action( 'init', 'work_post_type', 0 );




/*
* Creating a function to create our reviewtitle
*/

function reviewtitle_post_type() {
	$labels = array(
		'name'                => _x( 'reviewtitle', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'reviewtitle', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'reviewtitle', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent reviewtitle', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All reviewtitle', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View reviewtitle', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New reviewtitle', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit reviewtitle', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update reviewtitle', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search reviewtitle', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'reviewtitle', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'reviewtitle news and reviewtitles', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'reviewtitle', $args );
}
add_action( 'init', 'reviewtitle_post_type', 0 );



/*
* Creating a function to create our review
*/

function review_post_type() {
	$labels = array(
		'name'                => _x( 'review', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'review', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'review', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent review', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All review', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View review', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New review', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit review', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update review', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search review', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'review', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'review news and reviews', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'review', $args );
}
add_action( 'init', 'review_post_type', 0 );




/*
* Creating a function to create our pricetitle
*/

function pricetitle_post_type() {
	$labels = array(
		'name'                => _x( 'pricetitle', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'pricetitle', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'pricetitle', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent pricetitle', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All pricetitle', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View pricetitle', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New pricetitle', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit pricetitle', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update pricetitle', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search pricetitle', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'pricetitle', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'pricetitle news and pricetitles', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'pricetitle', $args );
}
add_action( 'init', 'pricetitle_post_type', 0 );



/*
* Creating a function to create our price
*/

function price_post_type() {
	$labels = array(
		'name'                => _x( 'price', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'price', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'price', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent price', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All price', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View price', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New price', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit price', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update price', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search price', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'price', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'price news and prices', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'currency' ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'price', $args );
}
add_action( 'init', 'price_post_type', 0 );






/*
* Creating a function to create our counter
*/

function counter_post_type() {
	$labels = array(
		'name'                => _x( 'counter', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'counter', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'counter', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent counter', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All counter', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View counter', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New counter', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit counter', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update counter', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search counter', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'counter', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'counter news and counters', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'currency' ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'counter', $args );
}
add_action( 'init', 'counter_post_type', 0 );





/*
* Creating a function to create our blogtitle
*/

function blogtitle_post_type() {
	$labels = array(
		'name'                => _x( 'blogtitle', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'blogtitle', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'blogtitle', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent blogtitle', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All blogtitle', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View blogtitle', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New blogtitle', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit blogtitle', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update blogtitle', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search blogtitle', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'blogtitle', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'blogtitle news and blogtitles', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'currency' ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'blogtitle', $args );
}
add_action( 'init', 'blogtitle_post_type', 0 );





/*
* Creating a function to create our blog
*/

function blog_post_type() {
	$labels = array(
		'name'                => _x( 'blog', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'blog', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'blog', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent blog', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All blog', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View blog', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New blog', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit blog', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update blog', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search blog', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'blog', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'blog news and blogs', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'currency' ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'blog', $args );
}
add_action( 'init', 'blog_post_type', 0 );





// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');
/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_excerpt_support_for_pages' );

/**
 * Add Subtitle in admin post
 *
 * @param WP_Post $post Post object.
 *
 * @return void
 */
function subtitle( $post ) {

	if ( ! in_array( $post->post_type, [ 'post', 'page' ], true ) ) {
		return;
	}

	// The subtitle field.
	$_stitle = sanitize_text_field( get_post_meta( $post->ID, '_subtitle', true ) );
	
    echo '<div class="inside">';
	echo '<div id="edit-slug-box" class="hide-if-no-js">';
	echo '<label for="subtitle"><strong>' . __( 'Sub Title: ' ) . '</strong></label>';
    echo '<input type="text" name="subtitle" id="subtitle" value="' .  $_stitle . '" size="30" spellcheck="true" autocomplete="off" />';
	echo '</div>';
    echo '</div>';	
}



function testi_post_type() {
	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'Cobold-WordpressAssessment' ),
		'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name', 'Cobold-WordpressAssessment' ),
		'menu_name'           => __( 'Testimonials', 'Cobold-WordpressAssessment' ),
		'parent_item_colon'   => __( 'Parent Testimonials', 'Cobold-WordpressAssessment' ),
		'all_items'           => __( 'All Testimonials', 'Cobold-WordpressAssessment' ),
		'view_item'           => __( 'View Testimonials', 'Cobold-WordpressAssessment' ),
		'add_new_item'        => __( 'Add New Testimonials', 'Cobold-WordpressAssessment' ),
		'add_new'             => __( 'Add New', 'Cobold-WordpressAssessment' ),
		'edit_item'           => __( 'Edit Testimonials', 'Cobold-WordpressAssessment' ),
		'update_item'         => __( 'Update Testimonials', 'Cobold-WordpressAssessment' ),
		'search_items'        => __( 'Search Testimonials', 'Cobold-WordpressAssessment' ),
		'not_found'           => __( 'Not Found', 'Cobold-WordpressAssessment' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'Cobold-WordpressAssessment' ),
	);
	$args = array(
		'label'               => __( 'Testimonials', 'Cobold-WordpressAssessment' ),
		'description'         => __( 'Testimonials news and reviews', 'Cobold-WordpressAssessment' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'testi_post_type', 0 );



/**
 * Save Subtitle
 *
 * @param int     $post_ID Post ID.
 * @param WP_Post $post    Post object.
 * @param bool    $update  Whether this is an existing post being updated or not.
 *
 * @return void
 */
function save_subtitle( $post_ID, $post, $update ) {

	if ( ! in_array( $post->post_type, [ 'post', 'page' ], true ) ) {
		return;
	}

	// Prevent to execute twice.
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return;
	}

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

	// Get the subtitle value from $_POST.
	$_stitle = filter_input( INPUT_POST, 'subtitle', FILTER_SANITIZE_STRING );

	if ( $update ) {
		// Update the post meta.
		update_post_meta( $post_ID, '_subtitle', sanitize_text_field( $_stitle ) );
	} else if ( ! empty ( $_stitle ) ) {
		// Add unique post meta.
		add_post_meta( $post_ID, '_subtitle', sanitize_text_field( $_stitle ), true );
	}
}

add_action( 'edit_form_after_title', 'subtitle', 20 );
add_action( 'wp_insert_post', 'save_subtitle', 20, 3 );