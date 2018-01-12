<?php 
/**
 * Enqueue scripts and styles.
 */
function matchatea_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'matchatea-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'style' ), '1.0' );
	wp_style_add_data( 'matchatea-ie8', 'conditional', 'lt IE 9' );
	wp_enqueue_style( 'bootstrap-style', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), '1.0' );
	wp_enqueue_style( 'matchatea-style', get_theme_file_uri( '/assets/css/matchastyle.css' ), '1.0' );
	wp_enqueue_style( 'matcharesponsive-style', get_theme_file_uri( '/assets/css/matcharesponsive.css' ), array(),'1.0' );
	// Load the html5 shiv.
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery' , get_theme_file_uri() . '/assets/js/jquery.js', false, '1.11.3', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrapjs', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array('jquery'), '3.7.3' );
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_enqueue_script( 'matchajs', get_theme_file_uri( '/assets/js/matchajs.js' ), array('jquery'), '1.0',true );
	wp_enqueue_script( 'mod', get_theme_file_uri( '/assets/js/mod.js' ), array(), '1.0',true );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'matchatea_scripts' );
?>