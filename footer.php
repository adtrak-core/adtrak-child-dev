<?php
/**
 * The template for displaying the footer within your theme.
 * @author  Adtrak
 * @package AdtrakChild
 * @version 1.0.0
 */
?>

	</main>

	<footer class="site-footer">
		<div class="site-footer__column">
			<h6>Explore</h6>
			<?php wp_nav_menu([
				'menu' => 'Footer Menu',
				'menu_class' => 'nav nav--footer',
				'container' => ''
			]); ?>
		</div>

        <div class="site-footer__column">
			<h6>Other Links</h6>
			<?php wp_nav_menu([
				'menu' => 'Footer Other',
				'menu_class' => 'nav nav--footer',
				'container' => ''
			]); ?>
            <p><a href="<?php echo site_url('cookies-privacy-policy/'); ?>">Cookies &amp; Privacy Policy</a></p>
            
		</div>

		<div class="site-footer__column">
			<p>&copy; <?php echo get_bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved</p>
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
