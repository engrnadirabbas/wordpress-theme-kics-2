<?php
/**
 * wordpress functions and definitions
 *
 * @package WordPress
 * @subpackage wordpress
 * @since wordpress 1.0
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since wordpress 1.0
 */
 load_theme_textdomain( 'wordpress' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'wordpress' ),
		'header'  => __( 'Header menu', 'wordpress' ),
		'footer'  => __( 'Footer menu', 'wordpress' ),
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
        'name'          => __( 'footer 2', 'wordpress' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wordpress' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

function wpdocs_theme_slug_widgets_init_1() {
    register_sidebar( array(
        'name'          => __( 'footer Copy rightL', 'wordpress' ),
        'id'            => 'image-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wordpress' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init_1' );

function wpdocs_theme_slug_widgets_init_2() {
    register_sidebar( array(
        'name'          => __( 'footer Copy rightR', 'wordpress' ),
        'id'            => 'image-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wordpress' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init_2' );

function wpdocs_theme_slug_widgets_init_3() {
    register_sidebar( array(
        'name'          => __( 'blog-title', 'wordpress' ),
        'id'            => 'blog-title',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wordpress' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init_3' );

function wpdocs_theme_slug_widgets_init_4() {
    register_sidebar( array(
        'name'          => __( 'blog-content', 'wordpress' ),
        'id'            => 'blog-content',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wordpress' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init_4' );



/*
* Creating a function to create our slider
*/

function slider_post_type() {
	$labels = array(
		'name'                => _x( 'slider', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'slider', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'slider', 'resturant' ),
		'parent_item_colon'   => __( 'Parent slider', 'resturant' ),
		'all_items'           => __( 'All slider', 'resturant' ),
		'view_item'           => __( 'View slider', 'resturant' ),
		'add_new_item'        => __( 'Add New slider', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit slider', 'resturant' ),
		'update_item'         => __( 'Update slider', 'resturant' ),
		'search_items'        => __( 'Search slider', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'slider', 'resturant' ),
		'description'         => __( 'slider news and reviews', 'resturant' ),
		'labels'              => $labels,
		'menu_icon'   => 'dashicons-slides
',
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

function contact_post_type() {
	$labels = array(
		'name'                => _x( 'contact', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'contact', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'contact', 'resturant' ),
		'parent_item_colon'   => __( 'Parent contact', 'resturant' ),
		'all_items'           => __( 'All contact', 'resturant' ),
		'view_item'           => __( 'View contact', 'resturant' ),
		'add_new_item'        => __( 'Add New contact', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit contact', 'resturant' ),
		'update_item'         => __( 'Update contact', 'resturant' ),
		'search_items'        => __( 'Search contact', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'contact', 'resturant' ),
		'description'         => __( 'contact news and reviews', 'resturant' ),
		'labels'              => $labels,
		'menu_icon'   => 'dashicons-slides
',
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
	register_post_type( 'contact', $args );
}
add_action( 'init', 'contact_post_type', 0 );

function Sustain_B1_post_type() {
	$labels = array(
		'name'                => _x( 'Sustain_B1', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'Sustain_B1', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'Sustain_B1', 'resturant' ),
		'parent_item_colon'   => __( 'Parent Sustain_B1', 'resturant' ),
		'all_items'           => __( 'All Sustain_B1', 'resturant' ),
		'view_item'           => __( 'View Sustain_B1', 'resturant' ),
		'add_new_item'        => __( 'Add New Sustain_B1', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit Sustain_B1', 'resturant' ),
		'update_item'         => __( 'Update Sustain_B1', 'resturant' ),
		'search_items'        => __( 'Search Sustain_B1', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'Sustain_B1', 'resturant' ),
		'description'         => __( 'Sustain_B1 news and reviews', 'resturant' ),
		'labels'              => $labels,
		'menu_icon'   => 'dashicons-slides
',
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
	register_post_type( 'Sustain_B1', $args );
}
add_action( 'init', 'Sustain_B1_post_type', 0 );


function Sustain_B2_post_type() {
	$labels = array(
		'name'                => _x( 'Sustain_B2', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'Sustain_B2', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'Sustain_B2', 'resturant' ),
		'parent_item_colon'   => __( 'Parent Sustain_B2', 'resturant' ),
		'all_items'           => __( 'All Sustain_B2', 'resturant' ),
		'view_item'           => __( 'View Sustain_B2', 'resturant' ),
		'add_new_item'        => __( 'Add New Sustain_B2', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit Sustain_B2', 'resturant' ),
		'update_item'         => __( 'Update Sustain_B2', 'resturant' ),
		'search_items'        => __( 'Search Sustain_B2', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'Sustain_B2', 'resturant' ),
		'description'         => __( 'Sustain_B2 news and reviews', 'resturant' ),
		'labels'              => $labels,
		'menu_icon'   => 'dashicons-slides
',
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
	register_post_type( 'Sustain_B2', $args );
}
add_action( 'init', 'Sustain_B2_post_type', 0 );
function System_post_type() {
	$labels = array(
		'name'                => _x( 'System', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'System', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'System', 'resturant' ),
		'parent_item_colon'   => __( 'Parent System', 'resturant' ),
		'all_items'           => __( 'All System', 'resturant' ),
		'view_item'           => __( 'View System', 'resturant' ),
		'add_new_item'        => __( 'Add New System', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit System', 'resturant' ),
		'update_item'         => __( 'Update System', 'resturant' ),
		'search_items'        => __( 'Search System', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'System', 'resturant' ),
		'description'         => __( 'System news and reviews', 'resturant' ),
		'labels'              => $labels,
		'menu_icon'   => 'dashicons-slides
',
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
	register_post_type( 'System', $args );
}
add_action( 'init', 'System_post_type', 0 );


function Golden_B1_post_type() {
	$labels = array(
		'name'                => _x( 'Golden_B1', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'Golden_B1', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'Golden_B1', 'resturant' ),
		'parent_item_colon'   => __( 'Parent Golden_B1', 'resturant' ),
		'all_items'           => __( 'All Golden_B1', 'resturant' ),
		'view_item'           => __( 'View Golden_B1', 'resturant' ),
		'add_new_item'        => __( 'Add New Golden_B1', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit Golden_B1', 'resturant' ),
		'update_item'         => __( 'Update Golden_B1', 'resturant' ),
		'search_items'        => __( 'Search Golden_B1', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'Golden_B1', 'resturant' ),
		'description'         => __( 'Golden_B1 news and reviews', 'resturant' ),
		'labels'              => $labels,
		'menu_icon'   => 'dashicons-slides
',
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
	register_post_type( 'Golden_B1', $args );
}
add_action( 'init', 'Golden_B1_post_type', 0 );
function Golden_B2_post_type() {
	$labels = array(
		'name'                => _x( 'Golden_B2', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'Golden_B2', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'Golden_B2', 'resturant' ),
		'parent_item_colon'   => __( 'Parent Golden_B2', 'resturant' ),
		'all_items'           => __( 'All Golden_B2', 'resturant' ),
		'view_item'           => __( 'View Golden_B2', 'resturant' ),
		'add_new_item'        => __( 'Add New Golden_B2', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit Golden_B2', 'resturant' ),
		'update_item'         => __( 'Update Golden_B2', 'resturant' ),
		'search_items'        => __( 'Search Golden_B2', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'Golden_B2', 'resturant' ),
		'description'         => __( 'Golden_B2 news and reviews', 'resturant' ),
		'labels'              => $labels,
		'menu_icon'   => 'dashicons-slides
',
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
	register_post_type( 'Golden_B2', $args );
}
add_action( 'init', 'Golden_B2_post_type', 0 );

function f1_post_type() {
	$labels = array(
		'name'                => _x( 'f1', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'f1', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'f1', 'resturant' ),
		'parent_item_colon'   => __( 'Parent f1', 'resturant' ),
		'all_items'           => __( 'All f1', 'resturant' ),
		'view_item'           => __( 'View f1', 'resturant' ),
		'add_new_item'        => __( 'Add New f1', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit f1', 'resturant' ),
		'update_item'         => __( 'Update f1', 'resturant' ),
		'search_items'        => __( 'Search f1', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'f1', 'resturant' ),
		'description'         => __( 'f1 news and reviews', 'resturant' ),
		'labels'              => $labels,
		'menu_icon'   => 'dashicons-slides
',
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
	register_post_type( 'f1', $args );
}
add_action( 'init', 'f1_post_type', 0 );

function f2_post_type() {
	$labels = array(
		'name'                => _x( 'f2', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'f2', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'f2', 'resturant' ),
		'parent_item_colon'   => __( 'Parent f2', 'resturant' ),
		'all_items'           => __( 'All f2', 'resturant' ),
		'view_item'           => __( 'View f2', 'resturant' ),
		'add_new_item'        => __( 'Add New f2', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit f2', 'resturant' ),
		'update_item'         => __( 'Update f2', 'resturant' ),
		'search_items'        => __( 'Search f2', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'f2', 'resturant' ),
		'description'         => __( 'f2 news and reviews', 'resturant' ),
		'labels'              => $labels,
		'menu_icon'   => 'dashicons-slides
',
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
	register_post_type( 'f2', $args );
}
add_action( 'init', 'f2_post_type', 0 );

function languages_post_type() {
	$labels = array(
		'name'                => _x( 'languages', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'languages', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'languages', 'resturant' ),
		'parent_item_colon'   => __( 'Parent languages', 'resturant' ),
		'all_items'           => __( 'All languages', 'resturant' ),
		'view_item'           => __( 'View languages', 'resturant' ),
		'add_new_item'        => __( 'Add New languages', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit languages', 'resturant' ),
		'update_item'         => __( 'Update languages', 'resturant' ),
		'search_items'        => __( 'Search languages', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'languages', 'resturant' ),
		'description'         => __( 'languages news and reviews', 'resturant' ),
		'labels'              => $labels,
		'menu_icon'   => 'dashicons-slides
',
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
	register_post_type( 'languages', $args );
}
add_action( 'init', 'languages_post_type', 0 );



function strengths_post_type() {
	$labels = array(
		'name'                => _x( 'strengths', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'strengths', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'strengths', 'resturant' ),
		'parent_item_colon'   => __( 'Parent strengths', 'resturant' ),
		'all_items'           => __( 'All strengths', 'resturant' ),
		'view_item'           => __( 'View strengths', 'resturant' ),
		'add_new_item'        => __( 'Add New strengths', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit strengths', 'resturant' ),
		'update_item'         => __( 'Update strengths', 'resturant' ),
		'search_items'        => __( 'Search strengths', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'strengths', 'resturant' ),
		'description'         => __( 'strengths news and reviews', 'resturant' ),
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
	register_post_type( 'strengths', $args );
}
add_action( 'init', 'strengths_post_type', 0 );

function balls_post_type() {
	$labels = array(
		'name'                => _x( 'balls', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'balls', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'balls', 'resturant' ),

		'parent_item_colon'   => __( 'Parent balls', 'resturant' ),
		'all_items'           => __( 'All balls', 'resturant' ),
		'view_item'           => __( 'View balls', 'resturant' ),
		'add_new_item'        => __( 'Add New balls', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit balls', 'resturant' ),
		'update_item'         => __( 'Update balls', 'resturant' ),
		'search_items'        => __( 'Search balls', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'balls', 'resturant' ),
		'menu_icon'   => 'dashicons-sos',
		'description'         => __( 'balls news and reviews', 'resturant' ),
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
	register_post_type( 'balls', $args );
}
add_action( 'init', 'balls_post_type', 0 );

function h1_post_type() {
	$labels = array(
		'name'                => _x( 'h1', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'h1', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'h1', 'resturant' ),
		'parent_item_colon'   => __( 'Parent h1', 'resturant' ),
		 'menu_icon'   => 'dashicons-products',
		'all_items'           => __( 'All h1', 'resturant' ),
		'view_item'           => __( 'View h1', 'resturant' ),
		'add_new_item'        => __( 'Add New h1', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit h1', 'resturant' ),
		'update_item'         => __( 'Update h1', 'resturant' ),
		'search_items'        => __( 'Search h1', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'h1', 'resturant' ),
		'description'         => __( 'h1 h1 and reviews', 'resturant' ),
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
	register_post_type( 'h1', $args );
}
add_action( 'init', 'h1_post_type', 0 );

function b2_post_type() {
	$labels = array(
		'name'                => _x( 'b2', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'b2', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'b2', 'resturant' ),
		'parent_item_colon'   => __( 'Parent b2', 'resturant' ),
		'all_items'           => __( 'All b2', 'resturant' ),
		'view_item'           => __( 'View b2', 'resturant' ),
		'add_new_item'        => __( 'Add New b2', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit b2', 'resturant' ),
		'update_item'         => __( 'Update b2', 'resturant' ),
		'search_items'        => __( 'Search b2', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'b2', 'resturant' ),
		'description'         => __( 'b2 b2 and reviews', 'resturant' ),
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
	register_post_type( 'b2', $args );
}
add_action( 'init', 'b2_post_type', 0 );

function b1_post_type() {
	$labels = array(
		'name'                => _x( 'b1', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'b1', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'b1', 'resturant' ),
		'parent_item_colon'   => __( 'Parent b1', 'resturant' ),
		'all_items'           => __( 'All b1', 'resturant' ),
		'view_item'           => __( 'View b1', 'resturant' ),
		'add_new_item'        => __( 'Add New b1', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit b1', 'resturant' ),
		'update_item'         => __( 'Update b1', 'resturant' ),
		'search_items'        => __( 'Search b1', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'b1', 'resturant' ),
		'description'         => __( 'b1 b1 and reviews', 'resturant' ),
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
	register_post_type( 'b1', $args );
}
add_action( 'init', 'b1_post_type', 0 );

function client_post_type() {
	$labels = array(
		'name'                => _x( 'client', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'client', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'client', 'resturant' ),
		'parent_item_colon'   => __( 'Parent client', 'resturant' ),
		'all_items'           => __( 'All client', 'resturant' ),
		'view_item'           => __( 'View client', 'resturant' ),
		'add_new_item'        => __( 'Add New client', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit client', 'resturant' ),
		'update_item'         => __( 'Update client', 'resturant' ),
		'search_items'        => __( 'Search client', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'client', 'resturant' ),
		'description'         => __( 'client client and reviews', 'resturant' ),
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
	register_post_type( 'client', $args );
}
add_action( 'init', 'client_post_type', 0 );


function news_post_type() {
	$labels = array(
		'name'                => _x( 'news', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'news', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'news', 'resturant' ),
		'parent_item_colon'   => __( 'Parent news', 'resturant' ),
		'all_items'           => __( 'All news', 'resturant' ),
		'view_item'           => __( 'View news', 'resturant' ),
		'add_new_item'        => __( 'Add New news', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit news', 'resturant' ),
		'update_item'         => __( 'Update news', 'resturant' ),
		'search_items'        => __( 'Search news', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'news', 'resturant' ),
		'description'         => __( 'news news and reviews', 'resturant' ),
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
	register_post_type( 'news', $args );
}
add_action( 'init', 'news_post_type', 0 );

function team_post_type() {
	$labels = array(
		'name'                => _x( 'team', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'team', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'team', 'resturant' ),
		'parent_item_colon'   => __( 'Parent team', 'resturant' ),
		'all_items'           => __( 'All team', 'resturant' ),
		'view_item'           => __( 'View team', 'resturant' ),
		'add_new_item'        => __( 'Add New team', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit team', 'resturant' ),
		'update_item'         => __( 'Update team', 'resturant' ),
		'search_items'        => __( 'Search team', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'team', 'resturant' ),
		'description'         => __( 'team news and reviews', 'resturant' ),
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
	register_post_type( 'team', $args );
}
add_action( 'init', 'team_post_type', 0 );





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
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'wordpress' ),
		'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name', 'wordpress' ),
		'menu_name'           => __( 'Testimonials', 'wordpress' ),
		'parent_item_colon'   => __( 'Parent Testimonials', 'wordpress' ),
		'all_items'           => __( 'All Testimonials', 'wordpress' ),
		'view_item'           => __( 'View Testimonials', 'wordpress' ),
		'add_new_item'        => __( 'Add New Testimonials', 'wordpress' ),
		'add_new'             => __( 'Add New', 'wordpress' ),
		'edit_item'           => __( 'Edit Testimonials', 'wordpress' ),
		'update_item'         => __( 'Update Testimonials', 'wordpress' ),
		'search_items'        => __( 'Search Testimonials', 'wordpress' ),
		'not_found'           => __( 'Not Found', 'wordpress' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'wordpress' ),
	);
	$args = array(
		'label'               => __( 'Testimonials', 'wordpress' ),
		'description'         => __( 'Testimonials news and reviews', 'wordpress' ),
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