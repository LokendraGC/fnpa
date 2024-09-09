<?php 
get_header();
/* Template Name: News */
?>

<main>  

	<!-- blog section-1 start -->
	<section class="blog-section-1 wow img-custom-anim-top section-padding">
		<div class="container">
			<div class="row">
				<div class="col-12 brd-style">
					<div class="col-12 text-center breadcrumb">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li class="actives">Blog</li>
						</ul>
					</div>
					<h1>Blog</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- blog section-1 end -->

	<?php 
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'post_per_page' => -1,
	);

	$post_args = get_posts( $args );
	if( $post_args ):
		
	 ?>
	<section class="container-fluid position-relative section-padding bg-white">
		<div class="container">
			<div class="row mb-5">
				 <?php
       foreach( $post_args as $post ):
         setup_postdata( $post ); 
         ?>
				<div class="col-lg-4 col-12 d-flex justify-content-center pb-10 mt-8 mt-lg-0 mb-5">
					<div class="position-relative z-2 w-400">
						<?php 
						$post_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						if($post_img ):

							?>
						<div class="zoom-img blog-img">
							<a href="<?php echo get_permalink( $post->ID ); ?>"><img src="<?php echo $post_img[0]; ?>" alt="<?php echo $post->post_title; ?>" /></a>
						</div>
					<?php endif; ?>
						<div class="card-hover">
							<div class="title-news bg-white">
								<div class="position-relative p-4">
									<p class="text-primary fs-6"><?php echo get_the_date('F j, Y'); ?></p>
									<div class="notice-style">
										<a href="<?php echo get_permalink( $post->ID ); ?>" class="blog-a text-black fw-bold pb-4"><?php echo $post->post_title; ?></a>
									</div>
									<a href="<?php echo get_permalink( $post->ID ); ?>" class="text-primary fw-medium pt-2 d-lg-inline-block"><i class="bi bi-arrow-right me-2"></i>Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
			 endforeach;
			 wp_reset_postdata();
			 ?>
			</div>
			<div class="mx-auto">
				<a href="#" class="btn-gradient mx-auto">View All<i class="bi bi-arrow-right ms-2"></i></a>
			</div>
		</div>
		
	</section>
<?php endif; ?>

</main>

<?php 
get_footer();