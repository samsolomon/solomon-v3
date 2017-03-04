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
	<div class="col-sm-3">
	</div>
	<div class="col-sm-9">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">					
					<?php the_time('F y, Y') ?>  <?php the_category(', ') ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<footer class="entry-footer">
				<!-- <?php solomon_v3_entry_footer(); ?> -->
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->
	</div>
</div>
