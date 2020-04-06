<?php
/* Functions */

// Add functions for theme setup
function wp_android_setup(){

	 load_theme_textdomain( 'wp_android' );
	
	 add_theme_support( 'title-tag' );
	
	 add_theme_support( 'custom-logo' , array( 
	                                                                            'height' =>  31 ,
	                                                                            'width' =>  134 , 
	                                                                            'flex-height' => true 
	                                                                       ) );
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 730 , 446 );
	
	add_theme_support( 'html5' , array( 
	                                                               'search-form' ,
	                                                               'comment-form' , 
	                                                               'comment-list' , 
	                                                               'caption' , 
	                                                               'gallery' 
	                                                            ) );
	
	add_theme_support( 'post-formats' , array(
                                                                           	  'aside',
	                                                                            'image',
	                                                                            'video',
	                                                                            'gallery',
	                                                                            'audio',
	                                                                            'status',
	                                                                            'link',
	                                                                            'qoute'
                                                                        	) );
	
	register_nav_menu( 'primary' , 'Primary menu' );
	
}

add_action( 'after_setup_theme' , 'wp_android_setup' );


// Add styles and scripts
function wp_android_scripts(){
	
// Add css styles

	wp_enqueue_style( 'style-css' , get_stylesheet_uri()  );
	wp_enqueue_style( 'animate' , get_stylesheet_uri()  .  '/css/animate.css' );
	wp_enqueue_style( 'boostrap-min' , get_stylesheet_uri()  .  '/css/bootstrap.min.css' );
	wp_enqueue_style( 'boostrap' , get_stylesheet_uri()  .  '/css/bootstrap.css' );
   wp_enqueue_style( 'font-awesome' , get_stylesheet_uri()  .  '/css/font-awesome.min.css' );

// Add js scripts

   wp_enqueue_script( 'jquery' );
   wp_enqueue_script('bootstrap' , get_template_directory_uri() . '/js/bootstrap.js' );
   wp_enqueue_script( 'interface' , get_template_directory_uri()  .  '/js/interface.js');
   wp_enqueue_script( 'bootstrap-min' , get_template_directory_uri()  .  '/js/bootstrap.min.js' );
   wp_enqueue_script( 'agency' , get_template_directory_uri()  .  '/js/agency.js');
   wp_enqueue_script( 'css3-animate' , get_template_directory_uri()  .  '/js/css3-animate-it.js');
   wp_enqueue_script( 'custom' , get_template_directory_uri() .  '/js/custom.js' );

}

add_action( 'wp_enqueue_scripts' , 'wp_android_scripts' );

add_filter('excerpt_more' , function($more){
  return ' ';
});




?>