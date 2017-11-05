<?php
/**
 * The template breadcrumbs
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

?>

<div class="breadcrumbs">
	<?php
	if ( function_exists( 'bcn_display' ) ) {
		bcn_display();
	}
	?>
</div>
