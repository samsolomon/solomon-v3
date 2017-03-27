<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solomon_v3
 */

?>

<!-- REMEMBER TO MAKE CHANGES IN SINGLE.PHP! -->

	</div><!-- #content -->

	<footer id="colophon" class="site-footer mt30" role="contentinfo">
		<div class="container pt20">
			<div class="col-md-3">
				<div class="site-branding inline-block">
					<img class="inline-block" src="<?php bloginfo('stylesheet_directory'); ?>/img/polar-bear.svg">
					<p class="site-title inline-block ml5"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				</div>
			</div>
			<div class="col-md-3">
				<h4 class="mb10">Navigation</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-left-menu', 'container_class' => 'footer-menu' ) ); ?>
			</div>
			<div class="col-md-3">
				<h4 class="mb10">Keep in Touch</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-middle-menu', 'container_class' => 'footer-menu' ) ); ?>
			</div>
			<div class="col-md-3">
				<h4 class="mb10">Elsewhere</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-right-menu', 'container_class' => 'footer-menu' ) ); ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div class="mt20 mb20">
		<p class="small-caps text-center">Copyright &copy; Sam Solomon <?php echo date("Y"); ?>. All rights reserved.</p>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
