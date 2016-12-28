<?php
/* The Header template for our theme
 * Displays all of the <head> section and everything up till <div id="main">
 * @package WordPress
 * @subpackage delish
 */

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32944847-2', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body <?php body_class(); ?>>
    <header id="header" class="site-header" role="banner">
        <div class="container">
       	<div class="row clearfix">
           <div class="col-md-6">
               <?php if(is_home()) echo '<h1 id="site-title">'; else echo '<h2 id="site-title">'; ?>
                  <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                    	<?php if ( get_theme_mod( 'delish_logo' ) ) : ?>
                            <span>
                            	<img src='<?php echo esc_url( get_theme_mod( 'delish_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                            </span>
                        <?php else : ?>
							<span><?php bloginfo( 'name' ); ?></span>						
						<?php endif; ?>
                        </a>
                    <?php if(is_home()) echo '</h1>'; else echo '</h2>'; ?>
             </div>
            <div class="col-md-6 clearfix">
            

            <ul class="icon-fonts social-icons">
               <?php if ( get_theme_mod( 'delish_rsslink' ) ) : ?>
                   <li><a class="genericon genericon-feed" href="<?php  echo esc_url(get_theme_mod( 'delish_rsslink' )); ?>"></a></li>
               <?php endif; ?>
               <?php if ( get_theme_mod( 'delish_twitterlink' ) ) : ?>
                    <li><a class="genericon genericon-twitter" href="<?php  echo esc_url(get_theme_mod( 'delish_twitterlink' )); ?>"></a></li>
               <?php endif; ?>
               <?php if ( get_theme_mod( 'delish_facebooklink' ) ) : ?>
                   <li><a class="genericon genericon-facebook-alt" href="<?php  echo esc_url(get_theme_mod( 'delish_facebooklink' )); ?>"></a></li>
               <?php endif; ?>
               <?php if ( get_theme_mod( 'delish_pinterestlink' ) ) : ?>
                    <li><a class="genericon genericon-pinterest-alt" href="<?php  echo esc_url(get_theme_mod( 'delish_pinterestlink' )); ?>"></a></li>
               <?php endif; ?>
               <?php if ( get_theme_mod( 'delish_googlelink' ) ) : ?>
                    <li><a class="genericon genericon-googleplus" href="<?php  echo esc_url(get_theme_mod( 'delish_googlelink' )); ?>"></a></li>
               <?php endif; ?>
               <?php if ( get_theme_mod( 'delish_stumblelink' ) ) : ?>
                    <li><a class="genericon genericon-tumblr" href="<?php  echo esc_url(get_theme_mod( 'delish_googlelink' )); ?>"></a></li>
               <?php endif; ?>
               <?php if ( get_theme_mod( 'delish_youtubelink' ) ) : ?>
                    <li><a class="genericon genericon-youtube" href="<?php  echo esc_url(get_theme_mod( 'delish_googlelink' )); ?>"></a></li>
               <?php endif; ?>
             </ul></div>
			
			
			<div class="col-md-12 clearfix primary-nav">       
            
            <nav class="primary-navigation site-navigation " role="navigation" id="menu-primary">
             <div class="menu">
                 
                 <ul><li class="page_item p"><a href="http://danielsantarriaga.mx/">CV</a></li></ul>
             </div>
           </nav>
           

        </div>
      </div>
      </div>
    </div>
 </header><!-- #masthead -->
	<div class="container">
		<div id="main" class="site-main">
