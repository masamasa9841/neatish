<div id="list" role="main">
    <?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    <article>
        <header class="entry-header">
        <!-- blog-title -->
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"title="<?php the_title_attribute(); ?>"> <?php the_title_attribute(); ?></a></h2>
        <!-- blog-title -->
        </header>

        <div class="entry-summary">

            <!-- thumbnail -->
            <div class="excerpt-thumb">
                <?php if ( has_post_thumbnail() ): // has thumbnail ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail( 'thumbnail_200_140', array('class' => 'entry-thumnail', 'alt' => get_the_title()) ); ?></a>
                <?php else : // has not thumbnail ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>resources/src/images/no-image.png" alt="NO IMAGE" class="entry-thumnail no-image" /></a>
                <?php endif; ?>
            </div>
            <!-- thumbnail -->

            <!-- excerpt -->
            <p>
                <?php echo get_the_custom_excerpt( get_the_content(), 120 ) ?>
                <span class="read-more"><a href="<?php the_permalink(); ?>"> Read More » </a></span>
            </p>
            <!-- excerpt -->

        </div>


        <footer>

            <div class="entry-meta">
                <span>
                    <!-- category -->
                    Category: <?php the_category(', '); ?>
                    <!-- tag -->
                    tags: <?php the_tags('', ', '); ?>
                </span>
            <div>

            <div class="entry-meta">
                <span>
                    <!-- date -->
                    Date: <?php the_time('Y/n/j'); ?>
                    <!-- view -->
                    <?php
                        if (function_exists ('wpp_get_views')) {
                        echo 'views: ' . wpp_get_views ( get_the_ID() );
                        }
                    ?>
                    <!-- author -->
                    Author: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <?php the_author(); ?></a>
                </span>
            </div>
        </footer>

    </article>
    <?php endwhile; ?>
    <?php else : //記事が見つからなかったら?>
    <p>お探しの記事は見つかりませんでした。</p>
    <?php endif; ?>
</div><!-- /#main -->