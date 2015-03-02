<?php 



	function load_my_StyleAndScript(){
		wp_enqueue_script(
			'angular-core',
			'https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js'
		
		);


		
		wp_enqueue_style(
			'main-css',
			get_template_directory_uri().'/style.css'
		);
		
		wp_enqueue_script(
			'app-js',
			get_template_directory_uri().'/app.js'
		);

		//load script 



	}

	add_action('wp_enqueue_scripts','load_my_StyleAndScript');
	register_nav_menus(array(
		'Primary' => __('Primary Menu'),
		'Footer'=>__('Footer Menu'),
		

	 ) );

 	function ourWidgets(){

 		   /**
 			* Creates a sidebar
 			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 			*/
 			$args = array(
 				'name'          => 'Sidebar',
 				'id'            => 'sidebar1',
 				
 			);
 		
 			register_sidebar( $args );

 	}
 	add_action('widgets_init','ourWidgets');

if (!function_exists('cptui_register_my_cpts')):
 	add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_cpts() {
	$labels = array(
		'name' => 'books',
		'singular_name' => 'book',
		);

	$args = array(
		'labels' => $labels,
		'description' => 'content',
		'public' => true,
		'show_ui' => true,
		'has_archive' => false,
		'show_in_menu' => true,
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'book', 'with_front' => true ),
		'query_var' => true,
									);
	register_post_type( 'book', $args );

// End of cptui_register_my_cpts()
}
endif;
//yhauisdhuiashidasjdhajshd


if (!function_exists('cptui_register_my_cpts1')):
 	add_action( 'init', 'cptui_register_my_cpts1' );

function cptui_register_my_cpts1() {
	$labels = array(
		'name' => 'portfolios',
		'singular_name' => 'portfolio',
		);

	$args = array(
		'labels' => $labels,
		'description' => 'content',
		'public' => true,
		'show_ui' => true,
		'has_archive' => false,
		'show_in_menu' => true,
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'portfolio', 'with_front' => true ),
		'query_var' => true,
									);
	register_post_type( 'portfolio', $args );

// End of cptui_register_my_cpts()
}
endif;
//taxonomy


if (!function_exists('ptui_register_my_taxes')):
add_action( 'init', 'cptui_register_my_taxes' );
function cptui_register_my_taxes() {

	$labels = array(
		'name' => 'portfolio_type',
		'label' => 'portfolio_types',
			);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'label' => 'portfolio_types',
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'show_admin_column' => false,
	);
	register_taxonomy( 'portfolio_type', array( 'portfolio' ), $args );

// End cptui_register_my_taxes
}
endif;




if (!function_exists('ptui_register_my_taxes1')):
add_action( 'init', 'cptui_register_my_taxes1' );
function cptui_register_my_taxes1() {

	$labels = array(
		'name' => 'book_catagory',
		'label' => 'book_catagorys',
			);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'label' => 'book_catagorys',
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'show_admin_column' => false,
	);
	register_taxonomy( 'book_catagory', array( 'book' ), $args );

// End cptui_register_my_taxes
}
endif;


