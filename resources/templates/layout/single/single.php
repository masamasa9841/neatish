<div id="main" role="main">
    <?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <article>
        <header>
         <h1><?php the_title_attribute(); ?>"></h1>
          <ul class="post_meta">
            <li class="time"><?php the_date(); ?></li>
            <li class="category"><?php the_category(', ') ?></li>
            <li class="tag"><?php the_tags('', ', '); ?></li>
          </ul>
        </header>

        <?php if(has_post_thumbnail()) {the_post_thumbnail(); } ?>
        <?php the_content(); ?>
      </article>

    <?php endwhile; ?>

      <section class="navigation">
        <?php if(get_previous_post()): ?>
        <div class="prev"><?php previous_post_link('%link','%title'); ?></div>
        <?php endif; if(get_next_post()): ?>
        <div class="next"><?php next_post_link('%link','%title' ); ?></div>
        <?php endif; ?>
      </section>

      <?php comments_template(); ?>

   <?php else : ?>
      <p>お探しの記事は見つかりませんでした。</p>
    <?php endif; ?>
    </div><!-- /#main -->
