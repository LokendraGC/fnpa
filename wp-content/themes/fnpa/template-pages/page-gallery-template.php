<?php 
get_header();
/* Template Name: Gallery */
?>


<main>  

 <?php get_template_part('template-parts/common/banner-section');  ?>

	<!-- Gallery Section Start -->
	<section class="row_am gallery_section section-padding bg-white">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="img inmg-stye" data-aos="fade-up" data-aos-duration="1500">
						<img class="img-fluid" src="https://fnpa.org.np/wp-content/uploads/2022/06/Workshop-image-27.jpg" alt="img">
					</div>
					<a href="gallery-album.html"><h2 class="gallery-heading">Gallery1</h2></a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="img inmg-stye" data-aos="fade-up" data-aos-duration="1500">
						<img class="img-fluid" src="https://fnpa.org.np/wp-content/uploads/2022/06/Workshop-image-30.jpg" alt="img">
					</div>
					<a href="gallery-album.html"><h2 class="gallery-heading">Gallery2</h2></a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="img inmg-stye" data-aos="fade-up" data-aos-duration="1500">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-blog/blog3.jpg" alt="img">
					</div>
					<a href="gallery-album.html"><h2 class="gallery-heading">Gallery3</h2></a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="img inmg-stye" data-aos="fade-up" data-aos-duration="1500">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-blog/blog4.jpg" alt="img">
					</div>
					<a href="gallery-album.html"><h2 class="gallery-heading">Gallery4</h2></a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="img inmg-stye" data-aos="fade-up" data-aos-duration="1500">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-blog/blog5.jpg" alt="img">
					</div>
					<a href="gallery-album.html"><h2 class="gallery-heading">Gallery5</h2></a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="img inmg-stye" data-aos="fade-up" data-aos-duration="1500">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-blog/blog6.jpg" alt="img">
					</div>
					<a href="gallery-album.html"><h2 class="gallery-heading">Gallery6</h2></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Gallery Section End -->


</main>


<?php 
get_footer();