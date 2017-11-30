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
				</section>
			</main>
			<?php get_sidebar(); ?>
			<footer class="global-footer">
				<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
			</footer>
		</div><!-- container -->
	</body>
</html>
