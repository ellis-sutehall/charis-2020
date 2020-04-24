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

	<section class="sign-up">
		<div class="container">
			<div class="columns">
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
								<div class="field mc-field-group">
									<div class="control has-icons-left">
										<input class="input" type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last Name">
										<span class="icon is-small is-left">
											<i class="fas fa-user"></i>
										</span>
									</div>
								</div>
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>
								<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ef65ce703436d18164d591079_3ea1d4ac85" tabindex="-1" value=""></div>
								<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
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
					<div class="column">
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
