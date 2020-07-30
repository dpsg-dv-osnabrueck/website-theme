<?php

// Javascript

function dpsg_os_scripts() {
    wp_register_script( 'dpsg_os_scripts', get_stylesheet_directory_uri() . '/js/dpsg_os_scripts.js',  array( 'jquery' ), false, true);
    wp_register_script( 'googlemaps', get_stylesheet_directory_uri() . '/js/googlemaps.js' , false, true);
    wp_register_script( 'equalheights', get_stylesheet_directory_uri() . '/js/equalheights.js' , false, true);
    wp_register_style( 'main-style', get_template_directory_uri() . '/css/custom/main.css');
    wp_register_script('google-maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', false, true);

    wp_enqueue_script('dpsg_os_scripts');
    wp_enqueue_script('googlemaps');
    wp_enqueue_script('google-maps');
    wp_enqueue_script('equalheights');
    wp_enqueue_style('main-style');

}
add_action( 'wp_enqueue_scripts', 'dpsg_os_scripts' );


//Registrierung der Menues
function register_my_menus() {
  register_nav_menus(
    array(
      'main_navigation' => __( 'Main Navigation' ),
      'mobile_navigation' => __( 'Mobile Navigation' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


// Automatischer Weiterlesen-Button
function excerpt_read_more_link($output) {
 global $post;
 return $output . '<div class="more-link"><a href="'. get_permalink($post->ID) . '">Mehr erfahren <span><i class="pe-7s-angle-right"></i></span></div></a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

 

/* Image Sizes */
add_image_size( 'front_news', 960, 640, true );
add_image_size( 'detail_news', 960, 200, true );
add_image_size( 'gallery_overview', 350, 350, true );
add_image_size( 'portrait', 640, 850, true );
add_image_size( 'full-size', 1600, 1600 );

// Options Page

if( function_exists('acf_add_options_page') ) {

    $page = acf_add_options_page(array(
        'page_title' 	=> 'Impressum',
        'menu_title' 	=> 'Impressum',
        'menu_slug' 	=> 'imprint',
        'capability' 	=> 'edit_posts',
        'redirect' 	=> false
    ));

}

//Automatische Anfuehrungszeichen

function deutscheanfuehrungen($content)
{
    $content = str_replace (' &#8220;', ' &#8222;', $content);
    $content = str_replace ('&#8221;', '&#8220;', $content);
    $content = str_replace (' &#quot;', ' &#8222;', $content);
    $content = str_replace ('&#quot;', '&#8220;', $content);
    $content = str_replace (' &#34;', ' &#8222;', $content);
    $content = str_replace ('&#34;', '&#8220;', $content);
    $content = str_replace (' &#8216;', ' &#8218;', $content);
    $content = str_replace ('&#8217;', '&#8216;', $content);

    return $content;
}
add_filter('the_content', 'deutscheanfuehrungen');
add_filter('get_the_content', 'deutscheanfuehrungen');
add_filter('the_title', 'deutscheanfuehrungen');
add_filter('get_the_title', 'deutscheanfuehrungen');
add_filter('the_excerpt', 'deutscheanfuehrungen');
add_filter('get_the_excerpt', 'deutscheanfuehrungen');

// HTML Search Form

add_theme_support( 'html5', array( 'search-form' ) );

// Feature Image Support

add_theme_support( 'post-thumbnails' );

// Delete Original Size Image

function replace_uploaded_image($image_data) {
    // if there is no large image : return
    if (!isset($image_data['sizes']['large'])) return $image_data;

    // paths to the uploaded image and the large image
    $upload_dir = wp_upload_dir();
    $uploaded_image_location = $upload_dir['basedir'] . '/' .$image_data['file'];
    $large_image_filename = $image_data['sizes']['large']['file'];

    // Do what wordpress does in image_downsize() ... just replace the filenames ;)
    $image_basename = wp_basename($uploaded_image_location);
    $large_image_location = str_replace($image_basename, $large_image_filename, $uploaded_image_location);

    // delete the uploaded image
    unlink($uploaded_image_location);

    // rename the large image
    rename($large_image_location, $uploaded_image_location);

    // update image metadata and return them
    $image_data['width'] = $image_data['sizes']['large']['width'];
    $image_data['height'] = $image_data['sizes']['large']['height'];
    unset($image_data['sizes']['large']);

    // Check if other size-configurations link to the large-file
    foreach($image_data['sizes'] as $size => $sizeData) {
        if ($sizeData['file'] === $large_image_filename)
            unset($image_data['sizes'][$size]);
    }

    return $image_data;
}
add_filter('wp_generate_attachment_metadata', 'replace_uploaded_image');


remove_image_size('tumbnail');

function paulund_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);

    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'paulund_remove_default_image_sizes');

// Menü-Einträge ausblenden

if ( current_user_can('editor') ) :
  function remove_menus(){
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'plugins.php' );                //Plugins
    remove_menu_page( 'users.php' );                  //Users
    remove_menu_page( 'tools.php' );                  //Tools
  }
  add_action( 'admin_menu', 'remove_menus' );
endif;

function chromefix_inline_css()
{
    wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
}

add_action('admin_enqueue_scripts', 'chromefix_inline_css');