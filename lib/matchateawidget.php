<?php
function matchatea_widget_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'About Section', 'matchatea' ),
		'id'            => 'aboutsection',
		'description'   => esc_html__( 'This is the Section for About Information.', 'matchatea' ),
		'before_widget' => '<div class="aboutsectionBox">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Contact Section', 'matchatea' ),
		'id'            => 'footercontactsection',
		'description'   => esc_html__( 'This is the Section for Contact Information.', 'matchatea' ),
		'before_widget' => '<div class="footerContact">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Social Section', 'matchatea' ),
		'id'            => 'footersocialsection',
		'description'   => esc_html__( 'This is the Section for Contact Information.', 'matchatea' ),
		'before_widget' => '<div class="footerSocial">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'matchatea_widget_init' );



?>