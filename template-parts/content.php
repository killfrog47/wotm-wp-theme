<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package warriors_of_the_month
 */

?>

<div id="post-<?php the_ID(); ?>" class="columns small-12">

	<div class="entry-content">
		<?php
			the_content( get_the_title() );

			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wotm' ),
			// 	'after'  => '</div>',
			// ) );
		?>
	</div><!-- .entry-content -->

	<!--<footer class="entry-footer">
		<?php wotm_entry_footer(); ?>
	</footer>-->
</div><!-- #post-<?php the_ID(); ?> -->
