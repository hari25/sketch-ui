<footer id="colophon" class="site-footer">
	<section class="divider"></section>
		<div class="above-the-footer et_pb_row">
			<div class="column">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/blurb-img-card.jpg" alt="navigation" width="auto" height="auto">
			</div>
			<div class="column">
				<h3 class="fg-white">Launch your next payment innovation</h3>
			</div>
			<div class="column">
				<p class="fg-white">Let’s talk about your use case and how we can help.</p>
			</div>
			<div class="column">
				<a href="https://www.marqeta.com/contact-us" class="btn">Contact Us</a>
			</div>
		</div>
		<div class="container">
			<div class="footer-menus flex-wrap">
				<?php wp_nav_menu( array(
				    'theme_location' => 'footer-menu-one',
				    'menu_class' => 'menu',
				    'items_wrap'     => '<div><h4 class="my-0">Solutions</h4><ul class="pl-0">%3$s</ul></div>'
				) ); ?>
				<?php wp_nav_menu( array(
				    'theme_location' => 'footer-menu-two',
				    'menu_class' => 'menu',
				    'items_wrap'     => '<div><h4 class="my-0">Product</h4><ul class="pl-0">%3$s</ul></div>'
				) ); ?>
				<?php wp_nav_menu( array(
				    'theme_location' => 'footer-menu-three',
				    'menu_class' => 'menu',
				    'items_wrap'     => '<div><h4 class="my-0">Features</h4><ul class="pl-0">%3$s</ul></div>'
				) ); ?>
				<?php wp_nav_menu( array(
				    'theme_location' => 'footer-menu-four',
				    'menu_class' => 'menu',
				    'items_wrap'     => '<div><h4 class="my-0">Developer</h4><ul class="pl-0">%3$s</ul></div>'
				) ); ?>
				<div>
					<?php wp_nav_menu( array(
					    'theme_location' => 'footer-menu-five',
					    'menu_class' => 'menu',
					    'items_wrap'     => '<div><h4 class="my-0">Company</h4><ul class="pl-0">%3$s</ul></div>'
					) ); ?>
					<div class="weather">
						<h3 class="mb-0"><?php echo show_temp(); ?></h3>
					</div>
				</div>
				<!-- "' . show_temp() . '" -->
			</div>
			<div class="footer-widget">		
					<div class="copyright fwidget">
						<p class="fg-white my-0">© 2020 Marqeta, Inc. 180 Grand Avenue, 6th Floor, Oakland, CA 94612</p>
					</div>
					<div class="footer-widget-menu fwidget">
						<?php wp_nav_menu( array(
						    'theme_location' => 'footer-menu-widget'
						) ); ?>
					</div>
			</div>
		</div>
</footer><!-- #colophon -->

</body>
</html>
