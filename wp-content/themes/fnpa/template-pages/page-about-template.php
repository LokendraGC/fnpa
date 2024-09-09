<?php 
get_header();
/* Template Name: About */
?>

<main>  

	 <?php get_template_part('template-parts/common/banner-section'); ?>
	 
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