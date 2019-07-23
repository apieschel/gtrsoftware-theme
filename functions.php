<?php

// ******************* Sidebars ****************** //

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Blog',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

// ******************* Add Custom Menus ****************** //

add_theme_support( 'menus' );

// ******************* Add Custom Excerpt Lengths ****************** //

function wpe_excerptlength_index($length) {
    return 160;
}
function wpe_excerptmore($more) {
    return '...<a href="'. get_permalink().'">Read More ></a>';
}

function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

// ******************* Add Post Thumbnails ****************** //

add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 50, 50, true );
//add_image_size( 'category-thumb', 300, 9999, true );

// ******************* Add Custom Post Types & Taxonomies ****************** //

register_post_type('custom', array(
	'label' => __('Custom Post Type'),
	'singular_label' => __('Custom Post Type'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => true,
	'query_var' => false,
	'has_archive' => false,
	'supports' => array('title', 'editor', 'thumbnail')
));

add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
    register_taxonomy( 'taxo', 'custom', array( 'hierarchical' => true, 'label' => 'Custom Taxonomy', 'query_var' => true, 'rewrite' => true ) ); 
}

// ******************* ACF Options Page ****************** //

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

// ******************* Include jQuery Properly ****************** //

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js", true, null);
   wp_enqueue_script('jquery');
}

// ******************* Add SVG Upload Support ****************** //

function wpcontent_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );

add_filter( 'wp_get_attachment_image_src', 'fix_wp_get_attachment_image_svg', 10, 4 );  /* the hook */

 function fix_wp_get_attachment_image_svg($image, $attachment_id, $size, $icon) {
    if (is_array($image) && preg_match('/\.svg$/i', $image[0]) && $image[1] <= 1) {
        if(is_array($size)) {
            $image[1] = $size[0];
            $image[2] = $size[1];
        } elseif(($xml = simplexml_load_file($image[0])) !== false) {
            $attr = $xml->attributes();
            $viewbox = explode(' ', $attr->viewBox);
            $image[1] = isset($attr->width) && preg_match('/\d+/', $attr->width, $value) ? (int) $value[0] : (count($viewbox) == 4 ? (int) $viewbox[2] : null);
            $image[2] = isset($attr->height) && preg_match('/\d+/', $attr->height, $value) ? (int) $value[0] : (count($viewbox) == 4 ? (int) $viewbox[3] : null);
        } else {
            $image[1] = $image[2] = null;
        }
    }
    return $image;
} 


/**
 * Enqueue scripts and styles.
 */

function gtr_scripts() {
	
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300', null );
	
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', null );

	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css', null );
	
	wp_enqueue_style( 'lightbox-css', get_stylesheet_directory_uri() . '/assets/lightbox/dist/css/lightbox.min.css', null );
	
	wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', null );
	
	wp_enqueue_style( 'gtr-style', get_stylesheet_uri(), null );
	
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), true, null);
	
	if ( is_page_template( 'page-twitch-api.php' ) ) {
		wp_enqueue_script( '7d9edmcke93845kdmgldk3-js', get_stylesheet_directory_uri() . '/assets/7d9edmcke93845kdmgldk3.js', array( 'jquery' ), false, null);
	}
	
	if ( is_page_template( 'page-javascript-calculator.php' ) ) {
		wp_enqueue_script( 'calculator-js', get_stylesheet_directory_uri() . '/assets/js/calc.js', array('jquery'), true, null);
	}
	
	if ( is_page_template( 'page-tic-tac-toe.php' ) ) {
		wp_enqueue_script( 'tic-tac-toe-js', get_stylesheet_directory_uri() . '/assets/js/tictac.js', array('jquery'), true, null);
	}
	
	if ( is_page_template( 'page-simon.php' ) ) {
		wp_enqueue_script( 'simon-js', get_stylesheet_directory_uri() . '/assets/js/simon.js', array('jquery'), true, null);
	}
	
	if ( is_page_template( 'page-pomodoro.php' ) ) {
		wp_enqueue_script( 'pomodoro-js', get_stylesheet_directory_uri() . '/assets/js/pomodoro.js', array('jquery'), true, null);
	}
	
	wp_enqueue_script( 'lightbox-js', get_stylesheet_directory_uri() . '/assets/lightbox/dist/js/lightbox.min.js', true, null);
	
}

add_action( 'wp_enqueue_scripts', 'gtr_scripts' );

?>