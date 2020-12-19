<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	

		<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
			<div class="container">
				<div class="header-items">
					<div class="logo_container">
						<div class="header-logo-wrapper">
							<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logo.svg" alt="header image"></a>
						</div>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</div>
					<div class="items">
						<a href="http://app.marqeta.com">Sign in</a>
						<a href="https://www.marqeta.com/contact-us" class="btn contact-us">Contact Us</a>
						<div class="mobile-menu">
							<button type="button" class="js-menu-trigger sliding-menu-button" role="button" aria-label="Open Menu">
								<span></span>
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</header>
</div>
	
