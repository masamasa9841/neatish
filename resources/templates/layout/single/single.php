<div role="main">
    <?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <article class="article">
        <header>
         <h1><?php the_title_attribute(); ?></h1>
        </header>

        <?php if(has_post_thumbnail()) {the_post_thumbnail(); } ?>
        <?php the_content(); ?>
      </article>

    <?php endwhile; ?>

		<div class="article-info">
			<h4>Article Info</h4>
						<p>Created: <?php the_date('c'); ?></p>
						<p>Modified: <?php the_modified_date('c'); ?></p>
						<p><?php if (function_exists ('wpp_get_views')) {
							 echo 'Views: ' . wpp_get_views ( get_the_ID() ); } ?></p>
						<p class="category">Category: <?php the_category(', ') ?></p>
						<div>
						<?php if(get_previous_post()): // 前の記事があったら?>
						<span class="prev">Prev: <?php previous_post_link('%link','%title'); ?></span>
						<?php endif; if(get_next_post()): // 次の記事があったら?>
						<sapn class="next">Next: <?php next_post_link('%link','%title' ); ?></span>
						<?php endif; ?>
						</div>
		</div>

      <?php comments_template(); ?>

   <?php else : ?>
      <p>お探しの記事は見つかりませんでした。</p>
    <?php endif; ?>
    </div><!-- /#main -->
