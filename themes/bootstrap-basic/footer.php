<?php

/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

</div>
<!--.site-content-->

<footer id="site-footer" role="contentinfo" class="site-footer">
	<div class="container">

		<div class="second-row">
			<div class="row">
				<div class="col-md-4 show-mobile">
					<div class="socials-logo-row">
						<div class="logo-content">
							<img src="<?php bloginfo('template_url'); ?>/img/logo.png">
						</div>

						<div class="socials-content">
							<!-- FB icon -->
							<div class="social-icon">
								<a href="https://www.facebook.com/innovatelanka" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="10.525" height="20" viewBox="0 0 10.525 20">
										<path id="icons8-facebook-f" d="M17.525,9H14V7c0-1.032.084-1.682,1.563-1.682h1.868V2.138A26.065,26.065,0,0,0,14.693,2,4.374,4.374,0,0,0,10,6.7V9H7v4h3v9h4V13h3.066Z" transform="translate(-7 -2)" fill="#fff" />
									</svg>
								</a>
							</div>

							<!-- Insta icon -->
							<div class="social-icon">
								<a href="https://www.instagram.com/limitlessyou.lk/" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 38 38">
										<path id="icons8-instagram" d="M16.5,5A11.523,11.523,0,0,0,5,16.5v15A11.523,11.523,0,0,0,16.5,43h15A11.524,11.524,0,0,0,43,31.5v-15A11.523,11.523,0,0,0,31.5,5Zm0,3h15A8.478,8.478,0,0,1,40,16.5v15A8.479,8.479,0,0,1,31.5,40h-15A8.478,8.478,0,0,1,8,31.5v-15A8.477,8.477,0,0,1,16.5,8ZM34,12a2,2,0,1,0,2,2A2,2,0,0,0,34,12ZM24,14A10,10,0,1,0,34,24,10.023,10.023,0,0,0,24,14Zm0,3a7,7,0,1,1-7,7A6.978,6.978,0,0,1,24,17Z" transform="translate(-5 -5)" fill="#fff" />
									</svg>
								</a>
							</div>

							<!-- youtube icon -->
							<div class="social-icon">
								<a href="https://www.youtube.com/channel/UC0mUKiXbtLIEiqEL8eefwiA" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="26.237" height="20.033">
										<path d="M25.5 3.443A3.5 3.5 0 0 0 22.761.751 52.7 52.7 0 0 0 13.026 0a53.476 53.476 0 0 0-9.8.751A3.422 3.422 0 0 0 .487 3.443 42.218 42.218 0 0 0 0 10.017a35.014 35.014 0 0 0 .547 6.573 3.51 3.51 0 0 0 2.739 2.692 54.484 54.484 0 0 0 9.8.751 54.484 54.484 0 0 0 9.8-.751 3.425 3.425 0 0 0 2.739-2.692 49.356 49.356 0 0 0 .609-6.573 45 45 0 0 0-.734-6.574ZM9.74 14.4V5.634l7.426 4.382Z" fill="#fff" />
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-wrapper row">
						<div class="col-6 col-sm-12 col-md-6 menu-col">
							<h4>
								Privacy Info
							</h4>

							<div class="menu-wrapper">
								<?php wp_nav_menu(array('theme_location' => 'footer-col-one', 'container' => false, 'menu_class' => 'footer-menu', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
							</div>
						</div>

						<div class="col-6 col-sm-12 col-md-6 menu-col">
							<h4>
								Company
							</h4>

							<div class="menu-wrapper">
								<?php wp_nav_menu(array('theme_location' => 'footer-col-two', 'container' => false, 'menu_class' => 'footer-menu', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
							</div>
						</div>

						<!-- <div class="col-6 col-sm-4 menu-col">
							<h4>
								Need Help?
							</h4>

							<div class="menu-wrapper">
								< ?php wp_nav_menu(array('theme_location' => 'footer-col-three', 'container' => false, 'menu_class' => 'footer-menu', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
							</div>
						</div> -->
					</div>
				</div>

				<div class="col-md-4 show-large">
					<div class="socials-logo-row">
						<div class="logo-content">
							<img src="<?php bloginfo('template_url'); ?>/img/logo.png">
						</div>

						<div class="socials-content">
							<!-- FB icon -->
							<div class="social-icon">
								<a href="https://www.facebook.com/innovatelanka" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="10.525" height="20" viewBox="0 0 10.525 20">
										<path id="icons8-facebook-f" d="M17.525,9H14V7c0-1.032.084-1.682,1.563-1.682h1.868V2.138A26.065,26.065,0,0,0,14.693,2,4.374,4.374,0,0,0,10,6.7V9H7v4h3v9h4V13h3.066Z" transform="translate(-7 -2)" fill="#fff" />
									</svg>
								</a>
							</div>

							<!-- Insta icon -->
							<div class="social-icon">
								<a href="https://www.instagram.com/limitlessyou.lk/" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 38 38">
										<path id="icons8-instagram" d="M16.5,5A11.523,11.523,0,0,0,5,16.5v15A11.523,11.523,0,0,0,16.5,43h15A11.524,11.524,0,0,0,43,31.5v-15A11.523,11.523,0,0,0,31.5,5Zm0,3h15A8.478,8.478,0,0,1,40,16.5v15A8.479,8.479,0,0,1,31.5,40h-15A8.478,8.478,0,0,1,8,31.5v-15A8.477,8.477,0,0,1,16.5,8ZM34,12a2,2,0,1,0,2,2A2,2,0,0,0,34,12ZM24,14A10,10,0,1,0,34,24,10.023,10.023,0,0,0,24,14Zm0,3a7,7,0,1,1-7,7A6.978,6.978,0,0,1,24,17Z" transform="translate(-5 -5)" fill="#fff" />
									</svg>
								</a>
							</div>

							<!-- youtube icon -->
							<div class="social-icon">
								<a href="https://www.youtube.com/channel/UC0mUKiXbtLIEiqEL8eefwiA" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="26.237" height="20.033">
										<path d="M25.5 3.443A3.5 3.5 0 0 0 22.761.751 52.7 52.7 0 0 0 13.026 0a53.476 53.476 0 0 0-9.8.751A3.422 3.422 0 0 0 .487 3.443 42.218 42.218 0 0 0 0 10.017a35.014 35.014 0 0 0 .547 6.573 3.51 3.51 0 0 0 2.739 2.692 54.484 54.484 0 0 0 9.8.751 54.484 54.484 0 0 0 9.8-.751 3.425 3.425 0 0 0 2.739-2.692 49.356 49.356 0 0 0 .609-6.573 45 45 0 0 0-.734-6.574ZM9.74 14.4V5.634l7.426 4.382Z" fill="#fff" />
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<!-- <div class="newsletter-inner">
						<h4>
							NEWSLETTER
						</h4>
						< ?php echo do_shortcode('[contact-form-7 id="189" title="Footer Newsletter"]'); ?>
					</div> -->
					<div class="reach-out-inner">
						<h4>
							Reach Out
						</h4>

						<div class="reach-out-items">
							<div class="reach-out-item">
								<a href="mailto:info@innovate.lk">
									<svg xmlns="http://www.w3.org/2000/svg" width="17.511" height="15.506" viewBox="0 0 17.511 15.506">
										<path id="Path_8" data-name="Path 8" d="M15.322,64H2.189A2.411,2.411,0,0,0,0,66.584V76.922a2.411,2.411,0,0,0,2.189,2.584H15.322a2.411,2.411,0,0,0,2.189-2.584V66.584A2.412,2.412,0,0,0,15.322,64ZM2.189,65.938H15.322a.6.6,0,0,1,.547.646v.895l-5.7,5.576a2,2,0,0,1-2.821,0l-5.7-5.576v-.9A.6.6,0,0,1,2.189,65.938ZM15.322,77.568H2.189a.6.6,0,0,1-.547-.646V70L6.3,74.584a3.526,3.526,0,0,0,2.459,1.046,3.521,3.521,0,0,0,2.461-1.049L15.869,70v6.917A.6.6,0,0,1,15.322,77.568Z" transform="translate(0 -64)" fill="#fff" />
									</svg>

									<span> info@innovate.lk </span>
								</a>
							</div>

							<div class="reach-out-item">
								<a href="tel:0727171717">
									<svg xmlns="http://www.w3.org/2000/svg" width="20.249" height="20.473">
										<path d="M10.137 0A10.182 10.182 0 0 0 .022 10.22a10.285 10.285 0 0 0 1.351 5.11L0 20.473l5.3-1.266a10.02 10.02 0 0 0 4.833 1.244A10.251 10.251 0 0 0 17.29 3a9.993 9.993 0 0 0-7.153-3Zm0 2.047a8.006 8.006 0 0 1 5.723 2.4A8.2 8.2 0 0 1 10.133 18.4a8.029 8.029 0 0 1-3.864-.994l-.682-.376-.753.18-1.994.48.486-1.827.22-.82-.419-.736a8.237 8.237 0 0 1-1.08-4.087 8.143 8.143 0 0 1 8.088-8.173ZM6.558 5.5a.924.924 0 0 0-.674.32A2.87 2.87 0 0 0 5 7.951a5 5 0 0 0 1.03 2.643 10.415 10.415 0 0 0 4.317 3.855c2.134.851 2.568.683 3.032.64a2.549 2.549 0 0 0 1.707-1.214 2.168 2.168 0 0 0 .148-1.216c-.063-.106-.231-.17-.484-.3s-1.495-.745-1.726-.83-.4-.128-.57.128-.651.83-.8 1-.295.194-.548.066a6.942 6.942 0 0 1-2.033-1.27 7.684 7.684 0 0 1-1.406-1.767c-.147-.255-.014-.395.113-.522s.251-.3.378-.448a1.781 1.781 0 0 0 .253-.426.477.477 0 0 0-.022-.448c-.063-.128-.554-1.39-.779-1.9-.189-.425-.389-.435-.57-.442h-.482Z" fill="#fff" />
									</svg>

									&nbsp;

									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
										<path id="Path_9" data-name="Path 9" d="M19.971,15.111l-.908,3.937a1.214,1.214,0,0,1-1.19.946A17.891,17.891,0,0,1,0,2.123,1.213,1.213,0,0,1,.946.934L4.884.026a1.226,1.226,0,0,1,1.4.708L8.1,4.971A1.222,1.222,0,0,1,7.748,6.4l-2.1,1.689a13.659,13.659,0,0,0,6.231,6.23l1.722-2.1a1.215,1.215,0,0,1,1.425-.351l4.239,1.817A1.332,1.332,0,0,1,19.971,15.111Z" transform="translate(0 0.006)" fill="#fff" />
									</svg>

									<span> 0727 17 17 17 </span>
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="third-row">
			<div class="copright">
				&copy; <?php echo date('Y'); ?> Innovate. All Rights Reserved.
			</div>
		</div>
	</div>
</footer>
</div>
<!--.container page-container-->


<!--wordpress footer-->
<?php wp_footer(); ?>
</body>

</html>