<?php /* Theme Customizer For delish Theme */
   
function delish_customize_register ( $wp_customize ) {
      
	$wp_customize->remove_section('title_tagline');
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('nav');
	$wp_customize->remove_section('static_front_page');
	// Theme Colors
 
	$colors = array();
    $colors[] = array( 'slug'=>'bg_color', 'default' => '#1D1D1D',
    'label' => __( 'Header Color', 'delish' ) );
    $colors[] = array( 'slug'=>'primary_color', 'default' => '#141412',
    'label' => __( 'Headings Color ', 'delish' ) );
    $colors[] = array( 'slug'=>'secondary_color', 'default' => '#63676e',
    'label' => __( 'Text Color', 'delish' ) );
    $colors[] = array( 'slug'=>'tertiary_color', 'default' => '#1abc9c',
    'label' => __( 'Links Color', 'delish' ) );
	
	foreach($colors as $color)
  	{	
    $wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'],
    'type' => 'theme_mod', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color', ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
     $color['slug'], array( 'label' => $color['label'], 'section' => 'colors',
     'settings' => $color['slug'] )));
  	}
	// Theme Colors Ends
	
	// Logo Uploader
	
	$wp_customize->add_section( 'delish_logo_fav_section' , array(
    'title'       => __( 'Site Logo', 'delish' ),
    'priority'    => 30,
    'description' =>  __('Upload a logo to replace the default site name and description in the header','delish'),) );
	
   $wp_customize->add_setting( 'delish_logo', array(
		'sanitize_callback' => 'esc_url_raw') );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'delish_logo', array(
    'label'    => __( 'Site Logo ( Max height - 60px)', 'delish' ),
    'section'  => 'delish_logo_fav_section',
    'settings' => 'delish_logo',
    ) ) );
	function delish_check_header_video($file){
  return validate_file($file, array('', 'mp4'));
    }
	// Logo  Uploader Ends
	// Social Links
	
	$wp_customize->add_section( 'sociallinks', array(
        'title' => __('Social Links','delish'), // The title of section
        'description' => __('Add Your Social Links Here.','delish'), // The description of section
        'priority' => '900',
	) );
	
	$wp_customize->add_setting( 'delish_facebooklink', array('default' => '#','sanitize_callback' => 'esc_url_raw') );
    $wp_customize->add_control( 'delish_facebooklink', array('label' => 'Facebook URL', 'section' => 'sociallinks', ) );
	$wp_customize->add_setting( 'delish_twitterlink', array('default' => '#','sanitize_callback' => 'esc_url_raw') );
    $wp_customize->add_control( 'delish_twitterlink', array('label' => 'Twitter Handle', 'section' => 'sociallinks', ) );
    $wp_customize->add_setting( 'delish_googlelink', array('default' => '#', 'sanitize_callback' => 'esc_url_raw') );
    $wp_customize->add_control( 'delish_googlelink', array('label' => 'Google Plus URL','section' => 'sociallinks',) );
	$wp_customize->add_setting( 'delish_pinterestlink', array('default' => '#', 'sanitize_callback' => 'esc_url_raw') );
    $wp_customize->add_control( 'delish_pinterestlink', array('label' => 'Pinterest URL','section' => 'sociallinks',) );
	$wp_customize->add_setting( 'delish_youtubelink', array('default' => '#', 'sanitize_callback' => 'esc_url_raw') );
    $wp_customize->add_control( 'delish_youtubelink', array('label' => 'Youtube URL','section' => 'sociallinks',) );
	$wp_customize->add_setting( 'delish_stumblelink', array('default' => '#', 'sanitize_callback' => 'esc_url_raw') );
    $wp_customize->add_control( 'delish_stumblelink', array('label' => 'Stumbleupon Link','section' => 'sociallinks', ) );
	$wp_customize->add_setting( 'delish_rsslink', array('default' => '#', 'sanitize_callback' => 'esc_url_raw') );
    $wp_customize->add_control( 'delish_rsslink', array('label' => 'RSS Feeds URL','section' => 'sociallinks',) );

	// Social Links Ends
 	// Footer Copyright Section
	
	$wp_customize->add_section( 'fcopyright', array(
        'title' => __('Footer Copyright','delish'), // The title of section
        'description' => __('Add Your Copyright Notes Here.','delish'), // The description of section
        'priority' => '900',
	) );
 
	$wp_customize->add_setting( 'delish_footer_top', array('default' => __('Any Text Here','delish'),'sanitize_callback' => 'delish_sanitize_footer_text',) );
    $wp_customize->add_control( 'delish_footer_top', array('label' => __('Footer Text','delish'),'section' => 'fcopyright',) );
	$wp_customize->add_setting( 'delish_footer_cr_left', array('default' => __('Your Copyright Here.','delish'),'sanitize_callback' => 'delish_sanitize_footer_text',) );
	$wp_customize->add_control( 'delish_footer_cr_left', array('label' => __('Copyright Note Left','delish'),'section' => 'fcopyright',) );

	function delish_sanitize_footer_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );}
}
    
	// Footer Copyright Section Ends
	
    // This will output the custom WordPress settings to the live theme's WP head. */
   
   function delish_header_output() {
     $sidebar_pos = get_theme_mod('sidebar_position_option');
     $bgcolor = get_theme_mod('bg_color');
	 $primarycolor = get_theme_mod('primary_color');
	 $secondarycolor = get_theme_mod('secondary_color');
	 $tertiarycolor = get_theme_mod('tertiary_color');
	 
	 
	 
	 ?><?php 
      if ( ($sidebar_pos == 'sidebar_display_left') || ( ! empty( $bgcolor )) || (!empty($primarycolor)) || (!empty($secondarycolor)) || (!empty($tertiarycolor))){
?>	  <!--Customizer CSS--> 
      
	  <style type="text/css">
	       

		    <?php if($bgcolor) { ?>
		      #header{background-color: <?php echo esc_attr($bgcolor); ?>}
			  .primary-navigation ul li:hover li a, .primary-navigation ul li.iehover li a{ background-color: <?php echo esc_attr($bgcolor); ?>}
		   	<?php } ?>
            <?php if($primarycolor) { ?>

             h1, h2, h3, h4, h5, h6, .related-article h5 a:hover, .entry-title h2, .entry-title a, .pagenavi a,
			  h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a, a:hover, a:visited:hover, a:focus, a:visited:focus,
			  .widget_tag_cloud a {color: <?php echo esc_attr($primarycolor); ?>;}
			  			  
		   	<?php } ?>
			<?php if($secondarycolor) { ?> p, .entry-summary ul li, .entry-content ul li, entry-summary ol li, entry-content ol li, dd
			{color:<?php echo esc_attr($secondarycolor); ?>;}
		      		  <?php } ?>

			<?php if($tertiarycolor) { ?>
		      .catbox a, .hcat a:visited, #main-nav  #main-menu li:hover, #main-nav #main-menu li.current-menu-item, 
  .entry-summary a, .entry-meta a, ..entry-title h3 a:hover, .entry-title h2 a:hover,
ul.popular-posts-sdr li a, .widget_recent_entries ul li a, .widget_categories ul li a, .widget_archive li a, .widget_meta li a,
			  a, .cdetail h3 a:hover, .cdetail h2 a:hover, .delish-category-posts li p, .widget_recent_entries li a, .nav-links a,
			  .entry-content a, .comment-content a{color:<?php echo esc_attr($tertiarycolor); ?>;} 
			
			<?php } ?>
			
			
	  </style>
      <!--/Customizer CSS-->
	<?php } ?>
	<?php } 
	
	  

add_action( 'customize_register', 'delish_customize_register', 11 );
add_action( 'wp_head', 'delish_header_output', 11 );


//add_action( 'customize_register' , array( 'delish_Customize' , 'register' ) );
//add_action( 'wp_head' , array( 'delish_Customize' , 'header_output' ) );