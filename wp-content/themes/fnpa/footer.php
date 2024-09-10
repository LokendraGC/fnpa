<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fnpa
 */

?>
<!-- Footer -->
<footer>
	<div class="container mt-5">
		<div class="row">
			<?php 
			$logo = get_field('wtn_footer_logo','options');

			if( $logo ){
				$fnpa_logo = $logo['url'];
			}else{
				$fnpa_logo = get_template_directory_uri() ."/assets/images/logo/logo.svg";
			}

			if( $fnpa_logo ):
				?>
				<div class="col-lg-3">
					<a class="navbar-brand pe-4" href="<?php echo site_url(''); ?>"><img src="<?php echo $fnpa_logo; ?>" alt="<?php echo get_bloginfo(); ?>" /></a>
					<?php if( $footer_desc = get_field('ob_footer_description','options') ): ?>
						<p class="pt-5 fs-4 fw-normal lh-base"><?php echo $footer_desc; ?></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			

				<div class="col-lg-3 hide-on-mobile">
					<div class="row">
			<?php if(is_active_sidebar('footer-menu-first')): ?>
					<?php dynamic_sidebar('footer-menu-first'); ?>
			<?php endif; ?>
				</div>
			</div>


			<?php if(is_active_sidebar('footer-menu-second')): ?>
				<div class="col-lg-3 hide-on-mobile">
					<div class="row">
					<?php dynamic_sidebar('footer-menu-second'); ?>
				</div>
			</div>
			<?php endif; ?>


			<div class="col-lg-3">
				<div class="row">
					<h5>Get in Touch</h5>
					<ul class="menu-footer">
						<?php if( $address = get_field('wtn_address','options') ): ?>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/location-pin.png" class="footer-img" alt="<?php echo $address; ?>">
								<?php echo $address; ?>
							</li>
							<?php
						endif;
						if( $phone_no = get_field('wtn_phone_number_first','options') ):
							?>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone-call.png" class="footer-img" alt="<?php echo $phone_no; ?>">
								<a href="tel:<?php echo $phone_no; ?>"><?php echo $phone_no; ?></a>
							</li>
							<?php
						endif;
						if( $mail = get_field('wtn_email_address_first','options') ):
							?>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/mail.png" class="footer-img" alt=""> 
								<a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
							</li>
						<?php endif; ?>
						<li>
							<h5>Follow Us</h5>
							<?php if( have_rows('wtn_social_media','options') ): ?>
								<div class="col d-flex">
									<div class="d-flex gap-4">
										<?php while( have_rows('wtn_social_media','options') ):the_row();

											$media_icon = get_sub_field('wtn_media','options');
											$media_link = get_sub_field('wtn_link','options');
											if( $media_link ){
												$url = $media_link;
												$target = '_blank';
											}else{
												$url = '#';
												$target = '_self';
											}
											?>
											<a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="text-reset">
												<i class="bi <?php echo $media_icon; ?>"></i>
											</a>
										<?php endwhile; ?>

									</div>
								</div>
							<?php endif; ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container mb-3">
		<hr />
		<div class="my-3 mx-auto align-items-center text-secondary">
			<div class="footer-font">
				© <?php echo Date('Y'); ?> Copyright <?php echo get_bloginfo(); ?>. All Rights Reserved.Developed By <a href="https://webtechnepal.com/" target="_blank">Webtech Nepal</a>
			</div>
		</div>
	</div>
</footer>

<!-- Scroll top -->
<div class="btn-scroll-top">
	<svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
		<path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
	</svg>
</div>

<script>
	document.addEventListener("DOMContentLoaded", function() {
		const menuLinks = document.querySelectorAll('#menu-footer-menu-first a');
		menuLinks.forEach(link => {
			link.classList.add('text-reset', 'mb-3','d-block');
		});

		const menuLinks_sec = document.querySelectorAll('#menu-footer-menu-second a');
		menuLinks_sec.forEach(link => {
			link.classList.add('text-reset', 'mb-3','d-block');
		});

	});

document.addEventListener("DOMContentLoaded", function() {
    const menu = document.querySelectorAll('#menu-footer-menu-first a');
    const parent = document.getElementById('menu-footer-menu-first');
    
    // Create a new div to replace the ul
    const newContainer = document.createElement('div');

    // Append only the anchor tags to the new container
    menu.forEach(link => {
        newContainer.appendChild(link);
    });

    // Replace the ul with the new div
    parent.replaceWith(newContainer);

});

document.addEventListener("DOMContentLoaded", function() {
    const menuContainer = document.querySelector('.menu-footer-menu-second-container'); // Select the container
    const links = menuContainer.querySelectorAll('a'); // Select all the <a> tags inside the container
    
    // Create a new div to hold the links
    const newContainer = document.createElement('div');
    newContainer.classList.add('col', 'd-flex', 'flex-column', 'align-items-start');
    
    // Loop through all the <a> tags and append them to the new container
    links.forEach(link => {
        newContainer.appendChild(link);
    });

    // Replace the old menu container with the new container
    menuContainer.replaceWith(newContainer);
});



</script>


<?php wp_footer(); ?>

</body>
</html>
