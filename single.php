<?php get_header(); ?>

	<section class="container">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<article>
				<?php the_title('<h1>', '</h1>'); ?>
				<?php the_content(); ?>
			</article>

		<?php endwhile; endif; ?>
	</section>

<?php get_footer();
