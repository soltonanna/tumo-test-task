<?php
/****
 * Get the shortcode and the "Read More" URL from the 'WP Admin / Appearance / Customize' settings
*/
$book_shortcode = get_theme_mod('homepage_book_shortcode', '[book_list]');
$read_more_url = get_theme_mod('homepage_books_read_more_url', '#');
$book_shortcode = '[book_list posts_per_page="' . get_theme_mod('homepage_books_per_page', 4) . '"]';

if (!empty($book_shortcode)) : ?>
    <section class="homepage-books-list">
        <?php echo do_shortcode($book_shortcode); ?>
        
        <?php if (!empty($read_more_url)) : ?>
            <a href="<?php echo esc_url($read_more_url); ?>" class="read-more-button">Read More</a>
        <?php endif; ?>
    </section>
<?php endif; ?>