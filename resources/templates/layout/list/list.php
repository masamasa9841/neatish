<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

?>
<div id="list" role="main">
	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
		?>
			<?php if ( is_sticky() ) : ?>
				<div class="sticky">
					<?php get_template_part( 'templates/layout/list/entry' ); ?>
				</div>
			<?php else : ?>
				<div>
					<?php get_template_part( 'templates/layout/list/entry' ); ?>
				</div>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php else : ?>
		<p>The article you were looking for could not be found.</p>
	<?php endif; ?>
	<div class="pagination-area">
	<!-- pagi nation -->
	<?php
	the_posts_pagination(array(
		'prev_text' => 'PREV',
		'next_text' => 'NEXT',
		'mid_size'  => 2,
	) );
	?>
</div><!-- /#main -->
