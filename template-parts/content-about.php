<?php
/**
 * The template used for displaying page content
 *
 * @package Solomon_v3
 */
?>

<div class="container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="feature-image mt30">
			<?php the_post_thumbnail(); ?>
		</div>

		<div class="row mt30">
			<div class="col-sm-6 col-sm-offset-3">

			<div class="entry-content mb50">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'solomon-v3' ),
						'after'  => '</div>',
					) );
				?>
			</div>
			<!-- .entry-content -->

			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								esc_html__( 'Edit %s', 'solomon-v3' ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
							'<span class="edit-link">',
							'</span>'
						);
					?>
				</footer><!-- .entry-footer -->

			</div><!-- end column -->
		</div>

		<?php endif; ?>
	</article><!-- #post-## -->
</div>
