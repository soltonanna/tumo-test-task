<?php
get_header(); ?>

<div class="blog-posts">

    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $posts_per_page = ($paged === 1) ? 5 : 6;
    $args = [
        'post_type'      => 'post',
        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
    ];
    $query = new WP_Query($args);

    if ($query->have_posts()) : ?>
        <div class="blog-posts-list <?php echo ($posts_per_page === 5) ? 'five-posts' : 'six-posts'; ?>">
            <?php while ($query->have_posts()) : $query->the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('full'); ?>
                        <div>
                            <p class="post-date secondary-text-color">
                                <?php echo get_the_date(); ?>
                            </p>
                            <p><?php //the_excerpt(); ?></p>
                            <h3 class="post-title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="theme-pagination">
            <?php
            echo paginate_links([
                'total'        => $query->max_num_pages,
                'current'      => $paged,
                'prev_text'    => '<span class="prev"></span>',
                'next_text'    => '<span class="next"></span>',
            ]);
            ?>
        </div>

    <?php else : ?>
        <p><?php _e('No posts found', 'tumo'); ?></p>
    <?php endif; ?>

    <?php wp_reset_postdata();?>
</div>

<?php get_footer(); ?>
