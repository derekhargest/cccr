<?php


	update_option('siteurl','localhost:8888/default-wp');
	update_option('home','localhost:8888/default-wp');

	function theme_name_scripts() {
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	}

	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Main Navigation' ));
		register_nav_menu('mobile-menu',__( 'Mobile Navigation' ));
	}

	add_action( 'init', 'register_my_menu' );

	// function arphabet_widgets_init() {

		// register_sidebar( array(
		// 	'name'          => 'Makers Gallery',
		// 	'id'            => 'gallery_makers',
		// 	'before_widget' => '<div class="page-gallery">',
		// 	'after_widget'  => '</div>',
		// 	'before_title'  => '<h2>',
		// 	'after_title'   => '</h2>',
	// 	) );


// 	}
// 	add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
