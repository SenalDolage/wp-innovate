<?php

/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!--wordpress head-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	} else {
		do_action('wp_body_open');
	}
	?>
	<!--[if lt IE 8]>
			<p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
		<![endif]-->


	<div class="page-container" style="background-image: url('<?php bloginfo('template_url'); ?>/img/body-bg.png');">
		<?php do_action('before'); ?>
		<header role="banner" class="site-header">
			<div class="container">
				<div class="row top-header-row">
					<div class="col-xs-8 col-sm-4">
						<div class="main-logo-wrap">
							<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<img src="<?php bloginfo('template_url'); ?>/img/logo.png">
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-8">
						<nav class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
									<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="collapse navbar-collapse navbar-primary-collapse nav-bar-wrapper">
								<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
								<?php dynamic_sidebar('navbar-right'); ?>
							</div>
							<!--.navbar-collapse-->
						</nav>
					</div>
				</div>
			</div>
		</header>
		<div class="sub-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<form role="search" method="get" action="#" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">
							<div class="wp-block-search__inside-wrapper ">
								<input type="search" id="wp-block-search__input-1" class="wp-block-search__input " name="s" placeholder="" required="">
								<button type="submit" class="wp-block-search__button  ">Search</button>
							</div>
						</form>
						<div class="sub-header-sm">
							<a href="https://www.instagram.com/limitlessyou.lk/" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 38 38">
									<path id="icons8-instagram" d="M16.5,5A11.523,11.523,0,0,0,5,16.5v15A11.523,11.523,0,0,0,16.5,43h15A11.524,11.524,0,0,0,43,31.5v-15A11.523,11.523,0,0,0,31.5,5Zm0,3h15A8.478,8.478,0,0,1,40,16.5v15A8.479,8.479,0,0,1,31.5,40h-15A8.478,8.478,0,0,1,8,31.5v-15A8.477,8.477,0,0,1,16.5,8ZM34,12a2,2,0,1,0,2,2A2,2,0,0,0,34,12ZM24,14A10,10,0,1,0,34,24,10.023,10.023,0,0,0,24,14Zm0,3a7,7,0,1,1-7,7A6.978,6.978,0,0,1,24,17Z" transform="translate(-5 -5)" fill="#fff" />
								</svg>
							</a>
							<a href="https://www.facebook.com/innovatelanka" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="10.525" height="20" viewBox="0 0 10.525 20">
									<path id="icons8-facebook-f" d="M17.525,9H14V7c0-1.032.084-1.682,1.563-1.682h1.868V2.138A26.065,26.065,0,0,0,14.693,2,4.374,4.374,0,0,0,10,6.7V9H7v4h3v9h4V13h3.066Z" transform="translate(-7 -2)" fill="#fff" />
								</svg>
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>


		<div id="content" class="site-content">