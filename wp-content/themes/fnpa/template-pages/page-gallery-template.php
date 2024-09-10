<?php 
get_header();
/* Template Name: Gallery */
?>


<main>  

	<?php get_template_part('template-parts/common/banner-section');  ?>

	<!-- Gallery Section Start -->
	<?php 
	$args = array(
		'post_type' => 'gallery',
		'post_status' => 'publish',
		'post_per_page' => -1,
	);

	$gallery_images = new WP_Query( $args );
	if( $gallery_images->have_posts() ):

		?>
		<section class="row_am gallery_section section-padding bg-white">
			<div class="container">
				<div class="row">
					<?php while( $gallery_images->have_posts() ):$gallery_images->the_post(); ?>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<?php 
							if( has_post_thumbnail() ):
								$thumbnail_id = get_post_thumbnail_id( $post->ID );
							$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);  
								?>
								<div class="img inmg-stye" data-aos="fade-up" data-aos-duration="1500">
									<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
								</div>
							<?php endif; ?>
							<a href="<?php the_permalink(); ?>"><h2 class="gallery-heading"><?php the_title(); ?></h2></a>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<!-- Gallery Section End -->


</main>


<?php 
get_footer();