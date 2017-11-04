<?php
/**
 * The template for navigation.
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

?>
<!-- hamburger button -->
<div class="nav-menu-head">Menu</div>
<div class="nav-toggle">
	<div>
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<!-- hamburger button -->

<!-- Navigation -->
<aside class="scroll">
	<nav class="global-nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
		<?php wp_nav_menu(); ?>
	</nav> <!-- #global-nav -->
</aside> <!-- #sidebar -->
<!-- Navigation -->
