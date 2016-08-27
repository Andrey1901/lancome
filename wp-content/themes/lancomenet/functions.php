<?php
function register_my_theme_styles(){
	if ( ! is_admin() ){
		wp_register_style( 'style', get_stylesheet_uri(), array(), false, 'screen' );
	}
}
add_action( 'init', 'register_my_theme_styles' );

