<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->
<head>
<meta charset="utf-8">
    <title><?php get_page_clean_title(); ?> &raquo; <?php get_site_name(); ?> &raquo; <?php get_i18n_component('tagline'); ?></title>
	<meta name="robots" content="index, follow">
    <link rel="icon" type="image/png" href="http://localhost/ros-build.com/favicon.png">
	<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<link href="<?php get_theme_url(); ?>/assets/css/reset.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/style.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/assets/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

	<?php get_header(); ?>
    <script type="text/javascript" src="<?php get_theme_url(); ?>/js/lib.js"></script>

	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/waterwheel/css/waterwheel-carousel.css" charset="utf-8" />
    <script type="text/javascript" src="<?php get_theme_url(); ?>/waterwheel/js/jquery.waterwheelCarousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#waterwheel-carousel-default").waterwheelCarousel({
                autoPlay: 3000
            });
        });
    </script>

	<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php get_theme_url(); ?>/cssnicemenu/style.css" />
	<script type="text/javascript" src="<?php get_theme_url(); ?>/cssnicemenu/jquery.color.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('nav ul li a').hover(
				function() {
					$(this).css('padding', '5px 15px')
						 .animate({'paddingLeft'	: '25px', 
									 'paddingRight'	: '25px', 
								 'backgroundColor':'rgba(60,60,60,0.9)'}, 
										 'slow');
				}, 
				function() {
					$(this).css('padding', '5px 25px')
						 .animate({'paddingLeft'	: '15px', 
					 			'paddingRight'		: '15px', 
					 			'backgroundColor' :'rgba(60,60,60,0.8)'}, 
							 			'slow');
			}).mousedown(function() {
				$(this).animate({'backgroundColor': 'rgba(60,60,60,0.7)'}, 'fast');
			}).mouseup(function() {
				$(this).animate({'backgroundColor': 'rgba(60,60,60,0.9)'}, 'fast');
			});
            initContactTip();
		});
	</script>
    
<!--
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/jstackmenu.css" type="text/css" />
    <script type="text/javascript" src="<?php get_theme_url(); ?>/js/jstackmenu.js"></script>
    -->
</head>
