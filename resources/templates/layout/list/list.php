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
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="entry-article">
				<!-- Blog title -->
				<header class="entry-header">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"title="<?php the_title_attribute(); ?>"> <?php the_title_attribute(); ?></a></h2>
				</header>

				<div class="entry-summary">
					<!-- Thumbnail -->
					<div class="excerpt-thumb">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php
									$attr = array(
										'class' => 'entry-thumnail',
										'alt'   => get_the_title(),
									);
									the_post_thumbnail( 'thumbnail_200_140', $attr );
								?>
							</a>
						<?php else : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/src/images/no-image.png' ); ?>" alt="NO IMAGE" class="entry-thumnail no-image" />
							</a>
						<?php endif; ?>
					</div> <!-- excerpt-thumb	 -->
					<!-- excerpt -->
					<p>
						<?php echo esc_html( get_the_custom_excerpt( get_the_content(), 120 ) ); ?>
						<span class="read-more"><a href="<?php the_permalink(); ?>"> Read More > </a></span>
					</p>
				</div> <!-- entry-summary" -->

				<footer>
					<div class="entry-meta">
						<span>
							<!-- Category -->
							Category: <?php the_category( ', ' ); ?>
							<!-- tag -->
							tags: <?php the_tags( '', ', ' ); ?>
						</span>
					</div>

					<div class="entry-meta">
						<span>
							<!-- date -->
							Date: <?php the_time( 'Y/n/j' ); ?>
							<!-- view -->
							<?php
							if ( function_exists( 'wpp_get_views' ) ) {
								echo 'views: ' . esc_html( wpp_get_views( get_the_ID() ) );
							}
							?>
							<!-- Author -->
							Author: <a href="<?php echo esc_html( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
							<?php the_author(); ?></a>
						</span>
					</div>
				</footer>

			</article>
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
