<?php 
get_header(); 
$wl_theme_options = weblizar_get_options();

if ( $wl_theme_options['_frontpage']=="1" && is_front_page() ) {	
	get_template_part('home','slideshow'); 

	if ( $sections = json_decode( get_theme_mod( 'home_reorder' ),true ) ) {
		foreach ( $sections as $section ) {
			$data = $section."_home";
			if ( $wl_theme_options[$data] == "1" ) {
				get_template_part('home', $section);
			}
		}
	} else {

		if ( $wl_theme_options['services_home'] == "1" ) {
		 	get_template_part('home','services'); 
		}
		if ( 	$wl_theme_options['portfolio_home'] == "1" ) {
			get_template_part( 'home','portfolio' ); 
		}
		if ( $wl_theme_options['editor_home'] == "1" ) {
			get_template_part( 'home','editor' ); 
		}
		if ( $wl_theme_options['blog_home'] == "1" ) {
			get_template_part( 'home','blog' );
		}
	}

	if ( $wl_theme_options['fc_home'] == "1" ) {
		get_template_part( 'footer','callout' );
	}
	get_footer();
} else {	
	if ( is_page() ) {
		get_template_part( 'page' );
	} else {
		get_template_part( 'index' );
	}
}	
?>