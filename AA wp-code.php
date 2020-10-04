<?php 

/*
* POST FUNCTION CODE
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
* FILE LINK CODE
*/


<!-- DYNAMIC IMAGE LINK -->

<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>

<!-- POST CREATING CODE -->
<!-- START --> 
<?php  $posts = new WP_Query( array( 'post_type' => 'post name' , 'order' => 'ASC' ) );
while($posts->have_posts()) : $posts->the_post();?>
<!-- END -->
<?php endwhile; ?>

<!-- CONTENT AND TITLE DYNAMIC CODE -->
<?php echo get_the_title();?>
<?php echo get_the_content();?>
<?php echo the_excerpt(); ?>

<!-- SITE URL CODE -->
<?=site_url();?>


<!-- PAGE DYnamic CODE -->
<?php $my_query = new WP_Query('page_id=7'); while ($my_query->have_posts()) : $my_query->the_post();?>
<!-- END -->
<?php endwhile; ?>

<!-- ADD HEADER -->
<?php
/**
/* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage buildline
 * @since buildline 1.0
 */
 get_header(); ?>

<!-- Dynamic Link -->
<?php the_permalink();?>
 <!-- ADD FOOTER -->
 <?php get_footer(); ?>
<!-- Dynamic page  -->
 <?Php while ( have_posts() ) : the_post(); ?>

<!-- CATEGORI CODE -->
<!-- START --> 
<?php $catquery = new WP_Query( 'post_type=recipes&cat=1&posts_per_page=20&order=ASC' ); while($catquery->have_posts()) : $catquery->the_post(); ?>
<!-- END -->
 <?php endwhile; ?>	

<!-- NAVBER DYNAMIC CODE -->

		                                <?php   wp_nav_menu( array(
		                                    'theme_location'    => 'primary',
		                                    'depth'             => 2,
		                                    'container'         => 'ul',
		                                    'container_class'   => '',
		                                    'container_id'      => 'menu_main',
		                                    'menu_class'        => 'menu_main_nav',
		                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		                                    'walker'            => new WP_Bootstrap_Navwalker())
		                                );
		                                ?>



<!-- Archives Code -->
<?php
/**
 * The template for displaying srvices archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!-- Archives Code -->

<!-- For calling widgets -->
<?php dynamic_sidebar('sidebar-1')?>


























?>