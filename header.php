<?php
/**
 * @package WordPress
 * @subpackage Lysander
 * @since HTML5 Reset 2.0
 */
?><!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->

	<?php if (is_search()) echo '<meta name="robots" content="noindex, nofollow" />'; ?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<!--Google will often use this as its description of your page/site. Make it good.-->

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php if (true == of_get_option('meta_author')) echo '<meta name="author" content="'.of_get_option("meta_author").'" />'; ?>
	
	<?php if (true == of_get_option('meta_google')) echo '<meta name="google-site-verification" content="'.of_get_option("meta_google").'" />'; ?>

	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
	
	<?php if (true == of_get_option('head_favicon')) {
	echo '<link rel="shortcut icon" href="'.of_get_option("head_favicon").'" />';
	echo '<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->';
	} ?>

	<?php if (true == of_get_option('head_apple_touch_icon')) {
	echo '<link rel="apple-touch-icon" href="'.of_get_option("head_apple_touch_icon").'">';
	echo '<!-- The is the icon for iOS Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->';
	} ?>

	<!-- concatenate and minify for production -->

	<!-- Styles -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<!--[if IE 7]>
		<link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" />
	<![endif]-->	

	<!-- From Cameron -->
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700|Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
    <link href="https://get.gridsetapp.com/23622/" rel="stylesheet" />
    <script src="<?php bloginfo('template_directory'); ?>js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>responsive-nav.js/responsive-nav.min.js"></script>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>responsive-nav.js/responsive-nav.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>css/normalize.css">

	<!-- Javascript -->
	<!-- move to bottom -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
	
	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Application-specific meta tags -->
	<?php if (true == of_get_option('meta_app_win_name')) {
	echo '<!-- Windows 8 -->';
	echo '<meta name="application-name" content="'.of_get_option("meta_app_win_name").'" /> ';
	echo '<meta name="msapplication-TileColor" content="'.of_get_option("meta_app_win_color").'" /> ';
	echo '<meta name="msapplication-TileImage" content="'.of_get_option("meta_app_win_image").'" />';
	} ?>

	<?php if (true == of_get_option('meta_app_twt_card')) {
	echo '<!-- Twitter -->';
	echo '<meta name="twitter:card" content="'.of_get_option("meta_app_twt_card").'" />';
	echo '<meta name="twitter:site" content="'.of_get_option("meta_app_twt_site").'" />';
	echo '<meta name="twitter:title" content="'.of_get_option("meta_app_twt_title").'">';
	echo '<meta name="twitter:description" content="'.of_get_option("meta_app_twt_description").'" />';
	echo '<meta name="twitter:url" content="'.of_get_option("meta_app_twt_url").'" />';
	} ?>

	<?php if (true == of_get_option('meta_app_fb_title')) {
	echo '<!-- Facebook -->';
	echo '<meta property="og:title" content="'.of_get_option("meta_app_fb_title").'" />';
	echo '<meta property="og:description" content="'.of_get_option("meta_app_fb_description").'" />';
	echo '<meta property="og:url" content="'.of_get_option("meta_app_fb_url").'" />';
	echo '<meta property="og:image" content="'.of_get_option("meta_app_fb_image").'" />';
	} ?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	
	<!-- <div id="wrapper"> not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

		<header id="header" role="header">
			<nav class="nav-collapse" role="navigation">
				<?php wp_nav_menu( array( 'menu' => 'Default', 'container' => false , 'menu_class' => 'nav' ) ); ?>
			</nav>
		</header>
		


		<section id="content" class="container">
	    <!-- index follows with content -->

