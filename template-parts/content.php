<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Solomon_v3
 */

?>

<div class="container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header mt30 mb30 text-center">
			<h4 class="mb5"><?php echo get_the_date(); ?> / <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h4>
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title mt0 mb0">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title mt0 mb0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<!-- <div class="entry-meta">
				<?php the_category(', ') ?>
			</div> -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<footer class="entry-footer">
			<!-- <?php solomon_v3_entry_footer(); ?> -->
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>
