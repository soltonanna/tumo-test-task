<?php
get_header(); ?>

<div class="blog-posts">

    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $posts_per_page = ($paged === 1) ? 5 : 6;

    $args = [
        'post_type'      => 'post',
        'posts_per_page' => ($paged == 1) ? 5 : 6,
        'paged'          => $paged,
    ];
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_post_thumbnail('full'); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
                <p><small><?php the_date(); ?></small></p>
            </article>

        <?php endwhile; ?>

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

    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>
