<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package warriors_of_the_month
 */

?>

	<footer id="footer">
		<!--TODO: add mailchimp signup form here along with social and other info-->
		<div class="row">
			<div class="columns small-12 medium-6 large-4">
				<p>
					Copywrite Warriors of the Month 2017
				</p>
			</div>
			<div class="columns small-12 medium-6 large-4 large-offset-4">
				<!-- Begin MailChimp Signup Form -->
				<form action="//warriorsofthemonth.us10.list-manage.com/subscribe/post?u=3ce81cc8b4d0f58b137414ad7&amp;id=a7bc4074d9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<p>Subscribe to our mailing list</p>
					<div class="input-group">
						<input type="email" value="" placeholder="Email" name="EMAIL" class="input-group-field" id="mce-EMAIL">
						<div class="input-group-button">
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
						</div>
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; top: 0; left: -5000px;" aria-hidden="true"><input type="text" name="b_3ce81cc8b4d0f58b137414ad7_a7bc4074d9" tabindex="-1" value=""></div>
				</form>
				<!--End mc_embed_signup-->
			</div>
		</div>

	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
