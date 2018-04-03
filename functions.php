<?php

//registrera menyer i temat
function registrera_meny() {
  register_nav_menu('main-menu', ('Main Menu'));
}
  add_action('init', 'registrera_meny');

//support for feat-image
add_theme_support('post-thumbnails');

//registrera sidebar
function wpb_widgets_init() {

    register_sidebar( array(
        'name'          => 'Custom Widget Area',
        'id'            => 'custom-widget',
        'before_widget' => '<div class="chw-wi">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );

function sb_widgets_init() {

    register_sidebar( array(
        'name'          => 'Custom Widget Below',
        'id'            => 'custom-widget-below',
        'before_widget' => '<div class="chw-wi">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'sb_widgets_init' );

function sok_widgets_init() {

    register_sidebar( array(
        'name'          => 'Custom Widget Header',
        'id'            => 'custom-widget-header',
        'before_widget' => '<div class="chw-wi">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
  }
  add_action( 'widgets_init', 'sok_widgets_init' );

  function main_widgets_init() {

      register_sidebar( array(
          'name'          => 'Custom Widget Main',
          'id'            => 'custom-widget-main',
          'before_widget' => '<div class="chw-wi">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="chw-title">',
          'after_title'   => '</h2>',
      ) );

  }
  add_action( 'widgets_init', 'main_widgets_init' );

  add_shortcode('wpbsearch', 'get_search_form');


function my_assets() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css' );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js');
}

add_action( 'wp_enqueue_scripts', 'my_assets' );

if( function_exists('acf_add_options_page') ) {

acf_add_options_page();

}

if( function_exists('acf_add_options_page') ) {

acf_add_options_page(array(
  'page_title' 	=> 'Theme General Settings',
  'menu_title'	=> 'Theme Settings',
  'menu_slug' 	=> 'theme-general-settings',
  'capability'	=> 'edit_posts',
  'redirect'		=> false
));

acf_add_options_sub_page(array(
  'page_title' 	=> 'Theme Header Settings',
  'menu_title'	=> 'Header',
  'parent_slug'	=> 'theme-general-settings',
));
}

function enqueue_media_uploader()
{
    wp_enqueue_media();
}

add_action("admin_enqueue_scripts", "enqueue_media_uploader");

add_image_size( 'custom-size', 420, 442, true );
add_image_size( 'post-size', 800, 400, true );


function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyCsiKiz9Fn_wm-XrMGNqGUhsjkpa81yPu0';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

add_action('acf/save_post', 'my_save_post');

function my_save_post( $post_id ) {

	// bail early if not a contact_form post
	if( get_post_type($post_id) !== 'contact_form' ) {

		return;

	}


	// bail early if editing in admin
	if( is_admin() ) {

		return;

	}


	// vars
	$post = get_post( $post_id );


	// get custom fields (field group exists for content_form)
	$name = get_field('name', $post_id);
	$email = get_field('email', $post_id);


	// email data
	$to = 'contact@website.com';
	$headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
	$subject = $post->post_title;
	$body = $post->post_content;


	// send email
	wp_mail($to, $subject, $body, $headers );

}

?>
