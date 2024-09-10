<?php 
get_header();
/* Template Name: Events */
?>

<main>  

	<?php get_template_part('template-parts/common/banner-section'); ?>

	<!-- blog section-2 start -->
	<?php 
	$args = array(
		'post_type' => 'event',
		'post_status' => 'publish',
		'post_per_page' => -1,
	);

	$events_args = new WP_Query( $args );
	if( $events_args->have_posts() ):
		?>
		<section class="blog section-2 section-padding bg-white">
			<div class="container">
				<div class="row align-items-center justify-content-center">

					<?php 
					while( $events_args->have_posts() ):$events_args->the_post();
						?>

						<div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center wow img-custom-anim-top event">
							<div class="zoom-img blog-img">
								<?php 
								if( has_post_thumbnail() ): ?>
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
								<?php endif; ?>
								<div class="card-benifits bg-f6">
									<div class="text-start p-4">
										<div class="notice-style">
											<h3 class="mb-2 fw-bold "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										</div>
										<p class="fs-5 text-secondary"><?php echo wp_trim_words(get_the_content(),15); ?></p>
										<a href="<?php the_permalink(); ?>"><i class="bi bi-arrow-right me-2"></i>read more</a>
									</div>
								</div>
							</div>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			</section>
		<?php endif; ?>
		<!-- blog section-2 end -->


	</main>

	<?php 
	get_footer();