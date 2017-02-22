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

	</div><!-- #content -->

	<footer id="colophon" class="site-footer mt30" role="contentinfo">
		<div class="container pt20 pb20">
			<div class="col-md-3">
				<div class="site-branding inline-block">
					<img class="inline-block" src="<?php bloginfo('stylesheet_directory'); ?>/img/bear.svg">
					<p class="site-title inline-block ml5"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				</div>
			</div>
			<div class="col-md-3">
				<h4>Navigation</h4>
				<ul>
					<li>Stuff Here</li>
					<li>Stuff Here</li>
					<li>Stuff Here</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h4>Keep in Touch</h4>
				<ul>
					<li>Stuff Here</li>
					<li>Stuff Here</li>
					<li>Stuff Here</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h4>Elsewhere</h4>
				<ul>
					<li>Stuff Here</li>
					<li>Stuff Here</li>
					<li>Stuff Here</li>
				</ul>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div class="mt20 mb20">
		<h4 class="text-center">Copyright &copy; Sam Solomon <?php echo date("Y"); ?>. All rights reserved.</h4>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
