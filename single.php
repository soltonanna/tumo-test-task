<?php get_header(); ?>

	<div class="container">

		<?php while ( have_posts() ): the_post(); ?>
		
			<h1 class="article-title">
				<?php the_title(); ?>
			</h1>

			<div class="content-wrp">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div>

<?php get_footer();