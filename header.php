<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title> 
	<?php wp_head(); ?>
	<meta name="google-site-verification" content="hKuOXpc3ioyP3K8wws9XvCSGm2nFdGlS6gHKM_Bodpk" />
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-78474393-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,500,700,900' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->              		
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/mobile.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slicknav.css" />
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.1.min.js"></script>
<!--	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>-->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.infinitescroll.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/behaviors/manual-trigger.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.slicknav.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/retina-1.1.0.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/imagesloaded.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/masonry.pkgd.min.js"></script>
	
	<!-- flickr slideshow js / css -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
    <!--
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-finger-v0.1.0.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/flickerplate.min.js" type="text/javascript"></script>
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/flickerplate.css"  type="text/css" rel="stylesheet">
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/fotorama.js" type="text/javascript"></script>
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/fotorrama.css"  type="text/css" rel="stylesheet">
-->
    
<!--	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.film_roll.min.js"></script>-->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.carouFredSel-6.2.1.js"></script>
	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
	<?php $shortname = "pro_agency"; ?>
	
	<style type="text/css">
	body {
	<?php if(get_option($shortname.'_background_image_url','') != "") { ?>
		background: url('<?php echo get_option($shortname.'_background_image_url',''); ?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;
	<?php } ?>		
	<?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
		background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>;
	<?php } ?>	
	}
	</style>			
</head>
<body <?php body_class($class); ?>>
<header id="header">
	<div class="header_bottom">
	
		<div class="container">
		<div class="header_menu">
				<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id=main_header_menu'); ?>
			</div><!--//header_menu-->
				<div class="header_social">
        <?php if(get_option($shortname.'_twitter_link','') != '') { ?>
            <a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="twitter" /></a>
        <?php } ?>
        <?php if(get_option($shortname.'_facebook_link','') != '') { ?>
            <a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" alt="facebook" /></a>
        <?php } ?>
        <?php if(get_option($shortname.'_google_plus_link','') != '') { ?>
            <a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" alt="google plus" /></a>
        <?php } ?>
        <?php if(get_option($shortname.'_picasa_link','') != '') { ?>
            <a href="<?php echo get_option($shortname.'_picasa_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/picasa-icon.png" alt="picasa" /></a>
        <?php } ?>
        <?php if(get_option($shortname.'_pinterest_link','') != '') { ?>
            <a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" alt="pinterest" /></a>
        <?php } ?>
        <?php if(get_option($shortname.'_vimeo_link','') != '') { ?>
            <a href="<?php echo get_option($shortname.'_vimeo_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo-icon.png" alt="vimeo" /></a>
        <?php } ?>
        <?php if(get_option($shortname.'_youtube_link','') != '') { ?>
            <a href="<?php echo get_option($shortname.'_youtube_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube-icon.png" alt="youtube" /></a>
        <?php } ?>
        <?php if(get_option($shortname.'_flickr_link','') != '') { ?>
            <a href="<?php echo get_option($shortname.'_flickr_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flickr-icon.png" alt="linkedin" /></a>
        <?php } ?>              
        <div class="clear"></div>
    </div><!--//side_social-->  	
		
	
	
			
			<div class="clear"></div>
		
			<!--
			<div class="header_search">
				<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
					<input type="text" name="s" id="s" />
					<INPUT TYPE="image" SRC="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon2.jpg" class="header_search_icon" BORDER="0" ALT="Submit Form">
				</form>
			</div> --><!--//header_search-->
						
			<div class="clear"></div>
		</div><!--//container-->
		
	</div><!--//header_bottom-->	
</header><!--//header-->
<div class="header_spacing"></div>
	<div id="head_cont">
		<div class="container">
			<div class="full_logo_cont">
				<?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
					<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option($shortname.'_custom_logo_url',''); ?>" class="logo" alt="logo" /></a>
				<?php } else { ?>
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" class="logo" alt="logo" /></a>
				<?php } ?>					
			</div><!--//logo_cont-->
				<div class="header_social header_social_mid">
			        <?php if(get_option($shortname.'_twitter_link','') != '') { ?>
			            <a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="twitter" /></a>
			        <?php } ?>
			        <?php if(get_option($shortname.'_facebook_link','') != '') { ?>
			            <a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" alt="facebook" /></a>
			        <?php } ?>
			        <?php if(get_option($shortname.'_google_plus_link','') != '') { ?>
			            <a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" alt="google plus" /></a>
			        <?php } ?>
			        <?php if(get_option($shortname.'_picasa_link','') != '') { ?>
			            <a href="<?php echo get_option($shortname.'_picasa_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/picasa-icon.png" alt="picasa" /></a>
			        <?php } ?>
			        <?php if(get_option($shortname.'_pinterest_link','') != '') { ?>
			            <a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" alt="pinterest" /></a>
			        <?php } ?>
			        <?php if(get_option($shortname.'_vimeo_link','') != '') { ?>
			            <a href="<?php echo get_option($shortname.'_vimeo_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo-icon.png" alt="vimeo" /></a>
			        <?php } ?>
			        <?php if(get_option($shortname.'_vimeo_link','') != '') { ?>
			            <a href="<?php echo get_option($shortname.'_youtube_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube-icon.png" alt="youtube" /></a>
			        <?php } ?>
			        <?php if(get_option($shortname.'_flickr_link','') != '') { ?>
			            <a href="<?php echo get_option($shortname.'_flickr_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flickr-icon.png" alt="youtube" /></a>
			        <?php } ?>              
				</div><!--//side_social-->  
				<div class="feat_text">
					<p><?php echo stripslashes(stripslashes(get_option($shortname.'_featured_text',''))); ?></p>
				</div>
			</div>
		</div>
	<div class="clear"></div>
