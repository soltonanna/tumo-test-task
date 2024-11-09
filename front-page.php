<?php get_header(); ?>

<div class="front-page">

    <?php get_template_part('sections/section', 'latest-post'); ?>  

    <?php get_template_part('sections/section', 'recent-posts'); ?>

    <?php get_template_part('sections/section', 'books-list'); ?>
</div>

<?php 
get_footer();