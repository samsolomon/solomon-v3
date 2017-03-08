<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Solomon_v3
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
 if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) )
 	die ( 'Please do not load this page directly. Thanks!' );

 if ( post_password_required() ) {
 	?>
 	<p class="nocomments"><?php _e( 'This post is password protected. Enter the password to view comments.', 'okay' ); ?></p>
 	<?php
 	return;
 }
 ?>

<div id="comments">
  <div class="container">
  	<!-- <h3 id="comments-title">
  		<?php comments_number( __( 'Leave A Comment', 'okay' ), __( '1 Comment', 'okay' ), __( '% Comments', 'okay' ) ); ?>
  	</h3> -->

  <!-- <h3 id="comments-title">
    <?php
      printf( // WPCS: XSS OK.
        esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'solomon-v3' ) ),
        number_format_i18n( get_comments_number() ),
        '<span>' . get_the_title() . '</span>'
      );
    ?>
  </h3> -->
  <!-- .comments-title -->

  	<div class="comments-wrap">
  		<ol class="commentlist">
      <?php
        // Arguments for wp_list_comments()
        $args = [
          'style'       => 'ol',
          'short_ping'  => true,
        ];

        // Use our custom walker if it's available
        if( class_exists( 'WPSE_Walker_Comment' ) )
        {
          $args['format'] = 'wpse';
          $args['walker'] = new WPSE_Walker_Comment;
        }

        wp_list_comments( $args );
      ?>
  		</ol>

  		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
  			<nav id="comment-nav-below" role="navigation">
  				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'okay' ) ); ?></div>
  				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'okay' ) ); ?></div>
  			</nav>
  		<?php endif; // check for comment navigation ?>

  		<?php comment_form(); ?>
  	</div>
  	<!-- .comments-wrap -->
  </div><!-- .conatiner -->
</div><!-- #comments -->


<!-- *********************************** -->


 <div id="comments" class="comments-area">

 	<?php
 	// You can start editing here -- including this comment!
 	if ( have_comments() ) : ?>
 		<h3 id="comments-title">
 			<?php
 				printf( // WPCS: XSS OK.
 					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'solomon-v3' ) ),
 					number_format_i18n( get_comments_number() ),
 					'<span>' . get_the_title() . '</span>'
 				);
 			?>
 		</h3><!-- .comments-title -->

 		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
 		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
 			<h3 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'solomon-v3' ); ?></h3>
 			<div class="nav-links">

 				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'solomon-v3' ) ); ?></div>
 				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'solomon-v3' ) ); ?></div>

 			</div><!-- .nav-links -->
 		</nav><!-- #comment-nav-above -->
 		<?php endif; // Check for comment navigation. ?>

 		<ol class="comment-list">
 			<?php
 				wp_list_comments( array(
 					'style'      => 'ol',
 					'short_ping' => true,
 				) );
 			?>
 		</ol><!-- .comment-list -->

 		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
 		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
 			<h3 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'solomon-v3' ); ?></h3>
 			<div class="nav-links">

 				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'solomon-v3' ) ); ?></div>
 				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'solomon-v3' ) ); ?></div>

 			</div><!-- .nav-links -->
 		</nav><!-- #comment-nav-below -->
 		<?php
 		endif; // Check for comment navigation.

 	endif; // Check for have_comments().


 	// If comments are closed and there are comments, let's leave a little note, shall we?
 	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

 		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'solomon-v3' ); ?></p>
 	<?php
 	endif;

 	comment_form();
 	?>

 </div><!-- #comments -->
