<?php


if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}

/*
	 Custom Post Type
*/
function jlm_custom_post_type (){
	
	$labels = array(
		'name' => 'Events',
		'singular_name' => 'Event',
		'add_new' => 'Add Event',
		'all_events' => 'All Events',
		'add_new_event' => 'Add Event',
		'edit_event' => 'Edit Event',
		'new_event' => 'New Event',
		'view_event' => 'View Event',
		'search_events' => 'Search Event',
		'not_found' => 'No Events found',
		'not_found_in_trash' => 'No Events found in trash',
		'parent_event_colon' => 'Parent Event'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('event',$args);
}
add_action('init','jlm_custom_post_type');


add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
    }
} );



function required_scripts() {
    
    /* THIS GETS ALL THE REQUIRED CSS*/
    wp_enqueue_style('jlmtheme_stylesheet', get_stylesheet_uri() . '/css/style.css');
    wp_enqueue_style('bootstrap', '//https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', '//https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    
    /* THIS GETS ALL THE REQUIRED JAVASCRIPT*/
    wp_enqueue_style('bootstrap', '//https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    wp_enqueue_script( 'customjs-script', get_template_directory_uri() . '/js/jlm.js', array(), true );
    wp_enqueue_script( 'googlemap-script', get_template_directory_uri() . '/js/map.js', array(), true );
    wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/js/jquery.js', array(), true );
    wp_enqueue_script( 'javascript-script', get_template_directory_uri() . '/js/contact_me.js', array(), true );
    wp_enqueue_script( 'javascript-script', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array(), true );
}
add_action('wp_enqueue_scripts', 'required_scripts');


// add home headline callout section to admin appearance customize screen//

function jlm_home_callout($wp_customize) {
    $wp_customize->add_section('jlm-home-callout-section', array(
        'title' => 'Home'
    ));
    $wp_customize->add_setting('jlm-home-callout-headline', array(
        'default' => 'Example Headline Text!'
    ));
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jlm-home-callout-headline-control', array(
            'label' => 'Home Headline', 'section' => 'jlm-home-callout-section', 'settings' => 'jlm-home-callout-headline')));    
}

add_action('customize_register', 'jlm_home_callout');


// add about headline callout section to admin appearance customize screen//

function jlm_about_callout($wp_customize) {
    $wp_customize->add_section('jlm-about-callout-section', array(
        'title' => 'About'
    ));
    $wp_customize->add_setting('jlm-about-callout-headline', array(
        'default' => 'Example Headline Text!'
    ));
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jlm-about-callout-headline-control', array(
            'label' => 'About Headline', 'section' => 'jlm-about-callout-section', 'settings' => 'jlm-about-callout-headline')));    
}

add_action('customize_register', 'jlm_about_callout');


// add words headline callout section to admin appearance customize screen//

function jlm_word_callout($wp_customize) {
    $wp_customize->add_section('jlm-word-callout-section', array(
        'title' => 'Word of Today'
    ));
    $wp_customize->add_setting('jlm-word-callout-headline', array(
        'default' => 'Example Headline Text!'
    ));
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jlm-word-callout-headline-control', array(
            'label' => 'Words Headline', 'section' => 'jlm-word-callout-section', 'settings' => 'jlm-word-callout-headline')));    
}

add_action('customize_register', 'jlm_word_callout');