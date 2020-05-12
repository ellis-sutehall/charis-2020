<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package charis-2020
 */

?>

	</div><!-- #content -->

	<?php /* Check if product page */ ?>
	<?php if( is_product() ): ?>

	<?php
		// Get category to output as class name
		global $post;
		$terms = get_the_terms( $post->ID, 'product_cat' );
		if($terms) {
			foreach ($terms as $term) {
				$product_cat_name = $term->name;
				break;
			}
		}
	?>

	<?php
		$cta_desc = '';
		switch ($product_cat_name) {
			case 'Bangles':
				$cta_desc = 'Handmade Sterling Silver Bangles. Various Styles And Shapes To Suit everyone';
				break;

			case 'Earrings':
				$cta_desc = 'Handmade Sterling Silver Earrings. Various styles and designs to suit every occasion';
				break;

			case 'Rings':
				$cta_desc = 'Handmade Sterling Silver Rings. View the range of with or without precious stones';
				break;

			case 'Necklaces':
				$cta_desc = 'Handmade Sterling Silver Necklaces and pendants. I have different designs from small pendants to linked necklaces. I even have matching necklace and earrings pairs';
				break;
			
			default:
				$cta_desc = '';
				break;
		}
	?>

		<section class="cta content-right <?php echo strtolower($product_cat_name); ?>">
			<div class="container">
				<div class="columns">
					<div class="column is-one-third <?php if($product_cat_name != 'Earrings') echo 'is-offset-8'; ?>">
						<h2 class="title is-2">View all <?php echo strtolower($product_cat_name); ?></h2>
						<?php if($cta_desc != ''): ?>
							<h4 class="title is-4"><?php echo $cta_desc; ?></h4>
						<?php endif; ?>
						<a href="/shop/category/<?php echo strtolower($product_cat_name); ?>" class="button is-primary">Shop Now</a>
					</div>
					<div class="column is-hidden-tablet is-hidden-desktop"></div>
				</div>
			</div>
		</section>

	<?php endif; ?>

	<section class="sign-up">
		<div class="container">
			<div class="columns is-vcentered">
				<div class="column is-one-third">
					<h2 class="title is-2">Join my mailing list</h2>
					<p>Sign up today for <strong>Free Delivery</strong> on your first order and exclusive online only offers and news of upcoming products.</p>
				</div>
				<div class="column is-two-thirds">
					<div id="mc_embed_signup">
						<form action="//charissutehall.us7.list-manage.com/subscribe/post?u=ef65ce703436d18164d591079&amp;id=3ea1d4ac85" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
								<div class="field mc-field-group">
									<div class="control has-icons-left">
										<input class="input" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address *">
										<span class="icon is-small is-left">
											<i class="fas fa-envelope"></i>
										</span>
									</div>
								</div>
								<div class="field mc-field-group">
									<div class="control has-icons-left">
										<input class="input" type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First Name *">
										<span class="icon is-small is-left">
											<i class="fas fa-user"></i>
										</span>
									</div>
								</div>
								<!-- <div class="field mc-field-group">
									<div class="control has-icons-left">
										<input class="input" type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last Name">
										<span class="icon is-small is-left">
											<i class="fas fa-user"></i>
										</span>
									</div>
								</div> -->
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>
								<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ef65ce703436d18164d591079_3ea1d4ac85" tabindex="-1" value=""></div>
								<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button is-secondary"></div>
							</div>
						</form>
					</div>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				</div>
			</div>
		</div>
	</section>

	<footer class="site-footer">
		<div class="container">
			<div class="columns">
				<div class="column is-one-third">
					<div class="footer-widgets">
						<?php
						if(is_active_sidebar('footer-one')){
							dynamic_sidebar('footer-one');
						}
						?>
					</div>
				</div>
				
				<div class="column is-one-third">
					<div class="footer-widgets">
						<?php
						if(is_active_sidebar('footer-two')){
							dynamic_sidebar('footer-two');
						}
						?>
					</div>
				</div>
				<div class="column is-one-third">
					<div class="footer-widgets">
						<?php
						if(is_active_sidebar('footer-three')){
							dynamic_sidebar('footer-three');
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="columns">
					<div class="column has-text-centered has-text-left-desktop">
						<p>Copyright &copy; <?php echo date("Y"); ?> Charis Sutehall</p>
					</div>
					<div class="column">
						<ul class="social-icons">
							<li><a href="http://instagram.com/charissutehall" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/dist/img/social-icons/icon-instagram.png" /></a></li>
							<li><a href="https://www.etsy.com/shop/charissutehall" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/dist/img/social-icons/icon-etsy.png" /></a></li>
							<li><a href="https://www.facebook.com/charissutehall/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/dist/img/social-icons/icon-facebook.png" /></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
