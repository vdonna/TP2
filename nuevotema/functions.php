<?php
// Menu
function nav() {
register_nav_menus( array(
	'primary' => esc_html__( 'Primary', '_s' ),
) );

}

add_action( 'after_setup_theme', 'nav' );

// Sidebar
function sidebar() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_s' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', '_s' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sidebar' );

// Style - Js
function style_script() {
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_script( 'js', get_template_directory_uri() . '/js/js.js', array(), '', true );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array(), '', true );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'style_script' );

