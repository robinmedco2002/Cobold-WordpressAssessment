<?php

function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}
function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'Cobold-WordpressAssessment' ),
		'two' => __( 'Two', 'Cobold-WordpressAssessment' ),
		'three' => __( 'Three', 'Cobold-WordpressAssessment' ),
		'four' => __( 'Four', 'Cobold-WordpressAssessment' ),
		'five' => __( 'Five', 'Cobold-WordpressAssessment' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'Cobold-WordpressAssessment' ),
		'two' => __( 'Pancake', 'Cobold-WordpressAssessment' ),
		'three' => __( 'Omelette', 'Cobold-WordpressAssessment' ),
		'four' => __( 'Crepe', 'Cobold-WordpressAssessment' ),
		'five' => __( 'Waffle', 'Cobold-WordpressAssessment' )
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
		'name' => __( 'Basic Settings', 'Cobold-WordpressAssessment' ),
		'type' => 'heading'
	);
    $options[] = array(
		'name' => __( 'Add Logo', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'upload logo.', 'Cobold-WordpressAssessment' ),
		'id' => 'Cobold-WordpressAssessment_logo',
		'type' => 'upload'
	);

	    $options[] = array(
		'name' => __( 'Add Ratina Logo', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'upload ratina logo.', 'Cobold-WordpressAssessment' ),
		'id' => 'ratina_logo',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Add Footer Logo', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'upload Footer logo.', 'Cobold-WordpressAssessment' ),
		'id' => 'footer_logo',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'Open Time Add', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'Open Time link', 'Cobold-WordpressAssessment' ),
		'id' => 'time',
		'type' => 'text'
	);
	
	
	
	
	$options[] = array(
		'name' => __( 'Phone No:', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'Enter Phone No.', 'Cobold-WordpressAssessment' ),
		'id' => 'phone',
		'std' => '+ 0406 583 082',
		'type' => 'text'
	);

	
	$options[] = array(
		'name' => __( 'Email:', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'Enter Email Address.', 'Cobold-WordpressAssessment' ),
		'id' => 'email',
		'std' => 'azqualitycars.605belmore@gmail.com',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Address:', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'Your Address.', 'Cobold-WordpressAssessment' ),
		'id' => 'address',
		'type' => 'textarea'
	);

		$options[] = array(
		'name' => __( 'Cobold-WordpressAssessment:', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'Cobold-WordpressAssessment link.', 'Cobold-WordpressAssessment' ),
		'id' => 'Cobold-WordpressAssessment',
		'std' => '#',
		'type' => 'text'
	);

    $options[] = array(
		'name' => __( 'Facebook:', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'Enter Facebook link.', 'Cobold-WordpressAssessment' ),
		'id' => 'facebook',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Instagram:', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'Enter instagram link', 'Cobold-WordpressAssessment' ),
		'id' => 'instagram',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Youtube:', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'Enter Youtube link', 'Cobold-WordpressAssessment' ),
		'id' => 'youtube',
		'std' => '#',
		'type' => 'text'
	);

 $options[] = array(
		'name' => __( 'Twitter:', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'Enter Twitter link.', 'Cobold-WordpressAssessment' ),
		'id' => 'twitter',
		'std' => '#',
		'type' => 'text'
	);

  $options[] = array(
		'name' => __( 'Linkedin:', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'Enter Linkedin link.', 'Cobold-WordpressAssessment' ),
		'id' => 'linkedin',
		'std' => '#',
		'type' => 'text'
	);

   $options[] = array(
		'name' => __( 'Youtube:', 'Cobold-WordpressAssessment' ),
		'placeholder' => __( 'Enter Youtube link.', 'Cobold-WordpressAssessment' ),
		'id' => 'youtube',
		'std' => '#',
		'type' => 'text'
	);


	$options[] = array(
		'name' => __( 'Footer Text', 'Cobold-WordpressAssessment' ),
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
		'name' => __( 'Footer About Text', 'Cobold-WordpressAssessment' ),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'Cobold-WordpressAssessment' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'footer_text',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	return $options;
}