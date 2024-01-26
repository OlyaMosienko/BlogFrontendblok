<?php
/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0.0
 *
 * This file is here for backward compatibility with old themes and will be removed in a future version
 */
_deprecated_file(
	/* translators: %s: Template name. */
	sprintf( __( 'Theme without %s' ), basename( __FILE__ ) ),
	'3.0.0',
	null,
	/* translators: %s: Template name. */
	sprintf( __( 'Please include a %s template in your theme.' ), basename( __FILE__ ) )
);

// Do not delete these lines.
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' === basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die( 'Please do not load this page directly. Thanks!' );
}

if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e( 'This post is password protected. Enter the password to view comments.' ); ?></p>
	<?php
	return;
}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments">
		<?php
		if ( '1' === get_comments_number() ) {
			printf(
				/* translators: %s: Post title. */
				__( 'One response to %s' ),
				'&#8220;' . get_the_title() . '&#8221;'
			);
		} else {
			printf(
				/* translators: 1: Number of comments, 2: Post title. */
				_n( '%1$s response to %2$s', '%1$s responses to %2$s', get_comments_number() ),
				number_format_i18n( get_comments_number() ),
				'&#8220;' . get_the_title() . '&#8221;'
			);
		}
		?>
	</h3>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(); ?></div>
		<div class="alignright"><?php next_comments_link(); ?></div>
	</div>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(); ?></div>
		<div class="alignright"><?php next_comments_link(); ?></div>
	</div>
<?php else : // This is displayed if there are no comments so far. ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	<?php else : // Comments are closed. ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e( 'Comments are closed.' ); ?></p>

	<?php endif; ?>
<?php endif; ?>

<?php 
	$fields   =  array(
		'author' => '<input class="comments-form__input" id="author" name="author" type="text" placeholder="Введите имя*" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $html_req . ' />',

		'email'  => '<input class="comments-form__input" placeholder="Введите e-mail*" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $html_req  . ' />',

		'cookies' => '',
	);
	$args = array(
		'comment_field' => '<textarea id="comment" name="comment" class="comments-form__textarea" placeholder="Введите комментарий*" aria-required="true"></textarea>',
		'comment_notes_before' => '',
		'class_form' => 'comments-form__areas',
		'title_reply' => '',
		'title_reply_to' => 'Ответить',
		'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="btn">Отправить</button>',
		'submit_field' => '<div class="button">%1$s %2$s</div>',
		'fields' => apply_filters( 'comment_form_default_fields', $fields ),
	);
	comment_form($args); 
?>
