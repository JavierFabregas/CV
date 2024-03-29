<?php 
function weblizar_scripts() {     
	$wl_theme_options = weblizar_get_options();

        /* Main CSS libraries */
	wp_enqueue_style('enigma-style-sheet', get_stylesheet_uri());
        wp_enqueue_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.css');
        wp_enqueue_style('default', get_template_directory_uri() . '/css/default.css');
        wp_enqueue_style('enigma-theme', get_template_directory_uri() . '/css/enigma-theme.css');
        wp_enqueue_style('media-responsive', get_template_directory_uri() . '/css/media-responsive.css');
        wp_enqueue_style('animations', get_template_directory_uri() . '/css/animations.css');
        wp_enqueue_style('theme-animtae', get_template_directory_uri() . '/css/theme-animtae.css');
	
        /* Font awesome library */
	wp_enqueue_style('fontawesome-all', get_template_directory_uri() . '/css/font-awesome-5.11.2/css/all.min.css');
	wp_enqueue_style('fontawesome-min', get_template_directory_uri() . '/css/font-awesome-5.11.2/css/fontawesome.min.css');
	wp_enqueue_style('fontawesome-470', get_template_directory_uri() . '/css/font-awesome-4.7.0/css/font-awesome.min.css');
	
        /* Web Fonts */		
        wp_enqueue_style('OpenSansRegular','//fonts.googleapis.com/css?family=Open+Sans');
        wp_enqueue_style('OpenSansBold','//fonts.googleapis.com/css?family=Open+Sans:700');
        wp_enqueue_style('OpenSansSemiBold','//fonts.googleapis.com/css?family=Open+Sans:600');
        wp_enqueue_style('RobotoRegular','//fonts.googleapis.com/css?family=Roboto');
        wp_enqueue_style('RobotoBold','//fonts.googleapis.com/css?family=Roboto:700');
        wp_enqueue_style('RalewaySemiBold','//fonts.googleapis.com/css?family=Raleway:600');
        wp_enqueue_style('Courgette','//fonts.googleapis.com/css?family=Courgette');
				
	$font_var          = '300,400,600,700,900,300italic,400italic,600italic,700italic,900italic';
	$http              = ( ! empty( $_SERVER['HTTPS'] ) ) ? "https" : "http";
	$main_heading_font = str_replace( ' ' , '+', $wl_theme_options['main_heading_font'] );
        $menu_font         = str_replace( ' ' , '+', $wl_theme_options['menu_font'] );
        $theme_title       = str_replace( ' ' , '+', $wl_theme_options['theme_title'] );
        $desc_font_all     = str_replace( ' ' , '+', $wl_theme_options['desc_font_all'] );

	wp_enqueue_style('googleFonts', $http . '://fonts.googleapis.com/css?family=' . $main_heading_font . ':' . $font_var);	
	wp_enqueue_style('menu_font', $http . '://fonts.googleapis.com/css?family=' . $menu_font . ':' . $font_var);	
	wp_enqueue_style('theme_title', $http . '://fonts.googleapis.com/css?family=' . $theme_title . ':' . $font_var);
	wp_enqueue_style('desc_font_all', $http . '://fonts.googleapis.com/css?family=' . $desc_font_all . ':' . $font_var);
                
        // Js
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script('popper.min', get_template_directory_uri() .'/js/popper.min.js');
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/js/bootstrap.js');
        wp_enqueue_script('menu', get_template_directory_uri() .'/js/menu.js', array('jquery'));
        wp_enqueue_script('enigma-theme-script', get_template_directory_uri() .'/js/enigma_theme_script.js');

        if ( is_front_page() ) {
                /*Carofredsul Slides*/
                wp_enqueue_script('jquery.carouFredSel', get_template_directory_uri() .'/js/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1.js');

                /*PhotoBox JS*/
                wp_enqueue_script('photobox-js', get_template_directory_uri() .'/js/jquery.photobox.js');
                wp_enqueue_style('photobox', get_template_directory_uri() . '/css/photobox.css');

                //Footer JS//
        	wp_enqueue_script('enigma-footer-script', get_template_directory_uri() .'/js/enigma-footer-script.js','','',true);
	}
	wp_enqueue_script('waypoints', get_template_directory_uri() .'/js/waypoints.js','','',true);
	wp_enqueue_script('scroll', get_template_directory_uri() .'/js/scroll.js','','',true);
        if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}
add_action('wp_enqueue_scripts', 'weblizar_scripts');
?>