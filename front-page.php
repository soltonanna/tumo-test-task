<?php get_header(); ?>

<div class="front-page">
    <?php
    $latest_post_query = new WP_Query([
        'posts_per_page' => 1, // Only get the latest post
    ]);

    if ($latest_post_query->have_posts()) :
        while ($latest_post_query->have_posts()) : $latest_post_query->the_post();
            // Get post thumbnail URL
            $background_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <section class="latest-post" style="background-image: url('<?php echo esc_url($background_image); ?>');">
                <div class="overlay">
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo get_the_date(); ?></p>
                </div>
            </section>
            <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>

    <?php
    // Query for the next 3 latest posts, excluding the first one
    $three_latest_posts_query = new WP_Query([
        'posts_per_page' => 3,
        'offset' => 1, // Skip the first post
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

    <?php
    // Get the shortcode and the "Read More" URL from the Customizer settings
    $book_shortcode = get_theme_mod('homepage_book_shortcode', '[book_list]');
    $read_more_url = get_theme_mod('homepage_books_read_more_url', '#');
    $book_shortcode = '[book_list posts_per_page="' . get_theme_mod('homepage_books_per_page', 4) . '"]';

    // Display the section for the book list
    if (!empty($book_shortcode)) : ?>
        <section class="books">
            <?php echo do_shortcode($book_shortcode); ?>
            
            <?php if (!empty($read_more_url)) : ?>
                <a href="<?php echo esc_url($read_more_url); ?>" class="read-more-button">Read More</a>
            <?php endif; ?>
        </section>
    <?php endif; ?>
</div>

<?php 
get_footer();