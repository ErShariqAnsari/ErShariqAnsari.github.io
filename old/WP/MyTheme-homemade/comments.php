<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'twentysixteen' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s thought on &ldquo;%2$s&rdquo;',
							'%1$s thoughts on &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'twentysixteen'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ul',
					'short_ping'  => true,
					'avatar_size' => 42,
					'per_page'    => '5',
				) );
			?>
		</ul><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'demotheme' ); ?></p>
	<?php endif; ?>
    
    
    <?php 
	
	$fields =  array(

  'author' =>
    '<div class="col-md-6 col-sm-6 col-xs-12">
	<p class="comment-form-author">
	<label for="author">' . __( 'Name', 'demotheme' ) . '</label> ' .
    ( $req ? '<span class="required mdem16">*</span>' : '' ) .
    '<input id="author" name="author" type="text" class="form-control" 
	placeholder="Name" required="required" size="30"' . $aria_req . ' /></p>
	</div>',

  'email' =>
    '<div class="col-md-6 col-sm-6 col-xs-12">
	<p class="comment-form-email">
	<label for="email">' . __( 'Email', 'demotheme' ) . '</label> ' .
    ( $req ? '<span class="required mdem16">*</span>' : '' ) .
    '<input id="email" name="email" type="email" class="form-control" placeholder="Email "size="30" required="required"' . $aria_req . ' /></p>
	</div>'

  
);
	
	$args = array(
  'id_form'           => 'commentform',
  'class_form'      => 'comment-form',
  'id_submit'         => 'submit',
  'class_submit'      => 'submit btn btn-danger',
  'name_submit'       => 'submit',
  'title_reply'       => __( 'Leave a Reply' ),
  'title_reply_to'    => __( 'Leave a Reply to %s' ),
  'cancel_reply_link' => __( 'Cancel Reply' ),
  'label_submit'      => __( 'Post Comment' ),
  'format'            => 'xhtml',
  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
);
	
	?>

	<?php
		comment_form($args);
	?>

</div><!-- .comments-area -->
