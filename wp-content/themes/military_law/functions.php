<?php
if ( is_admin() ) {

} else {
    wp_enqueue_style('style-app', get_template_directory_uri() . '/css/app.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_script('script', get_template_directory_uri() . '/js/app.js', array(), wp_get_theme()->get('Version'), true);
}

add_theme_support( 'custom-logo' );

$defaults = array(
    //'height'               => 152,
    //'width'                => 176,
    //'flex-height'          => true,
	//'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true, 
);
 
add_theme_support( 'custom-logo', $defaults );

function logo_teme(){
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	echo '<a href="'. esc_url( home_url( '/' ) ) . '" class="logo">';
	if ( has_custom_logo() ) {
		echo '<img class="custom-logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
		echo '<h1>' . get_bloginfo('name') . '</h1>';
	} else {
		echo '<h1>' . get_bloginfo('name') . '</h1>';
	}
	echo '</a>';
}

add_theme_support( 'post-thumbnails', array( 'page' ) );

if( function_exists('acf_add_options_page') ) {
    $parent = acf_add_options_page(array(
        'page_title' 	=> 'Налаштування сайту',
        'menu_title'	=> 'Налаштування сайту',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> true,
        'position' 		=> '30',
        'icon_url'		=> 'dashicons-welcome-widgets-menus'
    ));

    acf_add_options_sub_page([
        'page_title' => 'Налаштування сайту',
        'menu_title' => 'Налаштування сайту',
        'menu_slug' => $parent['menu_slug'],
        'parent' => $parent['menu_slug']
    ]);
}