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
	<header class="container entry-header text-center mt-vh-15 mb60">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title mb20">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title mb20"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<h4><?php echo get_the_date(); ?> / <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h4>
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

	<!-- suggested posts -->
	<?php
		// check if the repeater field has rows of data
		if( have_rows('suggested_posts') ): ?>
			<section class="container-post suggested-posts">
			<h4 class="text-center">Suggested Reading</h4>
			<?php
			// loop through the rows of data
			while ( have_rows('suggested_posts') ) : the_row(); ?>
				<?php
				$post_object = get_sub_field('suggested_post');
				if( $post_object ):
					// override $post
					$post = $post_object;
					setup_postdata( $post );
					?>
				    <div class="mb50">
				    	<h3 class="mb20 text-center"><a href="<?php the_permalink(); ?>" class="remove-underline"><?php the_title(); ?></a></h3>
							<h4 class="mb20 text-center"><?php echo get_the_date(); ?> / <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h4>
							<?php the_excerpt(); ?>
							<!-- <div class="author-information mt2">
								<?php echo get_avatar( get_the_author_meta( 'ID' ), 36 ); ?>
								<span class="ml1">by <span class="semibold"><?php the_author_posts_link(); ?></span> on <?php the_date(); ?></span>
							</div> -->
							<p class="text-center"><a href="<?php the_permalink();?>" class="color-primary">Continue Reading</a></span>
				    </div>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>

			<?php endwhile;
			else :
				// no rows found
		endif;
	?>
	</section>
	<!-- end suggested posts -->


	<footer class="entry-footer">
		<?php solomon_v3_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
