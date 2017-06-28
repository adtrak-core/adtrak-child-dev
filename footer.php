<?php
/**
 * The template for displaying the footer within your theme.
 * @author  Adtrak
 * @package AdtrakChild
 * @version 1.0.0
 */
?>

	</main>

	<footer>
		<div>
			<?php
			$image = get_field('site_logo','option');
			if (! empty($image)): ?>
					<a href="<?php echo home_url(); ?>"><img class="logo logo--footer" src="<?php echo $image['url']; ?>" alt="<?php bloginfo('title'); ?> Logo"></a>
			<?php endif; ?>
		</div>

		<div>
			<h6>Explore</h6>
			<?php wp_nav_menu([
				'menu' => 'Footer Menu',
				'menu_class' => 'nav nav--footer',
				'container' => ''
			]); ?>
		</div>

		<div>
			<p>&copy; <?php echo get_bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved</p>
			<p><a href="<?php echo site_url('cookies-privacy-policy/'); ?>">Cookies &amp; Privacy Policy</a></p>
			<?php
			/**
				* get_adtrak_logo accepts two arguments
				* 'colour' (as white, black, orange/default) and
				* 'icon' (as true or false)
				* e.g. for the black icon use get_adtrak_logo('black', true)
			*/ ?>
		    <p><a class="adtrak" href="https://www.adtrak.co.uk" role="outgoing"><?php echo get_adtrak_logo(); ?></a></p>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
