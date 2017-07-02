<?php
/**
	* Template Name: Front Page
	*/

get_header(); ?>

<main>

	<section id="blog">
		<div class="row section-title">
			<div class="columns small-12 medium-12">
				<h2>Blog</h2>
			</div>
		</div>
		<div class="row">
			<?php
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>6)); ?>

			<?php if ( $wpb_all_query->have_posts() ) : ?>

				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

					<div class="columns small-12 medium-4">
						<h3>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<p>
							<?php the_excerpt(); ?>
						</p>
						<p>
							<a href="<?php the_permalink(); ?>" class="readMore">Read More</a>
						</p>
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</section>
	<section id="music">
		<div class="row section-title">
			<div class="columns small-12">
				<h2>Music</h2>
			</div>
		</div>
		<div class="row">
			<div class="columns small-12">
				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/286197382&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
			</div>
		</div>
		<!--TODO: add custom feilds so the band can add music them selves-->
	</section>
	<section id="shows">
		<!--TODO: add bands in town using their API: http://www.bandsintown.com/artist_platform/wordpress/documentation -->
		<div class="row section-title">
			<div class="columns small-12">
				<h2>Shows</h2>
			</div>
		</div>
		<div class="row">
			<div class="columns small-12">
				<?php
					$options = array('scope' => 'upcoming', 'artist' => 1, 'limit' => 10);
    				echo gigpress_shows($options);
				?>
			</div>
		</div>
	</section>
	<!--<section id="contact">-->
		<!--TODO: add email contact form to site: https://contactform7.com -->
	<!--</section>-->
</main>

<?php
// get_sidebar();
get_footer();
