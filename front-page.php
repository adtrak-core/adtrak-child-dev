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
        <h2>Grid System</h2>

        <div class="row">
            <div class="col-small-2 col-large-4 col-huge-2">
                <div style="background: rebeccapurple; padding: 15px; color: white; margin-bottom: 20px;">1</div>
            </div>
            <div class="col-small-2 col-large-4 col-huge-2">
                <div style="background: rebeccapurple; padding: 15px; color: white; margin-bottom: 20px;">2</div>
            </div>
            <div class="col-small-2 col-large-4 col-huge-2">
                <div style="background: rebeccapurple; padding: 15px; color: white; margin-bottom: 20px;">3</div>
            </div>
            <div class="col-small-2 col-large-4 col-huge-2">
                <div style="background: rebeccapurple; padding: 15px; color: white; margin-bottom: 20px;">4</div>
            </div>
            <div class="col-small-2 col-large-4 col-huge-2">
                <div style="background: rebeccapurple; padding: 15px; color: white; margin-bottom: 20px;">5</div>
            </div>
            <div class="col-small-2 first-small col-large-4 col-huge-2">
                <div style="background: rebeccapurple; padding: 15px; color: white; margin-bottom: 20px;">6</div>
            </div>
        </div>

        <!-- Set up your HTML -->
        <h2>Carousel</h2>
        <div class="owl-carousel carousel">
          <div> Your Content </div>
          <div> Your Content </div>
          <div> Your Content </div>
          <div> Your Content </div>
          <div> Your Content </div>
          <div> Your Content </div>
          <div> Your Content </div>
        </div>

        <h2>Forms</h2>
        <div class="row">
            <div class="col-small-8">
                <form class="" action="index.html" method="post">
                    <fieldset>
                        <legend>Legend Name</legend>
                        <div class="">
                            <label for="">Input</label>
                            <input type="text" name="" value="" placeholder="input values">
                        </div>
                        <div class="">
                            <label for="">Selects</label>
                            <select class="" name="">
                                <option value="">option 1</option>
                                <option value="">option 2</option>
                                <option value="">option 3</option>
                            </select>
                        </div>
                        <div class="">
                            <label>Checkbox/Radio</label>
                            <label class="label--inline"><input type="checkbox" name="" value=""> Option</label>
                            <label class="label--inline"><input type="checkbox" name="" value=""> Option</label>
                            <label class="label--inline"><input type="radio" name="nama" value=""> Option</label>
                            <label class="label--inline"><input type="radio" name="nama" value=""> Option</label>
                        </div>
                        <div class="">
                            <p><button type="submit">Send Form</button></p>
                        </div>
                    </fieldset>
                </form>
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
