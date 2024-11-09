<?php
get_header(); ?>

<div class="blog-posts">

    <?php
    // Determine current page number
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // Set posts per page conditionally based on page number
    $posts_per_page = ($paged === 1) ? 5 : 6;

    // Custom query for blog posts
    $args = [
        'post_type'      => 'post',
        'posts_per_page' => ($paged == 1) ? 5 : 6,  // 5 posts on the first page, 6 on subsequent pages
        'paged'          => $paged,
    ];
    $query = new WP_Query($args);

    // Check if there are posts
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>

            <!-- Display each post - customize this section as needed -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_post_thumbnail('full'); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
                <p><small><?php the_date(); ?></small></p>
            </article>

        <?php endwhile; ?>

        <!-- Pagination -->
        <div class="pagination">
    <?php
    echo paginate_links([
        'total'        => $query->max_num_pages,
        'current'      => $paged,
        'prev_text'    => __('« Previous', 'tumo'),
        'next_text'    => __('Next »', 'tumo'),
    ]);
    ?>
</div>

    <?php else : ?>
        <p><?php _e('No posts found', 'tumo'); ?></p>
    <?php endif;

    // Reset post data
    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>
