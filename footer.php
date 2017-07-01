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

	<footer id="colophon" class="site-footer">
		<!--TODO: add mailchimp signup form here along with social and other info-->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wotm' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'wotm' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wotm' ), 'wotm', '<a href="https://automattic.com/">Tomas Cordero</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
