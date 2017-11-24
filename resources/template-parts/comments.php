<?php
/**
 * The template for displaying comments
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

?>

<div id="comment-area">
	<?php if ( have_comments() ) : ?>
		<section>
			<h2 id="comments">Comments</h2>

			<ol class="commets-list">
			<?php wp_list_comments( 'avatar_size=55' ); ?>
			</ol>
		</section>
	<?php endif; ?>

	<?php
		$args = array(
			'title_reply'  => 'reply',
			'label_submit' => 'submit',
		);
		echo '<aside>';
		comment_form( $args );
		echo '</aside>';
	?>
	<?php the_comments_navigation(); ?>
</div>
