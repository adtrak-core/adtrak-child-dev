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
        <div class="row">
    		<div class="col-small-6 col-medium-4">
    			<h6>Explore</h6>
    			<?php wp_nav_menu([
    				'menu' => 'Footer Menu',
    				'menu_class' => 'nav nav--footer',
    				'container' => ''
    			]); ?>
    		</div>

            <div class="col-small-6 col-medium-4">
    			<h6>Other Links</h6>
    			<?php wp_nav_menu([
    				'menu' => 'Footer Other',
    				'menu_class' => 'nav nav--footer',
    				'container' => ''
    			]); ?>

                <p><a href="<?= site_url('/cookies-privacy-policy'); ?>">Cookies &amp; Privacy Policy</a></p>
    		</div>

    		<div class="col-small-12 col-medium-4">
    			<p>&copy; <?= get_bloginfo('name'); ?> <?= date('Y'); ?>. All Rights Reserved</p>
    			<?php
    			/**
    				* get_adtrak_logo accepts two arguments
    				* 'colour' (as white, black, orange/default) and
    				* 'icon' (as true or false)
    				* e.g. for the black icon use get_adtrak_logo('black', true)
    			*/ ?>
    		    <p><a class="adtrak" href="https://www.adtrak.co.uk" role="outgoing"><?= get_adtrak_logo(); ?></a></p>
    		</div>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
