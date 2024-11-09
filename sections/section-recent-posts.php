<?php
$three_latest_posts_query = new WP_Query([
    'posts_per_page' => 3,
    'offset' => 1,
]);
?>

<?php if ($three_latest_posts_query->have_posts()) : ?>
    
    <section class="recent-posts">
        <h2>Latest News</h2>
        <div class="recent-posts-list">
            <?php while ($three_latest_posts_query->have_posts()) : $three_latest_posts_query->the_post(); ?>
                <article class="post-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('full'); ?>
                        <p class="post-date secondary-text-color">
                            <?php echo get_the_date(); ?>
                        </p>
                        <h3 class="post-title"><?php the_title(); ?></h3>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>
    </section>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>
