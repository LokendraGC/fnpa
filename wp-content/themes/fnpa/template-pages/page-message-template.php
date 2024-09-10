<?php 
get_header();
/* Template Name: Message From Head */
?>

<main> 
 
 <?php get_template_part('template-parts/common/banner-section'); ?>

	<!--About start-->
	<section class="section-padding overflow-hidden bg-white">
		<div class="container">
			<div class="row">
				<?php 
				if( has_post_thumbnail() ):
					$thumbnail_id = get_post_thumbnail_id( $post->ID );
					$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);  
				 ?>
				<div class="col-lg-4 col-12">
					<div class="position-relative d-inline-flex president-img">
						<img class="img-fluid position-relative z-1" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>" />
					</div>
				</div>
			<?php endif; ?>
				<div class="col-lg-8 col-12 position-relative mt-10 mt-lg-0">
					<div class="z-2 position-relative">
						<div class="row">
							<div class="col-md-12 wow img-custom-anim-left">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--About end-->
</main>

<?php 
get_footer();