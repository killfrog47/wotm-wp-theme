<?php
/**
	* Template Name: Blog Page
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
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>6)); ?>

			<?php if ( $wpb_all_query->have_posts() ) : ?>

				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

					<div class="columns small-12 medium-12 blog-post">
						<div class="blog-post_content" style="background: url()">
							<!--<?php the_post_thumbnail(array(200,200)); ?>-->
							<h3>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
							<?php the_excerpt(); ?>
							<p class="post-data">
								Posted: <?php the_date(); ?> by <?php the_author(); ?>
							</p>
							<p>
							<!--<div class="readMoreBtn">-->
								<a href="<?php the_permalink(); ?>" class="readMore">Read More</a>
							<!--</div>-->
							</p>
						</div>
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php
// get_sidebar();
get_footer();
