<?php
// Check if the "Display Book List" checkbox is enabled
$display_book_list = get_theme_mod('homepage_book_shortcode', false);

// Get the number of books per page and the "Read More" URL
$books_per_page = get_theme_mod('homepage_books_per_page', 4);
$read_more_url = get_theme_mod('homepage_books_read_more_url', '#');

if ($display_book_list) :
    $book_shortcode = '[book_list posts_per_page="' . $books_per_page . '"]';
    ?>
    <section class="homepage-books-list">
        <?php echo do_shortcode($book_shortcode); ?>

        <?php if (!empty($read_more_url)) : ?>
            <a href="<?php echo esc_url($read_more_url); ?>" class="btn read-more-button">
                More Books
            </a>
        <?php endif; ?>
    </section>
<?php endif; ?>
