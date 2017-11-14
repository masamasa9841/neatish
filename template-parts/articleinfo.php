<?php
/**
 * The template Articleinfo.
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

?>

<div class="article-info">
	<h4>Article Info</h4>
		<p>Created:  <?php the_date( 'Y/m/d \a\t g:i A' ); ?></p>
		<p>Modified: <?php the_modified_date( 'Y/m/d \a\t g:i A' ); ?></p>
		<p>
			<?php if ( function_exists( 'wpp_get_views' ) ) { ?>
				<?php echo 'Views: ' . esc_html( wpp_get_views( get_the_ID() ) ); } ?>
		</p>
		<p class="category">Category: <?php esc_html( the_category( ', ' ) ); ?></p>
		<div>
			<?php if ( get_previous_post() ) : ?>
				<span class="prev">Prev: <?php previous_post_link( '%link', '%title' ); ?></span>
			<?php endif; if ( get_next_post() ) : ?>
				<sapn class="next">Next: <?php next_post_link( '%link', '%title' ); ?></span>
			<?php endif; ?>
		</div>
</div>
