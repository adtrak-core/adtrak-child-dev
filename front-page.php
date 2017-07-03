<?php
/**
 * The template for the front-page of the site. This will be the
 * landing page of your site.
 * @author  Adtrak
 * @package AdtrakChild
 * @version 1.0.0
 */

get_header(); ?>

	<section class="container">
        <div class="row">
            <div class="col-small-2 col-large-4">
                <div class="item">1</div>
            </div>
            <div class="col-small-2 col-large-4">
                <div class="item">2</div>
            </div>
            <div class="col-small-2 col-large-4">
                <div class="item">3</div>
            </div>
            <div class="col-small-2 col-large-4">
                <div class="item">4</div>
            </div>
            <div class="col-small-2 col-large-4">
                <div class="item">5</div>
            </div>
            <div class="col-small-2 first-small col-large-4">
                <div class="item">6</div>
            </div>
        </div>

		<?php if (have_posts()): while (have_posts()): the_post(); ?>

			<?php the_title('<h1>', '</h1>'); ?>
			<?php the_content(); ?>

		<?php endwhile; else: ?>

			<p>Nothing to see.</p>

		<?php endif; ?>
	</section>

<?php get_footer(); ?>
