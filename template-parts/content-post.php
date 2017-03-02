<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Solomon_v3
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="container entry-header text-center mt-vh-15">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta mt30 mb30">
			<?php the_time('F y, Y') ?>  <?php the_category(', ') ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="container-post">
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'solomon-v3' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'solomon-v3' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div>

	<footer class="entry-footer">
		<?php solomon_v3_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
