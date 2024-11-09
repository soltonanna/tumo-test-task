<?php get_header(); ?>

<div class="single-post-page">
    <div class="content-wrap left-part">
        <?php while ( have_posts() ): the_post(); ?>

            <div class="top-meta-info">
                <div class="post-date secondary-text-color">
                    <?php the_date(); ?>
                </div>

                <div class="reading-time secondary-text-color">
                    <?php
                        $content = get_the_content();
                        $word_count = str_word_count(strip_tags($content));
                        $reading_time = ceil($word_count / 200); 
                        echo $reading_time . ' min read';
                    ?>
                </div>
            </div>

            <h1 class="article-title text-color">
                <?php the_title(); ?>
            </h1>

            <div class="post-thumbnail">
                <?php the_post_thumbnail('full'); ?>
            </div>

            <div class="content-wrp">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>

        <div class="post-navigation">
            <?php if (get_previous_post()) : ?>
                <div class="previous-post">
                    <?php previous_post_link('<p class="primary-text-color">Previous Article </p> %link'); ?>
                </div>
            <?php endif; ?>
    
            <?php if (get_next_post()) : ?>
                <div class="next-post">
                    <?php next_post_link('<p class="primary-text-color">Next Article </p> %link'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="related-posts right-part">
        <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'right-sidebar' ); ?>
        <?php else: ?>
            <p><?php _e( 'No widgets found.', 'text-domain' ); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
