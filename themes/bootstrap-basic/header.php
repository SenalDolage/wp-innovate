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
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
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
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		} else {
			do_action( 'wp_body_open' );
		}
		?> 
		<!--[if lt IE 8]>
			<p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
		<![endif]-->
		
		
		<div class="page-container">
			<?php do_action('before'); ?> 
			<header role="banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-8 col-sm-4">
							<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="https://via.placeholder.com/150X50"></a>
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
								</div><!--.navbar-collapse-->
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
										<input type="search" id="wp-block-search__input-1" class="wp-block-search__input " name="s" value="hello world" placeholder="" required="">
										<button type="submit" class="wp-block-search__button  ">Search</button>
									</div>
							</form>
							<div class="sub-header-sm">
								<a href="linkedin.com" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22">
										<path id="icons8-linkedin-2" d="M8.643,4a2.654,2.654,0,1,0,2.641,2.641A2.641,2.641,0,0,0,8.643,4Zm12.893,7a4.385,4.385,0,0,0-4.1,2.314h-.065v-2H13V26h4.557V18.729c0-1.916.145-3.768,2.516-3.768,2.337,0,2.371,2.185,2.371,3.889V26H27V17.932C27,13.984,26.151,11,21.535,11Zm-15.172.311V26h4.561V11.311Z" transform="translate(-6 -4)" fill="#fff"/>
										</svg>
								</a>
								<a href="Instagram.com" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 38 38">
										<path id="icons8-instagram" d="M16.5,5A11.523,11.523,0,0,0,5,16.5v15A11.523,11.523,0,0,0,16.5,43h15A11.524,11.524,0,0,0,43,31.5v-15A11.523,11.523,0,0,0,31.5,5Zm0,3h15A8.478,8.478,0,0,1,40,16.5v15A8.479,8.479,0,0,1,31.5,40h-15A8.478,8.478,0,0,1,8,31.5v-15A8.477,8.477,0,0,1,16.5,8ZM34,12a2,2,0,1,0,2,2A2,2,0,0,0,34,12ZM24,14A10,10,0,1,0,34,24,10.023,10.023,0,0,0,24,14Zm0,3a7,7,0,1,1-7,7A6.978,6.978,0,0,1,24,17Z" transform="translate(-5 -5)" fill="#fff"/>
									</svg>
								</a>
								<a href="facebook.com" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="10.525" height="20" viewBox="0 0 10.525 20">
										<path id="icons8-facebook-f" d="M17.525,9H14V7c0-1.032.084-1.682,1.563-1.682h1.868V2.138A26.065,26.065,0,0,0,14.693,2,4.374,4.374,0,0,0,10,6.7V9H7v4h3v9h4V13h3.066Z" transform="translate(-7 -2)" fill="#fff"/>
										</svg>
								</a>
								<a href="twitter.com" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 26.001 21.129">
										<path id="icons8-twitter" d="M28,6.937a10.648,10.648,0,0,1-3.064.84,5.343,5.343,0,0,0,2.345-2.951,10.7,10.7,0,0,1-3.388,1.3A5.336,5.336,0,0,0,14.666,9.77a5.394,5.394,0,0,0,.138,1.215A15.143,15.143,0,0,1,3.809,5.411,5.344,5.344,0,0,0,5.46,12.533a5.323,5.323,0,0,1-2.416-.667v.067a5.335,5.335,0,0,0,4.279,5.23,5.336,5.336,0,0,1-1.406.187,5.431,5.431,0,0,1-1-.095A5.341,5.341,0,0,0,9.9,20.96,10.764,10.764,0,0,1,2,23.169a15.1,15.1,0,0,0,8.177,2.4A15.072,15.072,0,0,0,25.352,10.388q0-.346-.015-.69A10.855,10.855,0,0,0,28,6.937Z" transform="translate(-1.999 -4.436)" fill="#fff"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			
			<div id="content" class="site-content">
