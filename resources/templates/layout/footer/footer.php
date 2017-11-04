<?php
/**
 * The template for displaying the footer
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

?>

					<?php wp_footer(); ?>
				</body>
			</section>
		</main>
		<?php get_sidebar(); // サイドバーの呼び出し. ?>
		<footer class="global-footer">
			&copy; <?php bloginfo( 'name' ); ?> All Rights Reserved.
		</footer>
	</div><!-- container -->
</html>
