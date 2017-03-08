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
  	<!-- <p id="comments-title">
  		<?php comments_number( __( 'Leave A Comment', 'okay' ), __( '1 Comment', 'okay' ), __( '% Comments', 'okay' ) ); ?>
  	</p> -->

  <h3 id="comments-title">
    <?php
      printf( // WPCS: XSS OK.
        esc_html( _nx( 'One comment about %2$s', '%1$s comments about %2$s', get_comments_number(), 'comments title', 'solomon-v3' ) ),
        number_format_i18n( get_comments_number() ),
        '<span>' . get_the_title() . '</span>'
      );
    ?>
  </h3>
  <!-- .comments-title -->

  	<div class="comments-wrap">
  		<ol class="commentlist">
        <?php wp_list_comments( "callback=okay_comment" ); ?>
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
