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
			<?php get_template_part( 'template-parts/breadcrumbs' ); // パンくずリスト. ?>
			<article class="article">
				<header>
					<h1><?php the_title_attribute(); ?></h1>
				</header>
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
		<?php get_template_part( 'template-parts/share-buttons ' ); // シェアボタンのテンプレート. ?>
		<?php get_template_part( 'template-parts/articleinfo' ); // ArticleInfoのテンプレート. ?>
		<?php comments_template(); ?>
	<?php else : ?>
		<p>お探しの記事は見つかりませんでした。</p>
	<?php endif; ?>
</div><!-- /#main -->
