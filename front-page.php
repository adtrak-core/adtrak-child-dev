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

<table class="table--responsive">
  <thead>
    <tr>
      <th>Browser</th>
      <th>Sessions</th>
      <th>Percentage</td>
      <th>New Users</th>
      <th>Avg. Duration</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Chrome</td>
      <td>9,562</td>
      <td>68.81%</td>
      <td>7,895</td>
      <td>01:07</td>
    </tr>
    <tr>
      <td>Firefox</td>
      <td>2,403</td>
      <td>17.29%</td>
      <td>2,046</td>
      <td>00:59</td>
    </tr>
    <tr>
      <td>Safari</td>
      <td>1,089</td>
      <td>2.63%</td>
      <td>904</td>
      <td>00:59</td>
    </tr>
    <tr>
      <td>Internet Explorer</td>
      <td>366</td>
      <td>2.63%</td>
      <td>333</td>
      <td>01:01</td>
    </tr>
    <tr>
      <td>Safari (in-app)</td>
      <td>162</td>
      <td>1.17%</td>
      <td>112</td>
      <td>00:58</td>
    </tr>
    <tr>
      <td>Opera</td>
      <td>103</td>
      <td>0.74%</td>
      <td>87</td>
      <td>01:22</td>
    </tr>
    <tr>
      <td>Edge</td>
      <td>98</td>
      <td>0.71%</td>
      <td>69</td>
      <td>01:18</td>
    </tr>
    <tr>
      <td>Other</td>
      <td>275</td>
      <td>6.02%</td>
      <td>90</td>
      <td>N/A</td>
    </tr>
  </tbody>
</table>

<h3>Buttons</h3>

<p>Default: <button type="button" name="button">Button</button></p>
<p>Small: <button type="button" name="button" class="button--small">Button</button></p>
<p>Default: <input type="submit" name="button" value="Button"></p>
<p>Disabled: <input type="submit" name="button" disabled value="Disabled"></p>

		<?php if (have_posts()): while (have_posts()): the_post(); ?>

			<?php the_title('<h1>', '</h1>'); ?>
			<?php the_content(); ?>

		<?php endwhile; else: ?>

			<p>Nothing to see.</p>

		<?php endif; ?>
	</section>

<?php get_footer(); ?>
