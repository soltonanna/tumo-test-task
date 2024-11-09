<?php
$three_latest_posts_query = new WP_Query([
    'posts_per_page' => 3,
    'offset' => 1,
]);

if ($three_latest_posts_query->have_posts()) : ?>
    <section class="recent-posts">
        <?php while ($three_latest_posts_query->have_posts()) : $three_latest_posts_query->the_post(); ?>
            
            <article class="post-item">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full'); ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo get_the_date(); ?></p>
                </a>
            </article>
            
        <?php endwhile; ?>
    </section>
    <?php
    wp_reset_postdata();
endif;
?>
