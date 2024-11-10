<?php get_header(); ?>

<div class="category-page">
    <h1><?php single_cat_title(); ?></h1>

    <?php if (have_posts()) : ?>
        <div class="category-posts blog-posts-list">
            <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                    <a href="<?php the_permalink(); ?>">
                        
                        <?php the_post_thumbnail('full'); ?>
                        
                        <div>
                            <div class="top-meta-info">
                                <div class="post-date secondary-text-color">
                                    <?php echo get_the_date(); ?>
                                </div>

                                <div class="reading-time secondary-text-color">
                                    <?php
                                        $content = get_the_content();
                                        $word_count = str_word_count(strip_tags($content));
                                        $reading_time = ceil($word_count / 200); 
                                        echo $reading_time . ' min read';
                                    ?>
                                </div>
                            </div>
                            <p><?php //the_excerpt(); ?></p>
                            <h3 class="post-title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>

        <?php the_posts_navigation(); ?>
    <?php else : ?>
        <p>No posts found in this category.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
