<?php
/**
 * The sidebar containing the main widget area
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div class="sidebar">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</div>
<?php endif; ?>
