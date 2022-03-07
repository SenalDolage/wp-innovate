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

		<div class="first-row">
			<div class="logo-content">
				<img src="https://via.placeholder.com/200X100" />
			</div>

			<div class="socials-content">
				<div class="social-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22">
						<path id="icons8-linkedin-2" d="M8.643,4a2.654,2.654,0,1,0,2.641,2.641A2.641,2.641,0,0,0,8.643,4Zm12.893,7a4.385,4.385,0,0,0-4.1,2.314h-.065v-2H13V26h4.557V18.729c0-1.916.145-3.768,2.516-3.768,2.337,0,2.371,2.185,2.371,3.889V26H27V17.932C27,13.984,26.151,11,21.535,11Zm-15.172.311V26h4.561V11.311Z" transform="translate(-6 -4)" fill="#fff" />
					</svg>
				</div>
				<div class="social-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 38 38">
						<path id="icons8-instagram" d="M16.5,5A11.523,11.523,0,0,0,5,16.5v15A11.523,11.523,0,0,0,16.5,43h15A11.524,11.524,0,0,0,43,31.5v-15A11.523,11.523,0,0,0,31.5,5Zm0,3h15A8.478,8.478,0,0,1,40,16.5v15A8.479,8.479,0,0,1,31.5,40h-15A8.478,8.478,0,0,1,8,31.5v-15A8.477,8.477,0,0,1,16.5,8ZM34,12a2,2,0,1,0,2,2A2,2,0,0,0,34,12ZM24,14A10,10,0,1,0,34,24,10.023,10.023,0,0,0,24,14Zm0,3a7,7,0,1,1-7,7A6.978,6.978,0,0,1,24,17Z" transform="translate(-5 -5)" fill="#fff" />
					</svg>
				</div>
			</div>
		</div>

		<div class="second-row">
			<div class="row">
				<div class="col-md-6">
					<div class="menu-col">
						<h4>
							Privacy Policy
						</h4>

						<div class="menu-wrapper">
							<?php wp_nav_menu(array('theme_location' => 'footer-col-one', 'container' => false, 'menu_class' => 'footer-menu', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
						</div>
					</div>

					<div class="menu-col">
						<h4>
							Company
						</h4>

						<div class="menu-wrapper">
							<?php wp_nav_menu(array('theme_location' => 'footer-col-two', 'container' => false, 'menu_class' => 'footer-menu', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
						</div>
					</div>

					<div class="menu-col">
						<h4>
							Need Help?
						</h4>

						<div class="menu-wrapper">
							<?php wp_nav_menu(array('theme_location' => 'footer-col-three', 'container' => false, 'menu_class' => 'footer-menu', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
						</div>
					</div>
				</div>

				<div class="col-md-6">

				</div>
			</div>
		</div>

		<div class="third-row">
			<div class="copright">
				2022 Innovate. All Rights Reserved.
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