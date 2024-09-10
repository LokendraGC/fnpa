<?php 
get_header();
?>

<main>  

	<?php get_template_part('template-parts/common/banner-section'); ?>

	<!-- Gallery Section Start -->
	<?php if( $gallery_images = get_field('gallery_images') ): ?>
		<section class="row_am gallery_section section-padding bg-white">
			<div class="container">
				<div class="row">
					<?php foreach( $gallery_images as $image ): ?>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="img inmg-stye" data-aos="fade-up" data-aos-duration="1500">
								<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
								<a href="<?php echo $image['url']; ?>" data-lightbox="example-set">
									<i class="fa fa-search icon-search"></i>
								</a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<!-- Gallery Section End -->

</main>
<?php 
get_footer();