<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Solomon_v3
 */

 ?>
 <html <?php language_attributes(); ?>>
 <head>
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="profile" href="http://gmpg.org/xfn/11">

 <!-- Typekit -->
 <script src="https://use.typekit.net/eng8jak.js"></script>
 <script>try{Typekit.load({ async: true });}catch(e){}</script>

 <?php wp_head(); ?>
 </head>

 <body class="light-classes" <?php body_class(); ?>>
 <div id="page" class="site">

 	<header id="masthead" class="site-header mt30" role="banner">
 		<div class="container ">
 			<div class="site-branding">
 				<p class="site-title inline-block">
 					<img class="inline-block mr5" src="<?php bloginfo('stylesheet_directory'); ?>/img/black-bear.svg">
 					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
 				</p>
 			</div><!-- .site-branding -->
 			<nav id="site-navigation" class="main-navigation" role="navigation">
 				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
 			</nav><!-- #site-navigation -->
 		</div>
 	</header><!-- #masthead -->

 	<div id="content" class="site-content">


	<!-- END HEADER.PHP	 -->
	<!-- BEGIN SINGLE.PHP	 -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'post' );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar(); ?>


<!-- BEGIN FOOTER.PHP	 -->

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="container pt20">
    <div class="col-md-3">
      <div class="site-branding inline-block">
        <img class="inline-block" src="<?php bloginfo('stylesheet_directory'); ?>/img/black-bear.svg">
        <p class="site-title inline-block ml5"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
      </div>
    </div>
    <div class="col-md-3">
      <h4 class="mb10"><?php $nav_menu = wp_get_nav_menu_object(2); echo $nav_menu->name; ?></h4>
      <?php wp_nav_menu( array( 'theme_location' => 'footer-left-menu', 'container_class' => 'footer-menu' ) ); ?>
    </div>
    <div class="col-md-3">
      <h4 class="mb10"><?php $nav_menu = wp_get_nav_menu_object(20); echo $nav_menu->name; ?></h4>
      <?php wp_nav_menu( array( 'theme_location' => 'footer-middle-menu', 'container_class' => 'footer-menu' ) ); ?>
    </div>
    <div class="col-md-3">
      <h4 class="mb10"><?php $nav_menu = wp_get_nav_menu_object(21); echo $nav_menu->name; ?></h4>
      <?php wp_nav_menu( array( 'theme_location' => 'footer-right-menu', 'container_class' => 'footer-menu' ) ); ?>
      </div>
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
