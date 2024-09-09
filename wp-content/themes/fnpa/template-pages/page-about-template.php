<?php 
get_header();
/* Template Name: About */
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
							<li class="actives">About</li>
						</ul>
					</div>
					<h1>About Us</h1>
				</div>
			</div>
		</div>
	</section>
	<?php 
			$content = get_the_content();
			if( $content ):
	 ?>
	<!-- blog section-1 end -->

	<!--About start-->
	<?php the_content(); ?>

<?php endif; ?>
</main>

<?php 
get_footer();