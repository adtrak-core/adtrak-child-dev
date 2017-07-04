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

        <div>
            <div class="article_content">
            <h1>One Morning, When Gregor Samsa Woke</h1>
            <p>From troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
            <p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. “What’s happened to me?” he thought. It wasn’t a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
            <h2>One Morning, When Gregor Samsa Woke</h2>
            <p>From troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
            <p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. “What’s happened to me?” he thought. It wasn’t a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
            <h3>One Morning, When Gregor Samsa Woke</h3>
            <p>From troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
            <p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. “What’s happened to me?” he thought. It wasn’t a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
            <h4>One Morning, When Gregor Samsa Woke</h4>
            <p>From troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
            <p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. “What’s happened to me?” he thought. It wasn’t a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
            <p class="font_small text_muted">
              <em>— Excerpt from The Metamorphosis, by Franz Kafka.</em>
            </p>
        </div>

		<?php if (have_posts()): while (have_posts()): the_post(); ?>

			<?php the_title('<h1>', '</h1>'); ?>
			<?php the_content(); ?>

		<?php endwhile; else: ?>

			<p>Nothing to see.</p>

		<?php endif; ?>
	</section>

<?php get_footer(); ?>
