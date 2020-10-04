<?php

function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}
function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'luigi' ),
		'two' => __( 'Two', 'luigi' ),
		'three' => __( 'Three', 'luigi' ),
		'four' => __( 'Four', 'luigi' ),
		'five' => __( 'Five', 'luigi' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'luigi' ),
		'two' => __( 'Pancake', 'luigi' ),
		'three' => __( 'Omelette', 'luigi' ),
		'four' => __( 'Crepe', 'luigi' ),
		'five' => __( 'Waffle', 'luigi' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'Basic Settings', 'luigi' ),
		'type' => 'heading'
	);
    $options[] = array(
		'name' => __( 'Add Logo', 'luigi' ),
		'placeholder' => __( 'upload logo.', 'luigi' ),
		'id' => 'luigi_logo',
		'type' => 'upload'
	);

	    $options[] = array(
		'name' => __( 'Add Ratina Logo', 'luigi' ),
		'placeholder' => __( 'upload ratina logo.', 'luigi' ),
		'id' => 'ratina_logo',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Add Footer Logo', 'luigi' ),
		'placeholder' => __( 'upload Footer logo.', 'luigi' ),
		'id' => 'footer_logo',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Add Menu file', 'luigi' ),
		'placeholder' => __( 'upload menu file.', 'luigi' ),
		'id' => 'menu_file',
		'type' => 'upload'
	);

	
	
	
	
	
	$options[] = array(
		'name' => __( 'Phone No:', 'luigi' ),
		'placeholder' => __( 'Enter Phone No.', 'luigi' ),
		'id' => 'phone',
		'std' => '+61 0280064761',
		'type' => 'text'
	);



	$options[] = array(
		'name' => __( 'Email:', 'luigi' ),
		'placeholder' => __( 'Enter Email Address.', 'luigi' ),
		'id' => 'email',
		'std' => 'sales@yourwebsite.com',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Address:', 'luigi' ),
		'placeholder' => __( 'Your Address.', 'luigi' ),
		'id' => 'address',
		'type' => 'textarea'
	);
		$options[] = array(
		'name' => __( 'Add Map', 'luigi' ),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'luigi' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'map',
		'type' => 'editor',
		'settings' => $wp_editor_setting
		);

		$options[] = array(
		'name' => __( 'Website:', 'luigi' ),
		'placeholder' => __( 'Website link.', 'luigi' ),
		'id' => 'website',
		'std' => '#',
		'type' => 'text'
	);

    $options[] = array(
		'name' => __( 'Facebook:', 'luigi' ),
		'placeholder' => __( 'Enter Facebook link.', 'luigi' ),
		'id' => 'facebook',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Instagram:', 'luigi' ),
		'placeholder' => __( 'Enter instagram link', 'luigi' ),
		'id' => 'instagram',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Youtube:', 'luigi' ),
		'placeholder' => __( 'Enter Youtube link', 'luigi' ),
		'id' => 'youtube',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Pinterset:', 'luigi' ),
		'placeholder' => __( 'Enter Pinterset link', 'luigi' ),
		'id' => 'pinter',
		'std' => '#',
		'type' => 'text'
	);



	$options[] = array(
		'name' => __( 'Footer Text', 'luigi' ),
		'type' => 'heading'
	);

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Footer About Text', 'luigi' ),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'luigi' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'footer_text',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);
		

	return $options;
	
}