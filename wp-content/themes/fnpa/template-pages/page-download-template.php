<?php 
get_header();
/* Template Name: Download */
?>

<main>  

	<?php get_template_part('template-parts/common/banner-section'); ?>

	<!-- notice start -->
	<?php if( have_rows('download_details') ): ?>
		<section class="section-padding bg-white">
			<div class="container">
				<div class="row align-items-center justify-content-center">


					<?php 
					while( have_rows('download_details') ):the_row();

						$file_topic = get_sub_field('file_topic');
						$file = get_sub_field('pdf_file');
						?>
						<div class="col-lg-4 col-md-6 col-12 wow img-custom-anim-top">
							<div class="d-flex mt-4 border-bottom img-style custom-padding">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/download.png" alt="fnpa" class="align-self-start"/>
								<?php if( $file_topic ): ?>
									<div class="px-4 download-stylt">
										<a href="<?php echo $file['url']; ?>" class="fs-2 fw-bold text-dark" download><?php echo $file_topic; ?></a>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>

				</div>
			</div>
		</section>
	<?php endif; ?>
	<!-- notice end -->


</main>

<?php 
get_footer();