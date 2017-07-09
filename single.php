<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package warriors_of_the_month
 */

get_header(); ?>

<main>
	<section>
		<div class="row section-title">
			<div class="columns small-12 medium-12">
				<h2>News</h2>
				<p></p>
			</div>
		</div>
		<div class="row">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>
		</div>
	</section>
</main>

<?php
// get_sidebar();
get_footer();
