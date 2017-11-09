<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

?>
<div class="entry-body" role="main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
			<?php wp_link_pages(); ?>
			<article class="article">
				<header>
					<h1><?php the_title_attribute(); ?></h1>
				</header>
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
		<?php get_template_part( 'template-parts/share-buttons' ); ?>
		<?php get_template_part( 'template-parts/articleinfo' ); ?>
		<?php comments_template(); ?>
	<?php else : ?>
		<p>The article you were looking for could not be found.</p>
	<?php endif; ?>
</div><!-- /#main -->
<?php get_template_part( 'template-parts/comments' ); ?>
