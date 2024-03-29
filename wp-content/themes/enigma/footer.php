<!-- enigma Callout Section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<!-- Footer Widget Secton -->
<?php if($wl_theme_options['footer_widgets']!='') { ?>
<div class="enigma_footer_widget_area">	
	<div class="container">
		<div class="row">
			<?php 
			if ( is_active_sidebar( 'footer-widget-area' ) ){ 
				dynamic_sidebar( 'footer-widget-area' );
			} else 
			{ 
			$args = array(
			'before_widget' => '<div class="col-md-3 col-sm-6 enigma_footer_widget_column">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="enigma_footer_widget_title">',
			'after_title'   => '<div class="enigma-footer-separator"></div></div>' );
			the_widget('WP_Widget_Pages', null, $args);			
			} ?>
		</div>		
	</div>	
</div>
<?php } ?>
<div class="enigma_footer_area">
	<div class="container">
		<div class="col-md-12">
		<p class="enigma_footer_copyright_info wl_rtl" >
		<?php if($wl_theme_options['footer_customizations']) { echo esc_attr($wl_theme_options['footer_customizations']); }
		if($wl_theme_options['developed_by_text']) { echo "|" .esc_attr($wl_theme_options['developed_by_text']); } ?>
		<a target="_blank" rel="nofollow" href="<?php if($wl_theme_options['developed_by_link']) { echo esc_url($wl_theme_options['developed_by_link']); } ?>"><?php if($wl_theme_options['developed_by_weblizar_text']) { echo esc_attr($wl_theme_options['developed_by_weblizar_text']); } ?></a></p>
		<?php if($wl_theme_options['footer_section_social_media_enbled'] == '1') { ?>
		<div class="enigma_footer_social_div">
			<ul class="social">
				<?php if($wl_theme_options['fb_link']!='') { ?>
				<li class="facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="fab fa-facebook-f"></i></a></li>
				<?php } if($wl_theme_options['twitter_link']!='') { ?>
				<li class="twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']); ?>"><i class="fab fa-twitter"></i></a></li>
				<?php } if($wl_theme_options['linkedin_link']!='') { ?>					
				<li class="linkedin" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']); ?>"><i class="fab fa-linkedin-in"></i></a></li>
				<?php } if($wl_theme_options['youtube_link']!='') { ?>
				<li class="youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"><a href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"><i class="fab fa-youtube"></i></a></li>
				<?php } if($wl_theme_options['gplus']!='') { ?>
				<li class="twitter" data-toggle="tooltip" data-placement="bottom" title="gplus"><a href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"><i class="fab fa-google-plus-g"></i></a></li>
				<?php } if($wl_theme_options['instagram']!='') { ?>
				<li class="instagram" data-toggle="tooltip" data-placement="bottom" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"><i class="fab fa-instagram"></i></a></li>
				<?php } if($wl_theme_options['vk_link']!='') { ?>
				<li class="twitter" data-toggle="tooltip" data-placement="bottom" title="vk"><a href="<?php echo esc_url($wl_theme_options['vk_link']) ; ?>"><i class="fab fa-vk"></i></a></li>
				<?php } if($wl_theme_options['qq_link']!='') { ?>
				<li class="youtube" data-toggle="tooltip" data-placement="bottom" title="qq"><a href="<?php echo esc_url($wl_theme_options['qq_link']) ; ?>"><i class="fab fa-qq"></i></a></li>
				<?php } if($wl_theme_options['whatsapp_link']!='') { ?>
				<li class="linkedin" data-toggle="tooltip" data-placement="bottom" title="whatsapp"><a href="tel:<?php echo esc_attr($wl_theme_options['whatsapp_link']) ; ?>"><i class="fab fa-whatsapp"></i></a></li>
				<?php } ?>
			</ul>
		</div>
		<?php } ?>			
		</div>		
	</div>		
</div>	
<!-- /Footer Widget Secton--> <a id="btn-to-top" ></a>
</div>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php get_template_part('google', 'font'); ?>
<?php wp_footer(); ?>
</body>
</html>