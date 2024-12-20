<?php
$latest_post_query = new WP_Query([
    'posts_per_page' => 1,
]);
?>
<?php if ($latest_post_query->have_posts()) : ?>

    <?php while ($latest_post_query->have_posts()) : $latest_post_query->the_post();
        
        $background_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
        
        <section class="latest-post" style="background-image: url('<?php echo esc_url($background_image); ?>');">
            <div class="overlay">
                <p class="post-date secondary-text-color">
                    <?php echo get_the_date(); ?>
                </p>
                <h1 class="post-title">
                    <a href="<?php the_permalink(); ?>" class="primary-text-color">
                        <?php the_title(); ?>
                    </a>
                </h1>
            </div>
        </section>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>