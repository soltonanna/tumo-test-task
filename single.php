<?php get_header(); ?>

<div class="single-page">
    <div class="content-wrap">
        <?php while ( have_posts() ): the_post(); ?>
            <!-- Post Thumbnail -->
            <div class="post-thumbnail">
                <?php the_post_thumbnail('full'); ?>
            </div>

            <!-- Post Title -->
            <h1 class="article-title">
                <?php the_title(); ?>
            </h1>

            <!-- Post Date -->
            <div class="post-date">
                <small>Published on: <?php the_date(); ?></small>
            </div>

            <!-- Estimated Reading Time -->
            <div class="reading-time">
                <?php
                    $content = get_the_content();
                    $word_count = str_word_count(strip_tags($content));
                    $reading_time = ceil($word_count / 200); // Average reading speed: 200 words per minute
                    echo '<small>Estimated Read Time: ' . $reading_time . ' min read</small>';
                ?>
            </div>

            <!-- Post Content -->
            <div class="content-wrp">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>

        <!-- Navigation Links: Previous and Next Articles -->
        <div class="post-navigation">
            <div class="previous-post">
                <?php previous_post_link('<strong>Previous Article:</strong> %link'); ?>
            </div>
            <div class="next-post">
                <?php next_post_link('<strong>Next Article:</strong> %link'); ?>
            </div>
        </div>

    </div>

    <!-- Sidebar Section -->
    <div class="sidebar">
        <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'right-sidebar' ); ?>
        <?php else: ?>
            <!-- Optional: Display a message if no widgets are added -->
            <p><?php _e( 'No widgets found.', 'text-domain' ); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
