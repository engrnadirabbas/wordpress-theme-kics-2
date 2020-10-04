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
        'name'          => __( 'Main Sidebar', 'wordpress' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wordpress' ),
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